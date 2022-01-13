@extends('parts.layout')

@section('title', "Aggiungi" )
    
@section('content')

<div class="container">
    <h1>Inserimento nuovo fumetto</h1>
  
    @if($errors->any())  {{-- Elenca tutti gli errori --}}
    <div class="alert alert-danger">
      Ci sono errori nel form:
      <ul>

        @foreach($errors->all() as $error)

          <li>{{ $error }}</li>

        @endforeach

      </ul>
    </div>
    @endif
  
    <form action=" {{ route("comics.store") }} " method="post">
      @csrf
  
      <div class="mb-3">
        <label for="field_title" class="form-label">Titolo</label>
        <input type="text" class="form-control {{ $errors->has("title") ? 'is-invalid' : '' }}" 
        name="title" id="field_title" value="{{old("title")}}">
  
        @if($errors->has("title")) {{-- Se presente un errore si title --}}

        <div class="invalid-feedback">
          {{ $errors->get("title")[0]}}  {{-- Lo stampa --}}
        </div>
        @endif

      </div>
  
       
     

      <div class="mb-3">
        <label for="field_price" class="form-label">Prezzo</label>
        <input type="text" class="form-control {{ $errors->has("price") ? 'is-invalid' : '' }}" name="price"
          id="field_price" value="{{old("price")}}">
        @if($errors->has("price"))
        <div class="invalid-feedback">
          {{ $errors->get("price")[0]}}
        </div>
        @endif
      </div>

      <div class="mb-3">
        <label for="field_series" class="form-label">Serie</label>
        <input type="text" class="form-control {{ $errors->has("series") ? 'is-invalid' : '' }}" name="series"
          id="field_series" value="{{old("series")}}">
        @if($errors->has("series"))
        <div class="invalid-feedback">
          {{ $errors->get("series")[0]}}
        </div>
        @endif
      </div>

      <div class="mb-3">
        <label for="field_sale_date" class="form-label">Data di Pubblicazione</label>
        <input type="text" class="form-control {{ $errors->has("sale_date") ? 'is-invalid' : '' }}" name="sale_date"
          id="field_series" value="{{old("sale_date")}}">
        @if($errors->has("sale_date"))
        <div class="invalid-feedback">
          {{ $errors->get("sale_date")[0]}}
        </div>
        @endif
      </div>

      <div class="mb-3">
        <label for="field_type" class="form-label">Tipo</label>
        <input type="text" class="form-control {{ $errors->has("type") ? 'is-invalid' : '' }}" name="type"
          id="field_series" value="{{old("type")}}">
        @if($errors->has("type"))
        <div class="invalid-feedback">
          {{ $errors->get("type")[0]}}
        </div>
        @endif
      </div>
  
      <div>
        <button class="btn btn-secondary" type="reset ">Reset</button>
        <button class="btn btn-success" type="submit">Crea</button>
      </div>
  
    </form>
  
  </div>
    
@endsection