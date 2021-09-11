@extends('layouts.app')

@section('title', 'Gestione Fumetti')

@section('content')

   

   <div class="container">

        <p>
            @if (session('modifica'))
            <div class="alert alert-success">
            {{ session('modifica') }}
            </div>
            @endif
        </p>
        <p>
            @if (session('cancella'))
            <div class="alert alert-danger">
            {{ session('cancella') }}
            </div>
            @endif
        </p>

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
                            <form action="{{ route('gestione_fumetto.destroy', ['gestione_fumetto' => $comic->id]) }}" method="post" class="d-inline-block">
                              @csrf
                              @method('DELETE')
                              <input type="submit" value="Delete" class="btn btn-danger">
                            </form>
                        </td>
                    </tr>
                    @endforeach

                </tbody>
            
            </table>
   </div>

   
  

@endsection