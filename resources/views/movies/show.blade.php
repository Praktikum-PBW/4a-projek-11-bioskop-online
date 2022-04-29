@extends('layouts.main')

@section('content')
    <div class="movie-info border-b border-gray-800">
        <div class="container mx-auto px-4 py-16 flex flex-col md:flex-row">
            <div>
                <br><br>
            </div>
            <div class="card" style="border: 0; background-color: transparent">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="flex-none">
                            <img src="{{ 'https://image.tmdb.org/t/p/w300/' . $movie['poster_path'] }}" alt="poster"
                                class="w-64 lg:w-100">
                        </div>
                    </div>
                    <div class="col">
                        <div class="md:ml-24">
                            <h2 class="text-4xl md:mt-0 font-semibold text-white">{{ $movie['title'] }}</h2>
                            <div class="flex flex-wrap items-center text-white text-sm mb-5">

                                <span class="ml-1"><i class="bi bi-star-fill"
                                        style="color: yellow"></i>{{ $movie['vote_average'] }}</span>
                                <span class="mx-2">|</span>
                                <span>{{ $movie['release_date'] }}</span>
                                <span class="mx-2">|</span>
                                <span>
                                    @foreach ($movie['genres'] as $genre)
                                        {{ $genre['name'] }}
                                    @endforeach
                                </span>
                            </div>

                            <p class="text-white mt-8">
                                {{ $movie['overview'] }}
                            </p>

                            <div class="mt-3">
                                <h4 class="text-white font-semibold" style="font-size: 20px;">Featured Crew</h4>
                                <div class="flex mt-4">
                                    <div class="row mb-3">
                                        @foreach ($movie['credits']['crew'] as $crew)
                                            <div class="col-lg-3">
                                                @if ($loop->index < 2)
                                                    <div class="mr-8">
                                                        <div class="text-white"><strong>{{ $crew['name'] }}</strong>
                                                        </div>
                                                        <div class="text-sm text-white">{{ $crew['job'] }}</div>
                                                    </div>
                                                @endif
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div>
                                <a class="" href="#"><input type="submit" class="nav-item btn btn-primary"
                                        value="Buy Ticket" name="" id=""></a>
                            </div>
                            <hr color="white">
                        </div>
                    </div>
                </div>
                {{-- End Movie Info --}}

                <div class="movie-cast border-b border-gray-800">
                    <br><br>
                    <h2 class="text-4xl font-semibold text-white">Cast</h2>
                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                        <div class="row mt-3">
                            @foreach ($movie['credits']['cast'] as $cast)
                                <div class="col-6 col-sm-4 col-md-3 col-lg-2 mb-5">
                                    @if ($loop->index < 6)
                                        <div class="card me-5"
                                            style="width: fit-content; border:0; background-color: transparent">
                                            <div class="mt-8">
                                                <a href="#">
                                                    <img src="{{ 'https://image.tmdb.org/t/p/w200/' . $cast['profile_path'] }}"
                                                        alt="actor1"
                                                        class="hover:opacity-75 transition ease-in-out duration-150"
                                                        style="width: 180px">
                                                </a>
                                                <div class="card-body p-0">
                                                    <a href="#" class="text-lg mt-2 hover:text-gray:300 text-white"
                                                        style="text-decoration: none">{{ $cast['name'] }}</a>
                                                    <div class="text-sm text-white">
                                                        {{ $cast['character'] }}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <!-- end movie-cast -->

            </div>

        </div>
    @endsection
