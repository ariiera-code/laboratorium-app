<x-app-layout>
  <title>{{ $data['title'] }}</title>
  @can('user_access')
    <div>
      <div class="max-w-2xl mx-auto sm:p-0 lg:px-8">
        <div class="mt-5 md:mt-0 md:col-span-2">
          {{-- form start --}}
          <form method="post" action="{{ route('places.update', $place->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="overflow-hidden sm:rounded-md">
              <h1 class="text-center px-6 md:pt-8 text-2xl font-extrabold text-gray-900 xs:text-xl">Edit Place</h1>
              <p class="mb-8 px-6 text-base text-center text-gray-500 text-opacity-75 xs:text-sm">Any changes to this
                place?</p>
              <div class="border-t-4 border-indigo-400 bg-white rounded-lg">
                <div class="pt-4 grid grid-cols-1 divide-y divide-gray-300">
                  <div>
                    <h1 class="mb-4 px-6 text-2xl font-bold text-gray-900 xs:text-lg">General Information</h1>
                  </div>
                  <div></div>
                </div>
                {{-- place name input --}}
                <div class="p-6">
                  <div class="mb-6 f-outline relative border focus-within:border-indigo-400">
                    <input type="text" name="place_name" id="place_name" placeholder=" "
                      class="block p-2 w-full text-lg appearance-none focus:outline-none bg-transparent"
                      value="{{ old('place_name', $place->place_name) }}" />
                    <label for="place_name"
                      class="absolute ml-3 px-2 top-0 text-lg text-gray-700 bg-white mt-2 -z-1 duration-300 origin-0">Place
                      Name</label>
                    @error('place_name')
                      <p class="text-sm text-red-600">{{ $message }}</p>
                    @enderror
                  </div>
                  {{-- place desc input --}}
                  <div class="f-outline relative border focus-within:border-indigo-400">
                    <textarea type="text" name="place_desc" id="place_desc" placeholder=" "
                      class="block p-2 w-full text-lg appearance-none focus:outline-none bg-transparent resize-none"
                      rows="4" maxlength="255">{{ $place->place_desc }}</textarea>
                    <label for="place_desc"
                      class="absolute ml-3 px-2 top-0 text-lg text-gray-700 bg-white mt-2 -z-1 duration-300 origin-0">Place
                      Description</label>
                    @error('place_desc')
                      <p class="text-sm text-red-600">{{ $message }}</p>
                    @enderror
                  </div>
                  <div>
                    <img src="{{ asset('storage/placeimages/' . $place->place_photo) }}" width="200">
                    <input type="file" name="place_photo" accept="image/*">
                  </div>
                  <div class="flex">
                    <a href="{{ $backurl }}"
                      class="hidden sm:mt-4 sm:mr-2 bg-white border border-indigo-500 text-indigo-500 font-bold rounded-md hover:text-white hover:border-indigo-700 hover:bg-indigo-700 py-2 px-5 sm:inline-flex items-center transition sm:w-full sm:justify-center sm:py-3">
                      <span class="mr-2 text-lg">Cancel</span>
                    </a>
                    <button type="submit"
                      class="hidden sm:mt-4 sm:ml-2 bg-indigo-500 text-white font-bold rounded-md hover:bg-indigo-700 py-2 px-5 sm:inline-flex items-center transition sm:w-full sm:justify-center sm:py-3">
                      <span class="mr-2 text-lg">Edit</span>
                      <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" stroke="currentColor" stroke-width="1"
                        width="12" height="12" viewBox="0 0 24 24" fill-rule="evenodd" clip-rule="evenodd">
                        <path
                          d="M 19.171875 2 C 18.448125 2 17.724375 2.275625 17.171875 2.828125 L 16 4 L 20 8 L 21.171875 6.828125 C 22.275875 5.724125 22.275875 3.933125 21.171875 2.828125 C 20.619375 2.275625 19.895625 2 19.171875 2 z M 14.5 5.5 L 3 17 L 3 21 L 7 21 L 18.5 9.5 L 14.5 5.5 z" />
                      </svg>
                    </button>
                  </div>
                </div>
              </div>
              {{-- submit button --}}
              <div
                class="flex items-center justify-end md:justify-center pb-8 pt-6 text-right sm:items-stretch sm:hidden">
                <a href="{{ $backurl }}"
                  class="cursor-pointer mr-4 bg-white border border-indigo-500 text-indigo-500 font-bold rounded hover:text-white hover:border-indigo-700 hover:bg-indigo-700 py-2 px-5 inline-flex items-center transition md:w-full md:justify-center md:py-3">
                  <span class="mr-2">Cancel</span>
                </a>
                <button type="submit"
                  class="bg-indigo-500 text-white font-bold rounded hover:bg-indigo-700 shadow-md py-2 px-5 inline-flex items-center transition md:w-full md:justify-center md:py-3">
                  <span class="mr-2">Edit</span>
                  <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" stroke="currentColor" stroke-width="1"
                    width="12" height="12" viewBox="0 0 24 24" fill-rule="evenodd" clip-rule="evenodd">
                    <path
                      d="M 19.171875 2 C 18.448125 2 17.724375 2.275625 17.171875 2.828125 L 16 4 L 20 8 L 21.171875 6.828125 C 22.275875 5.724125 22.275875 3.933125 21.171875 2.828125 C 20.619375 2.275625 19.895625 2 19.171875 2 z M 14.5 5.5 L 3 17 L 3 21 L 7 21 L 18.5 9.5 L 14.5 5.5 z" />
                  </svg>
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  @elsecan('lab_access')
    Sorry you're not admin
  @endcan
</x-app-layout>
