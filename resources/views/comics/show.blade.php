@extends('parts.layout')

@section('title', "Fumetto" . $comic->id)
    
@section('content')

<div class="container">
    
  @if (session("msg")) {{-- se il caricamento avviene da il messaggio indicato con il with nel controller --}}

      <div class="alert alert-success">{{session("msg")}}</div>

  @endif

    
    
    <h1>Titolo: <span id="Comic">{{ $comic->title }}</span></h1>
    <img src="{{$comic->thumb}}" alt="">
    <h5>Descrizione: {{$comic->description}} </h5>

    <a class="btn btn-link " href="{{ route('comics.edit', $comic->id) }} ">Modifica</a>

    @include("parts.delete")

    <a href="{{ route('comics.index') }} ">Torna alla lista</a>
  
  </div>

  

    
@endsection