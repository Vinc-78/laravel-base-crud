@extends('parts.layout')

@section('title', "Fumetto" . $comic->id)
    
@section('content')

<div class="container">
    
    <h1>Titolo {{ $comic->title }}</h1>
    <img src="{{$comic->thumb}}" alt="">
    <h5>Descrizione: {{$comic->description}} </h5>


    <a href="{{ route('comics.index') }} ">Torna alla lista</a>
  
  </div>

  

    
@endsection