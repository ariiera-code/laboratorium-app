<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }}</title>

  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

  <!-- Styles -->
  <link rel="stylesheet" href="{{ mix('css/app.css') }}">
  <link rel="stylesheet" href="{!! asset('css/style.css') !!}" />

  @livewireStyles

  <!-- Scripts -->
  <script src="{{ mix('js/app.js') }}" defer></script>
  <script type="text/javascript" src="{{ URL::asset('js/script.js') }}"></script>
  <script type="text/javascript" src="{{ URL::asset('js/jquery-3.6.0.min.js') }}"></script>

  <style>
    html,
    body {
      overflow: hidden;
      height: 100%;
      min-height: 100%;
    }

    #site {
      width: 100%;
      height: 100%;
      min-height: 100%;
    }

    #section-wrapper {
      position: relative;
      width: 100%;
      height: 100%;
      min-height: 100%;
    }

    div.section {
      width: 100%;
      position: relative;
      height: 100%;
      min-height: 100%;
    }

    #section-1 {
      background: #ccc;
    }

    #section-2 {
      background: #666;
    }

    #section-3 {
      background: #000;
    }

  </style>

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


  <div id="site">
    <div id="section-wrapper">
      <div class="section" id="section-1"></div>
      <div class="section" id="section-2"></div>
      <div class="section" id="section-3"></div>
    </div>
  </div>
  @livewireScripts
</body>

</html>
