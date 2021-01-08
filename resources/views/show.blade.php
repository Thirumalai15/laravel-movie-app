@extends('layouts.layout')

@section('content')
    <div class="movie-info border-b border-gray-800">
        <div class="container mx-auto py-12 px-4 flex  border-b border-gray-800">
           <div class="flex-none">
               <img src=" {{ 'https://image.tmdb.org/t/p/w500/'.$movie['poster_path'] }}" alt="imaage" class="w-80 rounded-md">
           </div>
            <div class="ml-24">
                <h2 class="text-4xl  font-semibold">{{ $movie['title'] }}</h2>
                <div class="flex items-center mt-1 text-gray-400">
                    <span>
                        <svg class="w-5 h-5 text-yellow-500 fill-current" xmlns="http://www.w3.org/2000/svg"  fill="currentColor">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                        </span>
                        <span class="ml-1">{{ $movie['vote_average'] * 10 .'%' }}</span>
                        <span class="mx-2">|</span>
                        <span>{{ \Carbon\Carbon::parse($movie['release_date'])->format('D M, Y') }}</span>
                        <span class="ml-1">
                            @foreach($movie['genres'] as $genre)
                                {{ $genre['name'] }} @if(!$loop->last) , @endif
                            @endforeach
                        </span>
                </div>
                        
                    <div class="mt-10">
                        <h4 class="text-bold text-2xl">Overview</h4>
                        <p class="mt-2 text-gray-400">
                            {{ $movie['overview']}}
                        </p>
                    </div>

                <div class="mt-12">
                    <h4 class="text-bold text-2xl">Featured Cast</h4>

                    <div class="flex mt-4">
                        @foreach($movie['credits']['crew'] as $crew)
                                @if($loop->index < 4)
                                    <div class="mr-8" >
                                        <div>{{ $crew['name'] }}</div>
                                        <small>{{ $crew['job'] }}</small>
                                    </div>
                                @endif
                        @endforeach
                    </div>
               </div>


                @if(count($movie['videos']['results']) > 0)
               <div class="mt-10">
                    <a href="https://www.youtube.com/watch?v={{ $movie['videos']['results'][0]['key'] }}" target="blank" class="bg-yellow-500 hover:bg-yellow-600 text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center">
                        <svg class="w-5 h-5 mr-1 text-current" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    <span>Play Trailer</span>
                    </a>
               </div>
               @endif
            </div>
        </div>
    </div>

    <div class="movie-cast border-b border-gray-800">
        <div class="container mx-auto px-4 py-16">
            <h2 class="text-4xl font-semibold">Cast</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-16">
                @foreach($movie['credits']['cast'] as $cast)
                @if($loop->index < 5)
                <div class="mt-8">
                        <a href="#">
                        <img src="{{ 'https://image.tmdb.org/t/p/w500/'.$cast['profile_path'] }}" class="rounded-md" alt=" Cast">
                        </a>
                        <div class="mt-2">
                            <a href="#" class="text-lg mt-2 hover:text-gray-300">{{ $cast['name'] }} </a>
                            <div class="flex items-center text-gray-400">
                                <a href="#" class="text-md hover:text-gray-300">{{ $cast['character'] }}</a>
                            </div>
                        </div>
                </div>
                @endif
                @endforeach
            </div>
        </div>
    </div>

    <div class="movie-images border-b border-gray-800">
        <div class="container mx-auto px-4 py-16">
            <h2 class="text-4xl font-semibold">Images</h2>

            <div class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($movie['images']['backdrops'] as $images)
                @if($loop->index < 6)
                    <div class="mt-8">
                        <img src="{{ 'https://image.tmdb.org/t/p/w500/'.$images['file_path'] }}" class="rounded-md" alt="Joaquin Phoenix">
                    </div>
                @endif
            @endforeach
            </div>
        </div>
    </div>

@endsection