<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'HealthRadar') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">

            <!-- Page Heading -->
            @isset($header)
                <nav class="lg:grid lg:grid-cols-6 gap-4 m-10 p-10 py-5 my-5 justify-between flex">
        <div>
            <a href="/">
                <img src="/logo.png" alt="" class="w-20 col-span-1">
            </a>
            <h2 class="text-xl font-semibold logo mt-2">HealthRadar</h2>
        </div>

        <div class='lg:flex text-xl col-span-3 font-medium justify-between hidden'>
            <p class='m-2'><a href="/">Home</a></p>
            <p class='m-2'><a href="/hospital">Hospitals</a></p>
            <p class='m-2'><a href="/medication">Medication</a></p>
            <div class="relative group z-20">
                <p class="m-2 relative cursor-pointer">Add +</p>
                <div class="absolute top-full left-1/2 transform -translate-x-1/2 mt-0 w-[900px] bg-white rounded-lg shadow-lg text-black hidden group-hover:block">
                    <div class="grid grid-cols-2 gap-6 p-8">
                        <!-- Left Column -->
                        <div>
                            <a href="/add/hospital">
                                <h2 class="text-2xl font-bold text-gray-800 mb-4">Hospitals</h2>
                                <p class="text-gray-600 text-md mb-6">
                                    Access healthcare facilities, explore hospitals, and connect with specialists tailored to your needs.
                                </p>
                            </a>
                            <a href="/add/medication">
                                <h2 class="text-2xl font-bold text-gray-800 mb-4">Medications</h2>
                                <p class="text-gray-600 text-md">
                                    Find medications, pharmacy benefits, and learn about comprehensive treatment options.
                                </p>
                            </a>
                        </div>
                        <!-- Right Column with Image and Centered Content -->
                        <div class=" flex items-center justify-center rounded-lg bg-cover bg-no-repeat p-8" style="background-image: url('/linkbg.svg');">
                            <div class="text-center text-white">
                                <h2 class="text-3xl font-bold text-[#002265] mb-4">For Business and Organizations</h2>
                                <p class="text-gray-700 text-md">
                                    We’re rebuilding healthcare how it should be: simple, direct, and easy to access.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-span-2 text-black hidden lg:block">
            <a href='/login'><button class="rounded-3xl p-2 border border-[2px] border-[#46e0d3] px-10 lg:mx-5 hover">Log In</button></a>
            <a href="/register"><button class="bg-[#46e0d3] rounded-3xl p-2 px-10 border border-[#46e0d3] lg:mx-5 hover">Sign Up</button></a>
        </div>

        <button id="menu-toggle" class="text-gray-600 focus:outline-none lg:hidden">
            <svg id="hamburger-icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16m-7 6h7" />
            </svg>
            <svg id="close-icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6 hidden">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>

    </nav>
    <div id="mobile-menu" class="hidden bg-[#002265] z-20 shadow-lg rounded-xl w-full lg:hidden p-10 absolute text-white">
        <p class='m-2 my-5'><a href="/">Home</a></p>
        <p class='m-2 my-5'><a href="/hospital">Hospitals</a></p>
        <p class='m-2 my-5'><a href="/medication">Medications</a></p>
        <div class="relative group">
            <p class="m-2 my-5 relative cursor-pointer">Add +</p>
            <!-- Overlay -->
            <div class="absolute top-full left-1/2 transform -translate-x-1/2 mt-2 w-[90%] md:w-[80%] bg-white rounded-lg shadow-lg text-black hidden group-hover:block">
                <div class="flex flex-col md:grid md:grid-cols-2 gap-6 p-4 md:p-8">
                    <!-- Right Column with Image on Top for Small Screens -->
                    <div class="bg-[#e5f1fe] flex items-center justify-center rounded-lg bg-cover bg-no-repeat p-8 md:p-8" style="background-image: url('/linkbg.svg');">
                        <div class="text-center text-white">
                            <h2 class="text-2xl md:text-3xl font-bold text-[#002265] mb-2 md:mb-4">For Business and Organizations</h2>
                            <p class="text-gray-700 text-md md:text-lg">
                                We’re rebuilding healthcare how it should be: simple, direct, and easy to access.
                            </p>
                        </div>
                    </div>
                    <!-- Left Column for Text Links -->
                    <div>
                        <a href="/add/hospital">
                            <h2 class="text-xl md:text-2xl font-bold text-gray-800 mb-2 md:mb-4">Hospitals</h2>
                            <p class="text-gray-600 text-sm md:text-md mb-4 md:mb-6">
                                Access healthcare facilities, explore hospitals, and connect with specialists tailored to your needs.
                            </p>
                        </a>
                        <a href="/add/medication">
                            <h2 class="text-xl md:text-2xl font-bold text-gray-800 mb-2 md:mb-4">Medications</h2>
                            <p class="text-gray-600 text-sm md:text-md">
                                Find medications, pharmacy benefits, and learn about comprehensive treatment options.
                            </p>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div>
            <a href='/login'><button class="rounded-3xl p-2 border border-[2px] border-[#46e0d3] px-10 lg:mx-5 hover">Log In</button></a>
            <a href="/register"><button class="bg-[#46e0d3] rounded-3xl p-2 px-10 border border-[#46e0d3] lg:mx-5 hover">Sign Up</button></a>
        </div>
    </div>
            @endisset

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
    </body>
</html>
