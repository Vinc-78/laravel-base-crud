

<form action="{{route('comics.destroy', $comic->id)}}" method="post" class="form-delete">
    @csrf

    @method('delete')

    {{-- <input type="submit" value="Cancella"> o in alternativa un button--}}
    <button type="submit" class="nav-link active border-0 btn btn-link text-danger">Elimina</button>

  </form>