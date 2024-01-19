@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <div class="d-flex justify-content-between pb-5">
        <h1>I nostri Comics</h1>

            <a class="btn btn-primary" href="{{ route('comics.create') }}">Aggiungi un Comic</a>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Tipologia</th>
                    <th scope="col">Azioni</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($comics as $comic)
                    <tr>
                        <th scope="row">{{ $comic->id }}</th>
                        <td>{{ $comic->titolo }}</td>
                        <td>{{ $comic->tipologia }}</td>
                        <td>
                            <button>
                                <a href="{{route('comics.show', ['comic' => $comic->id])}}">INFO</a>
                            </button>
                            <button>
                                <a href="{{route('comics.edit', ['comic' => $comic->id])}}">MODIFICA</a>
                            </button>
                            <form action="{{ route('comics.destroy', ['comic' => $comic->id]) }}" class="d-inline-block" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit">
                                  ELIMINA
                                </button>
                              </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
