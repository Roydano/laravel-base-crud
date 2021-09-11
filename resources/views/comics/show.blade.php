@extends('layouts.app')

@section('title', 'I tuoi fumetti')

@section('content')

   
    <div class="container">
        <div class="row">
            <h1 class="text-center my-5">{{$comics->title}}</h1>
        </div>

        <div class="row">
            <div class="col-md-6 text-center">
                <img src="{{ $comics->img }}" alt="{{$comics->title }}" class="max-w-100">
            </div>
            <div class="col-md-6">
                <p>{!! $comics->description !!}</p>
            </div>
        </div>

        <div class="text-center mt-5">
            <span class="badge bg-primary">{{ $comics->price }} €</span>
            <span class="badge bg-primary">{{ $comics->type }}</span>
        </div>
     
        

    </div>
 

   
  

@endsection