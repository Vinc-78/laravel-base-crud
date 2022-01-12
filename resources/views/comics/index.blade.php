@extends('parts.layout')

@section('title', "Home" )
    
@section('content')

<div class="container">

    <h1>Lista fumetti</h1>
  
    <a class="btn btn-link" href="{{ route('comics.create') }} ">Aggiungi...</a>  
  
    <br>
    <ul>
      @foreach($comics as $comic)

        <li><a href="{{ route('comics.show') }} ">{{ $comic["title"] }}</a></li>

        
      @endforeach
    </ul>
  </div>


    
@endsection