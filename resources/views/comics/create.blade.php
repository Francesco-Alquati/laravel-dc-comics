@extends('layouts.app')

@section('content')
    <div class="container-header rounded-5 bg-black">
        <div class="row">
            <div class="col-12">
                @if ($errors->any())
                    <div class="mt-5 ms-3 text-danger">
                        <ul class="list-unstyled mb-5">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}<li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form method="POST" action="{{ route('comics.store') }}">
                    @csrf
                    <div class="row gy-4 p-3 text-white">
                        <div class="col-12 col-md-6 col-lg-4">
                            <label for="" class="control-label">Serie</label>
                            <input type="text" name="series" id="" class="form-control" placeholder="Serie">
                        </div>
                        <div class="col-12 col-md-6 col-lg-4">
                            <label for="" class="control-label">Titolo</label>
                            <input type="text" name="title" id="" class="form-control" placeholder="Titolo">
                        </div>
                        <div class="col-12 col-md-6 col-lg-4">
                            <label for="" class="control-label">Immagine</label>
                            <input type="text" name="thumb" id="" class="form-control" placeholder="Immagine">
                        </div>
                        <div class="col-12 col-md-6 col-lg-4">
                            <label for="" class="control-label">Data di uscita</label>
                            <input type="date" name="sale_date" id="" class="form-control" placeholder="Data di uscita">
                        </div>
                        <div class="col-12 col-md-6 col-lg-4">
                            <label for="" class="control-label">Tipo</label>
                            <input type="text" name="type" id="" class="form-control" placeholder="Tipo">
                        </div>
                        <div class="col-12 col-md-6 col-lg-4">
                            <label for="" class="control-label">Prezzo</label>
                            <input type="text" name="price" id="" class="form-control" placeholder="Prezzo">
                        </div>
                        <div class="col-12 col-md-6 col-lg-4">
                            <label for="" class="control-label">Descrizione</label>
                            <textarea name="description" id="" class="form-control" placeholder="Descrizione"></textarea>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4">
                            <label for="" class="control-label">Artisti</label>
                            <textarea name="artists" id="" class="form-control" placeholder="Artisti"></textarea>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4">
                            <label for="" class="control-label">Scrittori</label>
                            <textarea name="writers" id="" class="form-control" placeholder="Scrittori"></textarea>
                        </div>
                        <div class="col-12 mb-3 text-center">
                            <button type="submit" class="btn btn-success">Salva</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection