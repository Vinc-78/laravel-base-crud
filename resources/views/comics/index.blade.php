@extends('parts.layout')

@section('title', "Home" )
    
@section('content')

<div class="container">

    <h1>Lista fumetti</h1>
  
    <a class="btn btn-link" href="{{ route('comics.create') }} ">Aggiungi...</a>  
  
    <br>
    <ul>
      @foreach($comics as $comic)

        <li><a href="{{ route('comics.show' , $comic->id) }} ">{{ $comic["title"] }}</a></li>

        
      @endforeach
    </ul>

    @if (session("msg")) {{-- se il caricamento avviene da il messaggio indicato con il with nel controller --}}

      <div class="alert alert-success">{{session("msg")}}</div>

  @endif
  
  </div>


    
@endsection