@extends('layouts.app')

@section('title', 'Modifica fumetto')

@section('content')
    <div class="container">
        <h1 class="my-5">Modifica fumetto</h1>
        <form action="{{ route('gestione_fumetto.update', $comicEdit->id) }}" method="post">
            @csrf
            @method('PUT')
            <!-- sezione titolo -->
            <div class="mb-3">
                <label for="title" class="form-label">Titolo</label>
                <input type="text" class="form-control" name="title" id="title" value="{{ $comicEdit->title }}">
            </div>
            <!-- sezione immagine -->
            <div class="mb-3">
                <label for="image" class="form-label">Immagine</label>
                <input type="text" class="form-control" name="img" id="image" value="{{ $comicEdit->img }}">
            </div>
            <!-- sezione prezzo -->
            <div class="mb-3">
                <label for="prc" class="form-label">Prezzo</label>
                <input type="text" class="form-control" name="price" id="prc" value="{{ $comicEdit->price }}">
            </div>
            <!-- sezione tipo -->
            <div class="mb-3">
                <label for="type" class="form-label">Tipo</label>
                <input type="text" class="form-control" name="type" id="type" value="{{ $comicEdit->type }}">
            </div>
            <!-- sezione serie -->
            <div class="mb-3">
                <label for="serie" class="form-label">Serie</label>
                <input type="text" class="form-control" name="series" id="serie" value="{{ $comicEdit->series }}">
            </div>
            <!-- sezione data d'uscita -->
            <div class="mb-3">
                <label for="date" class="form-label">Data d'uscita</label>
                <input type="text" class="form-control" name="sale_date" id="date" value="{{ $comicEdit->sale_date }}">
            </div>
            <!-- sezione descrizione -->
            <div class="mb-3">
                <label for="desc" class="form-label">Descrizione</label>
                <textarea type="text" class="form-control" name="description" id="desc">{!! $comicEdit->description !!}</textarea>
            </div>

            <button type="submit" class="btn btn-primary">Salva</button>
        </form>
    </div>
@endsection