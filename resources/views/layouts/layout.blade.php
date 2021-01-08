<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/14f3a83351.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @livewireStyles
    <title>Document</title>
</head>
<body class="font-sans bg-gray-900 text-white">
    
    <nav class="border-b border-gray-800">
        <div class="container mx-auto flex flex-col md:flex-row items-center justify-between px-4 py-6">
            <ul class="flex flex-col md:flex-row  items-center">
                <li>
                    <a href="{{ route('movie.index') }}">
                    <i class="fas fa-film"></i>
                    MovieApp
                    </a>
                </li>
                <li class="md:ml-10 md:mt-2">
                    <a href="{{ route('movie.index') }}" class="hover:text-gray-300">Movies</a>
                </li>
                <li class="md:ml-6 md:mt-2">
                    <a href="#" class="hover:text-gray-300">TV Shows</a>
                </li>
                <li class="md:ml-6 md:mt-2">
                    <a href="#" class="hover:text-gray-300">Actors</a>
                </li>
            </ul>

            <div class="flex flex-col md:flex-row items-center">
                <livewire:search-drop-down>
                <div class="md:ml-4 mt-3 md:mt-0">
                    <a href="#">
                        <img src="https://ui-avatars.com/api/?name=John+Doe" alt="avatar" class="rounded-full w-8 h-8">
                    </a>
                </div>
            </div>
        </div>
    </nav>
        @yield('content')
        
    @livewireScripts
</body>
</html>