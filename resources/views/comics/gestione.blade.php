@extends('layouts.app')

@section('title', 'Gestione Fumetti')

@section('content')

   

   <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Titolo</th>
                <th scope="col">Tipologia</th>
                <th scope="col">Azioni</th>
            </tr>
        </thead>
        
        
        <tbody>

            @foreach($comics as $comic)
            <tr>
                <th scope="row">{{$comic->id}}</th>
                <td>{{$comic->title}}</td>
                <td>{{$comic->type}}</td>
                <td>
                    <a href="{{ route('gestione_fumetto.show', ['gestione_fumetto' => $comic->id ]) }}" class="btn btn-primary">Show</a>
                    <a href="{{ route('gestione_fumetto.edit', ['gestione_fumetto' => $comic->id ]) }}" class="btn btn-warning">Edit</a>
                    <a href="" class="btn btn-danger">Delete</a>
                </td>
            </tr>
            @endforeach

        </tbody>
      
    </table>

   
  

@endsection