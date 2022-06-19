@extends('layouts.default')

@section('pageTitle', 'Wine')

@section('mainContent')
    <div class="container">
        <h1 class="text-center">wine</h1>

        <button><a href="{{ route('wines.index')}}">Torna ai vini</a></button>

        <ul>
            <li>Nome: {{ $wine->name }}</a></li>
            <li>Cantina: {{ $wine->wine_cellar }}</a></li>
            <li>Tipo: {{ $wine->type }}</a></li>
            <li>Prezzo: {{ $wine->price }} €</a></li>
        </ul>
    </div>
    
@endsection
    
