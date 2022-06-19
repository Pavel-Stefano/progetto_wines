@extends('layouts.default')

@section('pageTitle', 'New Wine')

@section('mainContent')
    <div class="container">
        <h1 class="text-center"> new wine</h1>

        <form action="{{route('wines.store')}}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label"> name </label>
                <input type="text" class="form-control" id="name" aria-describedby="name" name="name">
            </div>
            <div class="mb-3">
                <label for="wine_cellar" class="form-label"> wine_cellar </label>
                <input type="text" class="form-control" id="wine_cellar" aria-describedby="wine_cellar" name="wine_cellar">
            </div>
            <div class="mb-3">
                <label for="type" class="form-label"> type </label>
                <input type="text" class="form-control" id="type" aria-describedby="type" name="type">
            </div>
            <div class="mb-3">
                <label for="price" class="form-label"> price </label>
                <input type="number" maxlength="3" step="0.10" class="form-control @error('name') is-invalid @enderror" id="price" aria-describedby="price" name="price">
                @error('price')
                  <div class="alert alert-danger">
                    {{$message}}
                  </div>
                @enderror
            </div>
           
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>


    </div>
    
@endsection
    
