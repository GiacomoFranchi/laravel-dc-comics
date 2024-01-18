@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <h1>I nostri Comics</h1>
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
                                <a href="">INFO</a>
                            </button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
