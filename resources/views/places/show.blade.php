<x-app-layout>
  {{-- Detail & timeline section --}}
  <div class="flex p-8 sm:py-8 sm:px-0">
    {{-- Place section --}}
    <div class="flex-1 grid grid-cols-3 gap-6">
      {{-- place desc --}}
      <div class="place-feed border shadow-md sm:shadow-sm rounded bg-white lg:col-span-3">
        {{-- header --}}
        <div class="header border-b p-4 flex justify-between items-center">
          <div class="left flex flex-row items-center">
            {{-- creator photo --}}
            <div class="h-10 w-10 border rounded-full overflow-hidden mr-4">
              <img alt="profile picture" class="h-10 w-10" data-testid="user-avatar" draggable="false"
                src="{{ $place->user->profile_photo_url }}">
            </div>
            {{-- creator name --}}
            <div class="flex flex-col">
              <span class="text-sm font-bold">{{ $place->user->name }}</span>
              <span class="text-xs font-light text-gray-900">-7.054622600172934, 110.43495833068414</span>
            </div>
          </div>
          {{-- action edit --}}
          @can('user_access')
            <div class="">
              <div x-data="{ dropdownOpen: false }" class="relative">
                <button @click="dropdownOpen = !dropdownOpen"
                  class="relative z-10 block rounded-md bg-white p-2 focus:outline-none">
                  <svg aria-label="More options" class="_8-yf5 " fill="#262626" height="16" viewBox="0 0 48 48"
                    width="16">
                    <circle clip-rule="evenodd" cx="8" cy="24" fill-rule="evenodd" r="4.5"></circle>
                    <circle clip-rule="evenodd" cx="24" cy="24" fill-rule="evenodd" r="4.5"></circle>
                    <circle clip-rule="evenodd" cx="40" cy="24" fill-rule="evenodd" r="4.5"></circle>
                  </svg>
                </button>
                <div x-show="dropdownOpen" @click="dropdownOpen = false" class="fixed inset-0 h-full w-full z-10"></div>
                <div x-show="dropdownOpen"
                  class="absolute right-0 mt-2 py-2 w-48 bg-white rounded-md shadow-xl z-20 transition">
                  <a href="{{ route('places.edit', Str::slug($place->place_name)) }}"
                    class="block px-4 py-2 text-sm capitalize text-gray-700 hover:bg-indigo-400 hover:text-white transition">
                    Edit Place
                  </a>
                  <div class="flex">
                    <button
                      class="modal-open flex-grow px-4 py-2 text-sm text-left capitalize text-gray-700 hover:bg-red-600 hover:text-white transition">
                      Delete Place
                    </button>
                  </div>
                </div>
              </div>
            </div>
          @endcan
        </div>
        {{-- place image --}}
        <div class="">
          <img class="z-0 h-48 w-full object-cover overflow-hidden"
            src="{{ asset('storage/placeimages/' . $place->place_photo) }}">
        </div>
        <div class="p-4">
          <div class="top">
            <div class="caption text-sm">
              <div class="flex justify-between">
                <b>{{ $place->place_name }}</b>
                <span class="text-xs text-gray-900">
                  {{ date('F j, Y', strtotime($place->created_at)) }}
                </span>
              </div>
              <p>{{ $place->place_desc }}</p>
            </div>
          </div>
        </div>
      </div>
      {{-- timeline --}}
      <div class="col-span-2 border shadow-md sm:shadow-sm rounded bg-white lg:col-span-3">
        <h1 class="font-normal text-lg mt-6 ml-6 sm:text-md"><span class="font-bold">{{ $place->place_name }}</span>
          Timeline
        </h1>
        <div class="relative m-6">
          <div class="border-r-2 z-0 border-gray-200 absolute h-full top-1 left-3"></div>
          <ul class="list-none m-0 p-0">
            {{-- list timeline --}}
            <li class="mb-3">
              <div class="flex items-center mb-1">
                <div class="absolute z-10 left-1.5 bg-indigo-500 rounded-full h-4 w-4"></div>
                {{-- update title --}}
                <div class="flex justify-between w-full">
                  <div class="ml-12 font-medium sm:text-sm">Multiple Releases</div>
                  <div class="font-bold text-indigo-500 text-opacity-50 pt-0.5 sm:text-xs sm:text-opacity-100">
                    Nov
                    2017
                  </div>
                </div>
              </div>
              {{-- update desc --}}
              <div class="ml-12 text-gray-500 text-opacity-90 mb-2 sm:text-xs">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi iusto a impedit nemo consequuntur at,
                quaerat maiores, quasi numquam molestiae, suscipit iure? Obcaecati nemo dolorum fugit sit voluptates
                alias facere ea ratewaas sit voluptates alias facere
              </div>
              {{-- updater --}}
              <div class="header ml-12 flex justify-between items-center mt-2">
                <div class="left flex flex-row items-center">
                  {{-- creator photo --}}
                  <div class="h-8 w-8 border rounded-full overflow-hidden mr-2">
                    <img alt="{{ $place->user->name }}'s Profile Picture" class="_6q-tv" draggable="false"
                      src="{{ url('/images/authbg.jpg') }}">
                  </div>
                  {{-- creator name --}}
                  <div class="flex flex-col">
                    <span class="text-sm font-bold">{{ $place->user->name }}</span>
                    <span class="text-xs font-light text-gray-900">{{ $place->user->role }}</span>
                  </div>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  {{-- Table section --}}
  <div class="px-8 pb-8 md:pt-0 md:px-0">
    <div class="flex-1 divide-y divide-gray-300 bg-white grid px-8 pt-6 pb-4">
      <div class="flex justify-between pb-2">
        <h1 class="font-bold text-2xl">List of Items</h1>
        <a href="{{ route('labs.create') }}"
          class="px-7 py-1.5 border rounded-md bg-indigo-500 text-white text-base font-bold hover:bg-indigo-600">Add
          Item</a>
      </div>
      {{-- <livewire:labs-table> --}}
      <livewire:labs-table hideable="select" sort="item_name|asc" exportable :place="$place" />
    </div>
  </div>
  <!--Modal-->
  <div
    class="modal opacity-0 pointer-events-none fixed w-full h-full top-0 left-0 flex items-center justify-center z-50">
    <div class="modal-overlay absolute w-full h-full bg-gray-900 opacity-50 z-50"></div>

    <div
      class="modal-container bg-white w-1/3 lg:w-5/12 md:w-2/3 sm:w-11/12 md:max-w-md mx-auto rounded shadow-lg z-50 overflow-y-auto">

      <div
        class="modal-close absolute top-0 right-0 cursor-pointer flex flex-col items-center mt-4 mr-4 text-white text-sm z-50">
        <svg class="fill-current text-white" xmlns="http://www.w3.org/2000/svg" width="18" height="18"
          viewBox="0 0 18 18">
          <path
            d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z">
          </path>
        </svg>
        <span class="text-sm">(Esc)</span>
      </div>

      <!-- Add margin if you want to see some of the overlay behind the modal-->
      <div class="modal-content pt-4 pb-5 text-left px-6">
        {{-- close button --}}
        <div class="flex justify-end items-center pb-3">
          <div class="modal-close cursor-pointer z-50">
            <svg class="fill-current text-black" xmlns="http://www.w3.org/2000/svg" width="18" height="18"
              viewBox="0 0 18 18">
              <path
                d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z">
              </path>
            </svg>
          </div>
        </div>

        {{-- body modal --}}
        <div class="flex">
          <div class="mt-3 text-center">
            <div class="mx-auto flex-shrink-0 flex items-center justify-center rounded-full bg-red-100 w-max p-2 mb-2">
              <svg class="h-12 w-12 text-red-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
              </svg>
            </div>
            <h3 class="text-lg leading-6 font-bold text-gray-900" id="modal-title">
              Deleting Place
            </h3>
            <div class="mt-2">
              <p class="text-sm text-gray-500">
                Are you sure you want to delete this place? The data will be permanently removed. This
                action cannot be undone.
              </p>
            </div>
          </div>
        </div>

        <!--Footer-->
        <div class="mt-6 grid grid-cols-2 gap-3">
          <button
            class="modal-close bg-gray-100 text-gray-800 font-bold rounded-lg hover:text-gray-100 hover:bg-gray-900 py-2 px-5 sm:inline-flex items-center transition sm:w-full sm:justify-center">
            <span class="mr-2 md:text-base sm:text-sm">Cancel</span>
          </button>
          <form class="inline-block" action="{{ route('places.destroy', $place->id) }}" method="POST">
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <button type="submit"
              class="bg-red-100 text-red-500 hover:text-red-100 font-bold rounded-lg hover:bg-red-600 py-2 px-5 inline-flex items-center transition w-full justify-center">
              <span class="mr-2 md:text-base sm:text-sm">Delete Place</span>
            </button>
          </form>
        </div>

      </div>
    </div>
  </div>
  <script>
    var openmodal = document.querySelectorAll('.modal-open')
    for (var i = 0; i < openmodal.length; i++) {
      openmodal[i].addEventListener('click', function(event) {
        event.preventDefault()
        toggleModal()
      })
    }

    const overlay = document.querySelector('.modal-overlay')
    overlay.addEventListener('click', toggleModal)

    var closemodal = document.querySelectorAll('.modal-close')
    for (var i = 0; i < closemodal.length; i++) {
      closemodal[i].addEventListener('click', toggleModal)
    }

    document.onkeydown = function(evt) {
      evt = evt || window.event
      var isEscape = false
      if ("key" in evt) {
        isEscape = (evt.key === "Escape" || evt.key === "Esc")
      } else {
        isEscape = (evt.keyCode === 27)
      }
      if (isEscape && document.body.classList.contains('modal-active')) {
        toggleModal()
      }
    };


    function toggleModal() {
      const body = document.querySelector('body')
      const modal = document.querySelector('.modal')
      modal.classList.toggle('opacity-0')
      modal.classList.toggle('pointer-events-none')
      body.classList.toggle('modal-active')
    }
  </script>
  {{-- <div class=""></div> --}}
</x-app-layout>
