@extends('parts.layout')

@section('title', "Home" )
    
@section('content')

<div class="container">
    
   <a href="{{ route('comics.index') }} ">Vai alla lista fumetti</a>
  
  </div>

    
@endsection