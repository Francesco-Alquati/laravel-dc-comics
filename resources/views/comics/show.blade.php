@extends('layouts.app')

@section('content')
    <div class="container bg-black p-5">
        <div class="row">
            <div class="col-6">
                <img class="comics-img border border-white" src="{{ $comic['thumb'] }}" alt="{{ $comic ['title'] }}">
            </div>
            <div class="col-6 text-white">
                <h1>{{ $comic ['series'] }}</h1>
                <h3 class="text-warning my-3 text-uppercase">{{ $comic ['type'] }}</h3>
                <p class="my-4">{{ $comic ['description'] }}</p>
                <h4 class="text-success my-4">{{ $comic ['price'] }}</h4>
                <h3>{{ $comic ['sale_date'] }}</h3>
                <p class="my-4"><strong class="text-uppercase text-danger">Artists</strong>: {{ $comic ['artists'] }}</p>
                <p class="my-4"><strong class="text-uppercase text-danger">Writers</strong>: {{ $comic ['writers'] }}</p>
            </div>
        </div>
    </div>

@endsection