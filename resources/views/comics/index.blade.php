@extends('layouts.app')

@section('content')
    <div class="container-home">
        <div class="row">
            <div class="col-12">
                <div class="jumbo"></div>
            </div>
        </div>
    </div>
    <div class="container-home bg-darkgrey position-relative">
        <div class="row">
            <div class="card-container mt-5 mb-5">
                <div class="row">
                    @foreach ($comics as $comic)
                        <div class="col-2 py-3">
                            <div class="comics-card">
                                <img src="{{ $comic['thumb'] }}" alt="{{ $comic ['title'] }}">
                                <div class="mt-2 text-white text-uppercase fs-11">{{ $comic ['series'] }}</div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <div class="container-home bg-light-grey">
        <div class="container-comics">
            <div class="row">
                <div class="col-6">
                    <h5 class="mt-4">Talent</h5>
                    <hr>
                    <div class="row">
                        <div class="col-6">Art by:</div>
                        <div class="col-6 fs-11">
                            <a href="#">Josè Luis Garcia-Lopez</a>,
                            <a href="#">Josè Luis Garcia-Lopez</a>,
                            <a href="#">Josè Luis Garcia-Lopez</a>,
                            <a href="#">Josè Luis Garcia-Lopez</a>,
                            <a href="#">Josè Luis Garcia-Lopez</a>,
                            <a href="#">Josè Luis Garcia-Lopez</a>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-6">Written by:</div>
                        <div class="col-6 fs-11">
                            <a href="#">Josè Luis Garcia-Lopez</a>,
                            <a href="#">Josè Luis Garcia-Lopez</a>,
                            <a href="#">Josè Luis Garcia-Lopez</a>,
                            <a href="#">Josè Luis Garcia-Lopez</a>,
                            <a href="#">Josè Luis Garcia-Lopez</a>,
                            <a href="#">Josè Luis Garcia-Lopez</a>
                        </div>
                    </div>
                    <hr>
                </div>
                <div class="col-6">
                    <h5 class="mt-4">Specs</h5>
                    <hr>
                    <div class="row">
                        <div class="col-6">Series:</div>
                        <div class="col-6">
                            <a class="text-uppercase" href="#">Action Comics</a>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-6">U.S. Price:</div>
                        <div class="col-6">$19.99</div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-6">On Sale Date:</div>
                        <div class="col-6">Oct 02 2018</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-2 border border-secondary-subtle fs-11"></div>
            <div class="col-2 border border-secondary-subtle fs-11 d-flex justify-content-between align-items-center">
                <span>Digital Comics</span>
                <img class="mt-2 mb-2" src="{{ Vite::asset('resources/images/buy-comics-digital-comics.png')}}" alt="">
            </div>
            <div class="col-2 border border-secondary-subtle fs-11 d-flex justify-content-between align-items-center">
                <span>Shop DC</span>
                <img class="mt-2 mb-2" src="{{ Vite::asset('resources/images/buy-comics-digital-comics.png')}}" alt="">
            </div>
            <div class="col-2 border border-secondary-subtle fs-11 d-flex justify-content-between align-items-center">
                <span>Comic Shop Locator</span>
                <img class="mt-2 mb-2"  src="{{ Vite::asset('resources/images/buy-comics-digital-comics.png')}}" alt="">
            </div>
            <div class="col-2 border border-secondary-subtle fs-11 d-flex justify-content-between align-items-center">
                <span>Subscriptions</span>
                <img class="mt-2 mb-2" src="{{ Vite::asset('resources/images/buy-comics-digital-comics.png')}}" alt="">
            </div>
            <div class="col-2 border border-secondary-subtle fs-11"></div>
        </div>
    </div>

@endsection