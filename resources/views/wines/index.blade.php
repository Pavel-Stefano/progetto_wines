@extends('layouts.default')

@section('pageTitle', 'Wines')

@section('mainContent')
    <div class="container">
        <button><a href="{{ route('home')}}">Torna alla home</a></button>
        <h1 class="text-center">wines</h1>
        <button><a href="{{ route('wines.create')}}">Aggiungi un nuovo vino</a></button>

        @foreach ($allWines as $wine)
        <ul>
            <li><a href="{{route('wines.show', $wine->id)}}">Nome: {{ $wine->name }}</a></li>
            <li><a href="">Cantina: {{ $wine->wine_cellar }}</a></li>
            <li><a href="">Tipo: {{ $wine->type }}</a></li>
            <li><a href="">Prezzo: {{ $wine->price }} €</a></li>
        </ul>
        @endforeach   
    </div>
    
@endsection
    
