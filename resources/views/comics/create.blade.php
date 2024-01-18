@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-center">Aggiungi un Opera</h1>

    <div class="row justify-content-center mt-5">
        <div class="col-6 mb-5">
            <form action="{{ route('comics.store') }}" method="POST">
                @csrf
                
                <div class="mb-3">
                    <label for="titolo" class="form-label">Titolo:</label>
                    <input type="text" class="form-control" id="titolo" name="titolo">
                </div>

                <div class="mb-3">
                    <label for="img" class="form-label">Immagine:</label>
                    <input type="text" class="form-control" id="img" name="img">
                </div>

                <div class="mb-3">
                    <label for="serie" class="form-label">Serie:</label>
                    <input type="text" class="form-control" id="serie" name="serie">
                </div>

                <div class="mb-3">
                    <label for="data_pubblicazione" class="form-label">Date di pubblicazione:</label>
                    <input type="text" class="form-control" id="data_pubblicazione" name="data_pubblicazione">
                </div>

                <div class="mb-3">
                    <label for="prezzo" class="form-label">Prezzo</label>
                    <input type="text" class="form-control" id="prezzo" name="prezzo">
                </div>

                <div class="mb-3">
                    <label for="tipologia" class="form-label">Tipologia</label>
                    <select id="tipologia" class="form-select" name="tipologia">
                        <option selected value="">Seleziona</option>
                        <option value="comic book">comic book</option>
                        <option value="graphic novel">graphic novel</option>
                        <option value="manga">manga</option>
                      </select>
                </div>

                <div class="mb-3">
                    <label for="descrizione" class="form-label">Descrizione</label>
                    <textarea class="form-control" id="descrizione" rows="3" name="descrizione"></textarea>
                </div>

                <button class="btn btn-success" type="submit">Salva</button>
               
            </form>
        </div>
    </div>
   
</div>

@endsection
