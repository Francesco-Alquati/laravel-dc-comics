@extends('layouts.app')

@section('content')
    <div class="container-header rounded-5 bg-black">
        <div class="row">
            <div class="col-12">
                <form method="post" action="{{ route('comics.update', ['comic' => $comic->id]) }}">
                    @csrf
                    @method('PUT')
                    <div class="row gy-4 p-3 text-white">
                        <div class="col-12 col-md-6 col-lg-4">
                            <label for="" class="control-label">Serie</label>
                            <input type="text" name="series" id="" class="form-control"  placeholder="Serie" value="{{ $comic->series }}">
                        </div>
                        <div class="col-12 col-md-6 col-lg-4">
                            <label for="" class="control-label">Titolo</label>
                            <input type="text" name="title" id="" class="form-control"  placeholder="Titolo" value="{{ $comic->title }}">
                        </div>
                        <div class="col-12 col-md-6 col-lg-4">
                            <label for="" class="control-label">Immagine</label>
                            <input type="text" name="thumb" id="" class="form-control"  placeholder="Immagine" value="{{ $comic->thumb }}">
                        </div>
                        <div class="col-12 col-md-6 col-lg-4">
                            <label for="" class="control-label">Data di uscita</label>
                            <input type="date" name="sale_date" id="" class="form-control"  placeholder="Data di uscita" value="{{ $comic->sale_date }}">
                        </div>
                        <div class="col-12 col-md-6 col-lg-4">
                            <label for="" class="control-label">Tipo</label>
                            <input type="text" name="type" id="" class="form-control"  placeholder="Tipo" value="{{ $comic->type }}">
                        </div>
                        <div class="col-12 col-md-6 col-lg-4">
                            <label for="" class="control-label">Prezzo</label>
                            <input type="text" name="price" id="" class="form-control"  placeholder="Prezzo" value="{{ $comic->price }}">
                        </div>
                        <div class="col-12 col-md-6 col-lg-4">
                            <label for="" class="control-label">Descrizione</label>
                            <textarea name="description" id="" class="form-control"  placeholder="Descrizione">{{ $comic->description }}</textarea>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4">
                            <label for="" class="control-label">Artisti</label>
                            <textarea name="artists" id="" class="form-control"  placeholder="Artisti">{{ $comic->artists }}</textarea>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4">
                            <label for="" class="control-label">Scrittori</label>
                            <textarea name="writers" id="" class="form-control"  placeholder="Scrittori">{{ $comic->writers }}</textarea>
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