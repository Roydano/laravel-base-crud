@extends('layouts.app')

@section('title', 'Home')

@section('content')

<div class="container">
    <h2 class="text-center my-5">{{ $dettaglio['title'] }}</h2>
    <hr>
    <div class="row">

        <div class="col-md-4">
    
            <img src="{{ $dettaglio['img'] }}" alt="{{ $dettaglio['title'] }}" class="max-w-100">
    
        </div>
        <div class="col-md-4">
            <p>
                {{ $dettaglio['description']}}
            </p>
        </div>
        <div class="col-md-4">
            <span class="badge bg-danger">{{ $dettaglio['series']}}</span>
            <span class="badge bg-info text-dark">{{ $dettaglio['type']}}</span>
            <div class="card text-center mt-5" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Acquistalo ora al prezzo di {{ $dettaglio['price'] }} €</h5>
                    <a href="#" class="btn btn-primary">Acquista</a>
                </div>
            </div>
        </div>
    </div>

</div>


@endsection