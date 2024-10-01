@extends('layouts.app')

@section('content')
    <div class="container bg-black p-5">
        <div class="row">
            <div class="col-6">
                <img class="comics-img border border-white" src="{{ $comic['thumb'] }}" alt="{{ $comic ['title'] }}">
            </div>
            <div class="col-6 text-white">
                <h1 class="mb-0">{{ $comic ['series'] }}</h1>
                <h6 class="text-info">{{ $comic ['title'] }}</h6>
                <h3 class="text-yellow mt-4 text-uppercase">{{ $comic ['type'] }}</h3>
                <p class="my-4">{{ $comic ['description'] }}</p>
                <p class="my-2"><strong class="text-uppercase text-orange">Artists</strong> : {{ $comic ['artists'] }}</p>
                <p class="my-2"><strong class="text-uppercase text-orange">Writers</strong> : {{ $comic ['writers'] }}</p>
                <p class="my-2"><strong class="text-uppercase text-orange">Released</strong> : {{ $comic ['sale_date'] }}</p>
                <hr>
                <h4 class="text-green my-4">{{ $comic ['price'] }}</h4>
                <hr>
                <div class=" d-flex justify-content-center">
                    <a class="btn btn-warning btn-sm w-90 text-uppercase me-2" href="{{ route('comics.edit', ['comic' => $comic->id]) }}">edit</a>
                    <form action="{{ route('comics.destroy', ['comic' => $comic->id]) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm w-90 text-uppercase" onclick="return confirm('vuoi cancellare questo fumetto?')">delete</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection