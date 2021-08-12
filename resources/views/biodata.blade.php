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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/3.1.2/fullpage.min.css"
    integrity="sha512-4rPgyv5iG0PZw8E+oRdfN/Gq+yilzt9rQ8Yci2jJ15rAyBmF0HBE4wFjBkoB72cxBeg63uobaj1UcNt/scV93w=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

  @livewireStyles

  <!-- Scripts -->
  <script src="{{ mix('js/app.js') }}" defer></script>
  <script type="text/javascript" src="{{ URL::asset('js/script.js') }}"></script>

  <style>
    .section {
      height: 100vh;
      color: white;
    }

  </style>

</head>

<body class="font-sans antialiased bg-gray-800">
  <x-jet-banner />
  <nav x-data="{ open: false }" class="z-50 sticky top-0 bg-transparent transition">
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
            <a class="py-10 -mt-10 inline-flex transition' : 'inline-flex items-center px-1 border-b-2 border-transparent text-sm font-medium leading-5 text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition"
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
            <a class="py-10 -mt-10 inline-flex  border-indigo-400 transition' : 'inline-flex items-center px-1 border-b-2 border-transparent text-sm font-medium leading-5 text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition"
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

  <div id="fullpage">
    <div class="section">
      <div class="relative h-screen">
        <div class="absolute font-sans font-bold text-9xl text-indigo-600 top-10 z-30" style="left:18.5rem;">Nibros
        </div>
        <div class="absolute font-sans font-bold text-9xl text-indigo-600 bottom-20 z-30" style="right:4rem;">Sindi
        </div>
        <div class="absolute font-serif font-light text-8xl text-white bottom-56 left-12 z-30">Developer</div>
        <div class="absolute font-serif font-light text-8xl text-indigo-400 bottom-32 left-12 z-30">Division</div>
        <img class="absolute h-5/6 w-4/12 top-10 left-72 object-cover" src="{{ asset('images/nibros.png') }}">
        <img class="absolute h-4/6 w-4/12 top-20 right-28 object-cover" src="{{ asset('images/nibros.png') }}">
      </div>
    </div>
    <div class="section">
      <div class="relative h-screen"
        style="background-image: linear-gradient(to bottom, #1f2937, #2b4264, #3e5b94, #5b74c6, #818cf8);">

        <img class="absolute h-4/6 w-72 top-20 left-32 object-cover" src="{{ asset('images/saniya.png') }}" alt="">
        <div class="absolute font-serif font-light text-7xl text-indigo-400 -rotate-90 top-80 left-4">Saniya</div>
        <div class="absolute font-bold bottom-28 left-72 text-white">Report <span
            class="font-normal text-gray-100">Divison</span></div>

        <div class="bio-text-nirwana">Bagas</div>
        <div class="bio-text-div">Report <span class="font-normal text-gray-100">Divison</span></div>
        <div class="bio-middle"></div>

        <img class="absolute h-4/6 w-72 top-16 right-32 object-cover" src="{{ asset('images/nirwana.png') }}" alt="">
        <div class="absolute font-serif font-light text-7xl text-indigo-400 -rotate-90 top-64 right-72">Nirwana</div>
        <div class="absolute font-bold bottom-32 right-36 text-white">Report <span
            class="font-normal text-gray-100">Divison</span></div>
      </div>
    </div>
    <div class="section">Three</div>
    <div class="section">Four</div>
  </div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/3.1.2/fullpage.min.js"
    integrity="sha512-gSf3NCgs6wWEdztl1e6vUqtRP884ONnCNzCpomdoQ0xXsk06lrxJsR7jX5yM/qAGkPGsps+4bLV5IEjhOZX+gg=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <script>
    new fullpage('#fullpage', {
      autoScrolling: true
    })
  </script>
</body>

</html>
