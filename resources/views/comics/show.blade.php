@extends('parts.layout')

@section('title', "Fumetto" . $comic->id)
    
@section('content')

<div class="container">
    
    <h1>Titolo {{ $comic->title }}</h1>
    <h3>Descrizione: {{$comic->description}} </h3>
  
  </div>

    
@endsection