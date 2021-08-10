<x-app-layout>
  {{-- Detail & timeline section --}}
  <div class="flex p-8 sm:py-8 sm:px-0">
    {{-- Place section --}}
    <div class="flex-1 grid grid-cols-3 gap-6">
      {{-- place desc --}}
      <div class="place-feed border shadow-md rounded bg-white lg:col-span-3">
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
                  <a href="{{ route('places.edit', $place->id) }}"
                    class="block px-4 py-2 text-sm capitalize text-gray-700 hover:bg-indigo-400 hover:text-white transition">
                    Edit Place
                  </a>
                  <a href="{{ route('places.destroy', $place->id) }}"
                    class="block px-4 py-2 text-sm capitalize text-gray-700 hover:bg-indigo-400 hover:text-white transition">
                    Delete Place
                  </a>
                </div>
              </div>
            </div>
          @endcan
        </div>
        {{-- place image --}}
        <div class="">
          <img class="z-0 h-48 w-full object-cover overflow-hidden" src="{{ url('/images/authbg.jpg') }}">
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
      <div class="col-span-2 border shadow-md rounded bg-white lg:col-span-3">
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
        <a href="{{ route('labs.create', $place->id) }}"
          class="px-7 py-1.5 border rounded-md bg-indigo-500 text-white text-base font-bold hover:bg-indigo-600">Add
          Item</a>
      </div>
      {{-- <livewire:labs-table> --}}
      <livewire:labs-table hideable="select" sort="item_name|asc" exportable :place="$place" />
    </div>
  </div>
  {{-- <div class=""></div> --}}
</x-app-layout>
