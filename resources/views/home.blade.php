@extends('layouts.default')

@section('pageTitle', 'HomePage')

@section('mainContent')
<h1 class="text-center">Home</h1>

<a href=" {{route('wines.index')}} "> Vai a tutti i vini </a>

    
@endsection
    
