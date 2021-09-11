@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <div class="container">

        <h1 class="text-uppercase text-center my-5">I nostri fumetti</h1>

        <div class="row">
            

            @foreach($comics as $comic)
            <div class="col-md-3">
                <div class="card mb-5" style="width: 18rem;">
                    <img src="{{$comic['img']}}" class="card-img-top" alt="{{$comic['title']}}">
                    <div class="card-body">
                        <h5 class="card-title">{{$comic['title']}}</h5>
                        <a href="{{ route('detail', ['id' => $comic->id]) }}" class="btn btn-primary mt-5">Vai ai dettagli</a>
                    </div>
                </div>
            </div>
            @endforeach

          
        </div>

    </div>
@endsection
