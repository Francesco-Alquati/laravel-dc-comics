<header>
    <div class="bg-primary">
        <div class="container-header">
            <div class="row">
                <div class="col-12 text-end fs-11">
                    <span class="text-uppercase text-white me-5">dc power visa®</span>
                    <span class="text-uppercase text-white">additional dc site<i class="fa-solid fa-caret-down"></i></span>
                </div>
            </div>
        </div>
    </div>
    <div class="container-header">
        <div class="row align-items-baseline">
            <div class="col-4">
                <div class="text-center">
                    <a href="{{ route('homepage')}}"><img src="{{ Vite::asset('resources/images/dc-logo.png')}}" alt="dc-comics"></a>
                </div>
            </div>
            <div class="col-8">
                <ul class="list-unstyled text-uppercase d-flex">
                    <li><a href="#">Characters</a></li>
                    <li><a class="{{ Route::currentRouteName() === 'comics.index' ? 'active' : ''}}" href="{{ route('comics.index') }}">Comics</a></li>
                    <li><a href="#">Movies</a></li>
                    <li><a href="#">Tv</a></li>
                    <li><a href="#">Games</a></li>
                    <li><a href="#">Collectibles</a></li>
                    <li><a href="#">Video</a></li>
                    <li><a href="#">Fans</a></li>
                    <li><a href="#">News</a></li>
                    <li><a href="#">Shop</a><i class="fa-solid fa-caret-down text-primary"></i></li>
                    <li><input type="search" name="search" placeholder="search" id="search"><i class="fa-solid fa-xl fa-magnifying-glass"></i></li>
                </ul>
            </div>
        </div>
    </div>
</header>