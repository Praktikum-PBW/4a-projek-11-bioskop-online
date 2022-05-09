@extends('layouts.main')

@section('content')
    <div class="container-fluid p-0 m-0">
        {{-- Banner --}}
        <section class="banner">
            <div class="hero-text">
                <h1 style="font-size:50px">Selamat Datang, </h1>
                <p style="font-size:25px">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum quo veniam
                    nostrum,
                    assumenda quasi consequatur
                    consectetur facere excepturi, dolor quaerat.</p>
                <form class="form-inline my-5 my-lg-6">
                    <div class="row">
                        <div class="col-lg-10">
                            <input class="form-control mr-sm-2" style="width: 1100px; border-radius:100px;" type="search"
                                placeholder="Search" aria-label="Search">
                        </div>
                        <div class="col"><button class="btn btn-primary my-2 my-sm-0"
                                style="width:100px; border-radius:100px;" type="submit">Search</button></div>
                    </div>


                </form>
            </div>
        </section>
        {{-- Banner End --}}
    </div>
    <div class="container" style="background-color: #001d3d;">
        <div class="popular-movies">

            <br>
            <h4 class="uppercase tracking-wider text-lg font-semibold" style="color: #ffc300;">Popular Movies</h4>
            <div class="row mt-3">
                @foreach ($popularMovies as $movie)
                    <div class="col-6 col-sm-4 col-md-3 col-lg-2 mb-5">
                        <div class="card me-5" style="width: fit-content; border:0; background-color:transparent;">
                            <a href="{{ route('movies.show', $movie['id']) }}">
                                <img src="{{ 'https://image.tmdb.org/t/p/w200/' . $movie['poster_path'] }}" alt="poster"
                                    class="hover:opacity-75 transition ease-in-out duration-150" id="box-shadow"
                                    style="width: 180px">
                            </a>
                            <div class="card-body p-0">
                                <a href="{{ route('movies.show', $movie['id']) }}" style="text-decoration: none"
                                    class="mt-3 hover:text-gray-300 text-white"><strong>{{ $movie['title'] }}</strong></a>
                                <div class="flex items-center text-white mt-1" style="font-size: 14px">
                                    <span class="ml-1"><i class="bi bi-star-fill" style="color: yellow"></i>
                                        {{ $movie['vote_average'] }}</span>
                                    <span class="mx-2">|</span>
                                    <span>{{ $movie['release_date'] }}</span>
                                </div>
                                <div class="text-white" style="font-size: 14px">
                                    @foreach ($movie['genre_ids'] as $genre)
                                        {{ $genres->get($genre) }}
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div><!-- end pouplar-movies -->
@endsection
