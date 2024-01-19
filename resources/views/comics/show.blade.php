@extends('layouts.app')

@section('content')
    <div class="container align-items-center d-flex flex-column my-5">
        <div class="card" style="width: 18rem;">
            <img src="{{$comic->img}}" class="card-img-top" alt="{{$comic->titolo}}">
            <div class="card-body">
              <h5 class="card-title"> <strong>Titolo:</strong> <br> {{$comic->titolo}}</h5>
              <p class="card-text"> <strong>Descrizione:</strong> <br> {{$comic->descrizione}}</p>
              <ul>
                <li> <strong>Serie:  </strong>{{$comic->serie}}</li>
                <li> <strong>Tipologia:  </strong>{{$comic->tipologia}}</li>
                <li> <strong>Data di uscita:  </strong>{{$comic->data_pubblicazione}}</li>
                <li> <strong>Prezzo:  </strong>{{$comic->prezzo}}</li>
              </ul>
            </div>
          </div>
          <form action="{{ route('comics.destroy', ['comic' => $comic->id]) }}" class="d-inline-block" method="POST">
              @csrf
              @method('DELETE')
              <button class="btn btn-danger my-2" type="submit">
                ELIMINA
              </button>
          </form>
    </div>
@endsection
