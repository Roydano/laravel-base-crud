@extends('layouts.app')

@section('title', 'Aggiungi fumetto')

@section('content')
    <div class="container">
        <h1 class="my-5">Inserisci un nuovo fumetto</h1>
        <form>
            <!-- sezione titolo -->
            <div class="mb-3">
                <label for="title" class="form-label">Titolo</label>
                <input type="text" class="form-control" name="title" id="title">
            </div>
            <!-- sezione immagine -->
            <div class="mb-3">
                <label for="image" class="form-label">Immagine</label>
                <input type="text" class="form-control" name="img" id="image">
            </div>
            <!-- sezione prezzo -->
            <div class="mb-3">
                <label for="prc" class="form-label">Prezzo</label>
                <input type="text" class="form-control" name="price" id="prc">
            </div>
            <!-- sezione tipo -->
            <div class="mb-3">
                <label for="type" class="form-label">Tipo</label>
                <input type="text" class="form-control" name="type" id="type">
            </div>
            <!-- sezione serie -->
            <div class="mb-3">
                <label for="serie" class="form-label">Serie</label>
                <input type="text" class="form-control" name="series" id="serie">
            </div>
            <!-- sezione data d'uscita -->
            <div class="mb-3">
                <label for="date" class="form-label">Data d'uscita</label>
                <input type="text" class="form-control" name="sale_date" id="date">
            </div>
            <!-- sezione descrizione -->
            <div class="mb-3">
                <label for="desc" class="form-label">Descrizione</label>
                <textarea type="text" class="form-control" name="description" id="desc"></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Salva</button>
        </form>
    </div>
@endsection