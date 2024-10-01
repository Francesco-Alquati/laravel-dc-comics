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
            <div class="col-12">
                <div class="content">
                    <button class="button-current text-uppercase p-absolute-button translate-middle">Current series</button>
                </div>
            </div>
            <div class="card-container">
                <div class="row">
                    <div class="col-12">
                        <h1 class="text-uppercase text-white text-center mt-5">Laravel dc comics</h1>
                    </div>
                </div>
            </div>
            <div class="text-center mt-5 mb-3">
                <button class="button-more text-uppercase">Load more</button>
            </div>
        </div>
    </div>
    <div class="bg-blue h-130 mx-auto z-index-1">
        <ul class="list-unstyled h-100 text-uppercase d-flex justify-content-center align-items-center">
            <li>
                <img src="{{ Vite::asset('resources/images/buy-comics-digital-comics.png')}}">
                <a href="#">DIGITAL COMICS</a>
            </li>
            <li>
                <img src="{{ Vite::asset('resources/images/buy-comics-merchandise.png')}}">
                <a href="#">DC MERCHANDISE</a>
            </li>
            <li>
                <img src="{{ Vite::asset('resources/images/buy-comics-subscriptions.png')}}">
                <a href="#">SUBSCRIPTION</a>
            </li>
            <li>
                <img class="special-icon" src="{{ Vite::asset('resources/images/buy-comics-shop-locator.png')}}">
                <a href="#">COMIC SHOP LOCATOR</a>
            </li>
            <li>
                <img src="{{ Vite::asset('resources/images/buy-dc-power-visa.svg')}}">
                <a href="#">DC POWER VISA</a>
            </li>
        </ul>
    </div>
@endsection
