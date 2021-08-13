<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }}</title>
  <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}">

  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

  <!-- Styles -->
  <link rel="stylesheet" href="{{ mix('css/app.css') }}">
  <link rel="stylesheet" href="{!! asset('css/style.css') !!}" />

  @livewireStyles

  <!-- Scripts -->
  <script src="{{ mix('js/app.js') }}" defer></script>

</head>

<body class="font-sans antialiased bg-gray-800">
  <x-jet-banner />
  <nav x-data="{ open: false }" class="z-50 sticky top-0 bg-gray-800 transition">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-12 sm:px-6 lg:px-12">
      <div class="flex justify-between border-b border-gray-600 h-16 py-10">
        <div class="flex">
          <!-- Logo -->
          <div class="flex-shrink-0 flex items-center">
            <a href="{{ route('home') }}">
              <x-jet-application-mark class="block h-9 w-auto" />
            </a>
          </div>
        </div>

        <div class="flex justify-center">
          <!-- Navigation Links -->
          <div class="flex md:space-x-8 sm:-my-px ml-10  md:hidden">
            <a class="py-10 -mt-10 inline-flex border-indigo-400 transition' : 'inline-flex items-center px-1 border-b-2 border-transparent text-sm font-medium leading-5 text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition"
              href="{{ route('home') }}" :active="request()->routeIs('home')">
              <div class="font-bold text-white">
                About
              </div>
            </a>
          </div>
          <div class="flex md:space-x-8 sm:-my-px ml-10 md:hidden">
            <a class="py-10 -mt-10 inline-flex transition' : 'inline-flex items-center px-1 border-b-2 border-transparent text-sm font-medium leading-5 text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition"
              href="{{ route('places.index') }}" :active="request()->routeIs('places.*')">
              <div class="font-bold text-white">
                Laboratorium
              </div>
            </a>
          </div>
          @can('user_access')
            <div class="flex md:space-x-8 sm:-my-px ml-10 md:hidden">
              <a class="py-10 -mt-10 inline-flex transition' : 'inline-flex items-center px-1 border-b-2 border-transparent text-sm font-medium leading-5 text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition"
                href="{{ route('users.index') }}" :active="request()->routeIs('users.*')">
                <div class="font-bold text-white">
                  Users
                </div>
              </a>
            </div>
          @endcan
          <div class="flex md:space-x-8 sm:-my-px ml-10 md:hidden">
            <a class="py-10 -mt-10 inline-flex transition' : 'inline-flex items-center px-1 border-b-2 border-transparent text-sm font-medium leading-5 text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition"
              href="{{ route('biodata') }}" :active="request()->routeIs('biodata')">
              <div class="font-bold text-white">
                Biodata
              </div>
            </a>
          </div>
        </div>
        <!-- Login Register -->
        <div class="flex items-center ml-6">
          @if (Route::has('login'))
            <div class="py-6 sm:block">
              @auth
                <a href="{{ url('/home') }}"
                  class="text-sm text-indigo-400 font-bold hover:text-indigo-100 transition">Home</a>
              @else
                <a href="{{ route('login') }}"
                  class="text-sm text-indigo-400 font-bold hover:text-indigo-100 transition">Log in</a>

                @if (Route::has('register'))
                  <a href="{{ route('register') }}"
                    class="ml-4 text-sm text-indigo-400 font-bold hover:text-indigo-100 transition">Register</a>
                @endif
              @endauth
            </div>
          @endif
        </div>
      </div>
    </div>
  </nav>


  <div class="max-w-7xl mx-auto px-12 sm:px-6 lg:px-12">
    <div class="flex justify-between bg-gray-800">
      <div class="w-8/12 sm:w-full grid grid-cols-1 place-content-end sm:pt-12">
        <p class="font-bold text-white">est. 1982</p>
        <div class="pb-16 border-b border-gray-600 mt-16">
          <h1 class="font-bold text-5xl xs:text-4xl leading-none text-white font-serif tracking-widest">Magnificent</h1>
          <a href="{{ route('places.index') }}"
            class="tracking-widest inline-block font-bold text-5xl xs:text-4xl leading-none text-gray-400 hover:text-indigo-400 transition font-serif">
            Laboratory
            <p class="mt-4">
              <span
                class="hidden sm:inline-block font-sans bg-indigo-400 hover:bg-indigo-500 p-2 rounded-md font-extrabold text-3xl text-white transition">Discover
                Now!</span>
            </p>
          </a>
        </div>
      </div>
      <div class="w-4/12 sm:hidden">
        <div class="py-12 pl-12 side">
          <div class="grid grid-cols-6">
            <div class="col-start-1 col-end-7 mt-4">
              <p class="font-bold text-white">Tembalang, SMG</p>
            </div>
            <div class="col-start-1 col-end-7 mt-8">
              <p class="font-bold text-white lg:text-sm md:text-xs">//</p>
            </div>
            <div class="col-start-1 col-end-7">
              <p class="font-base text-gray-400 lg:text-sm md:text-xs">The handiest way to organize and maintain
                laboratory equipment that
                aims to improve performance and to become a better and competent campus.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="max-w-7xl py-8 mr-auto pr-12 sm:px-6 lg:px-12">
    <a href="{{ route('places.index') }}" class="img-hover rounded-md">
      <img class="object-cover h-52 w-full rounded-md" src="{{ asset('images/authbg.jpg') }}">
      <div class="img-child">
        <span class="sm:hidden font-extrabold text-3xl text-white">Discover Now!</span>
        <span class="hidden sm:inline-block font-extrabold text-3xl text-white">See what's
          inside!</span>
      </div>
    </a>
  </div>
  @livewireScripts
</body>

</html>
