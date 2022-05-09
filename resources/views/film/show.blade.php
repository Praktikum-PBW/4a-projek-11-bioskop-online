@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="popular-movies">
            <h4 class="uppercase tracking-wider text-lg font-semibold" style="color: #ffc300;">Popular Movies</h4>
            <div class="row mt-3">
                @foreach ($data as $movie)
                    <div class="col-6 col-sm-4 col-md-3 col-lg-2 mb-5">
                        <div class="card me-5" style="width: fit-content; border:0;">
                            <a href="#">
                                <img src="{{ asset('/assets/img/posterfilm/' . $movie->poster) }}" alt="poster"
                                    class="hover:opacity-75 transition ease-in-out duration-150" id="box-shadow"
                                    style="width: 180px">
                            </a>
                            <div class="card-body p-0">
                                <a href="#" style="text-decoration: none"
                                    class="mt-3 hover:text-gray-300 text-white"><strong>{{ $movie->title }}</strong></a>
                                <div class="flex items-center text-white mt-1" style="font-size: 14px">
                                    <span class="ml-1"><i class="bi bi-star-fill" style="color: yellow"></i>
                                        {{ $movie->rating }}</span>
                                    <span class="mx-1">|</span>
                                    <span>{{ $movie->release_date }}</span>
                                    <span class="mx-1">|</span>
                                    <span class="certification">{{ $movie->rating_usia }}</span>
                                </div>
                                <div class="text-white" style="font-size: 14px">

                                    {{ $movie->genre }}

                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div><!-- end pouplar-movies -->
@endsection
