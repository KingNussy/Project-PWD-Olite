<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Olite</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>

<body>
    <script src="scripts.js"></script>
    <header>
        <div class="logo">
            <img src="{{asset('asset/olite.png')}}" alt="Olite">
        </div>
        <div class="search-box">
            <input type="text" placeholder="Cari...">
        </div>
        <nav>
            <ul>
                <li><a href="#Film">Film</a></li>
                <li><a href="#serial-TV">Serial TV</a></li>
                <li><a href="#genre">Genre</a></li>
                <li><a href="#">Tahun</a></li>
            </ul>
        </nav>
        <div class="profile-menu">
            <img src="{{asset('asset/valhala.jpg')}}" alt="Profile Icon" class="profile-icon">
            <div class="profile-dropdown">
                <ul>
                    <li><a href="#">My Account</a></li>
                    <li><a href="#">Favorit</a></li>
                    <li><a href="#">Settings</a></li>
                    <li><a href="#">Logout</a></li>
                </ul>
            </div>
        </div>
    </header>
    
    <section class="featured-section">
        <h2>Rekomendasi Film</h2>
        <div class="container">
            <div class="featured-movies">
                @foreach($udinmovie as $udin)
                <div class="movie-card" data-category="movies" data-genre="action" data-year="2024">
                    <div class="movie-image">
                        <a href="badboysrideordie.html"><img src="{{asset('asset/'.$udin->image)}}"
                                alt="image"></a>
                    </div>
                    <div class="movie-info">
                        <h3>{{$udin->title}}</h3>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="featured-section" id="Film">
        <h2>Film</h2>
        <div class="container">
            <div class="featured-movies">
                @foreach($movies as $movie)
                <div class="movie-card1" data-category="movies" data-genre="action" data-year="2024">
                    <div class="movie-image">
                        <a href="twister.html"><img src="{{asset('asset/'.$movie->image)}}" alt="Twisters"></a>
                    </div>
                    <div class="movie-info">
                        <h3>{{$movie->title}}</h3>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="featured-section" id="serial-TV">
        <h2>Serial TV</h2>
        <div class="container">
            <div class="featured-movies">
                @foreach($tvShows as $tv)
                <div class="movie-card2" data-category="tv" data-genre="action" data-year="2024">
                    <div class="movie-image">
                        <a href="carsontheroad.html"><img src="{{ asset('asset/' . $tv->image) }}"
                                alt="Cars On The Road (2022)"></a>
                    </div>
                    <div class="movie-info">
                        <h3>C{{ $tv->title }}</h3>
                    </div>
                </div>
                @endforeach