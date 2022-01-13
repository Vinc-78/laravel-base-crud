<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comic;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics=Comic::all();

        return view("comics.index", compact("comics"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("comics.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            "title" => "required|min:1",
            "price" => "required|min:1",
            "series" => "required|min:1",
            "sale_date" => "required|min:1",
            "type" => "required|min:1",
            
          ]);
      
          $data = $request->all();
      
          $newComic = new Comic();
          $newComic->fill($data);
         
      
          $newComic->save();
         /*  return redirect()->route("comics.show", ['$id'=>$newComic->id]); il secondo argomento si può semplificare*/
         
         return redirect()->route("comics.show", $newComic->id)->with("msg", "Elemento aggiunto");

        }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        return view("comics.show", compact("comic"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {

        return view("comics.edit", compact("comic"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
        $request->validate([
            "title" => "min:1",
            "price" => "min:1",
            "series" => "min:1",
            "sale_date" => "min:1",
            "type" => "min:1",
            
          ]);
      
          $data = $request->all();
      
          $comic->update($data);
         
      
        
         return redirect()->route("comics.show", $comic->id)->with("msg", "Elemento modificato");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();

        return redirect()->route("comics.index")->with("msg", "Elemento eliminato");; 
    }
}
