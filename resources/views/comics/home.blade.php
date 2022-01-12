@extends('comics.layout')

@section('title', "Home" )
    
@section('content')

<div class="container">

    <h1>Lista fumetti</h1>
  
    <a class="btn btn-link" href=" ">Aggiungi...</a>  {{-- {{ route('users.create') }} --}}
  
    <br>
    <ul>
      @foreach($comics as $comic)
        <li><a href="">{{ $comic["title"] }}</a></li>

       {{--  {{ route('comics.create') }} --}}


      @endforeach
    </ul>
  </div>


    
@endsection