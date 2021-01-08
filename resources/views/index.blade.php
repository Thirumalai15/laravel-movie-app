@extends('layouts.layout')

@section('content')
    <div class="container mx-auto px-4 pt-10">
        <div class="popular-movies">
            <h2 class="uppercase tracking-wider text-yellow-500 text-xl font-sans font-semibold">popular movies</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3  lg:grid-cols-5 gap-8 ">

               @foreach($popularMovies as $movie)
                    <x-movie-card :movie="$movie" :genres="$genres"  />
                @endforeach
         </div>
        </div>
    </div>
@endsection