@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card" style="width: 18rem;">
            <img src="{{$comic->img}}" class="card-img-top" alt="{{$comic->titolo}}">
            <div class="card-body">
              <h5 class="card-title">{{$comic->titolo}}</h5>
              <p class="card-text">{{$comic->descrizione}}</p>
              <ul>
                <li>{{$comic->serie}}</li>
                <li>{{$comic->tipologia}}</li>
                <li>{{$comic->data_pubblicazione}}</li>
                <li>{{$comic->prezzo}}</li>
              </ul>
            </div>
          </div>
          <form action="{{ route('comics.destroy', ['comic' => $comic->id]) }}" class="d-inline-block" method="POST">
              @csrf
              @method('DELETE')
              <button class="btn btn-danger my-2" type="submit">
                ELIMINA
              </button>
    </div>
@endsection
