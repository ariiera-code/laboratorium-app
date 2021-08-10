<x-app-layout>
  @can('user_access')
    <div>
      <div class="max-w-2xl mx-auto py-8 sm:p-0 lg:px-8">
        <div class="mt-5 md:mt-0 md:col-span-2">
          {{-- form start --}}
          <form method="post" action="{{ route('labs.update', $lab->id) }}">
            @csrf
            @method('PUT')
            {{-- input --}}
            <div class="overflow-hidden sm:rounded-md">
              <h1 class="text-center px-6 sm:pt-8 text-2xl font-extrabold text-gray-900 xs:text-xl">Edit Item</h1>
              <p class="mb-8 px-6 text-base text-center text-gray-500 text-opacity-75 xs:text-sm">any changes to this
                item?</p>
              {{-- general information --}}
              <div class="border-t-4 border-indigo-400 bg-white sm:border-0">
                <div class="pt-4 grid grid-cols-1 divide-y divide-gray-300">
                  <div>
                    <h1 class="mb-4 px-6 text-2xl font-bold text-gray-900 xs:text-lg">General Information</h1>
                  </div>
                  <div></div>
                </div>
                <div class="p-6">
                  {{-- place name input --}}
                  <div class="mb-5 f-outline relative border focus-within:border-indigo-400">
                    <input type="text" name="item_name" id="item_name" placeholder=" "
                      class="block p-2 w-full text-lg appearance-none focus:outline-none bg-transparent"
                      value="{{ old('item_name', $lab->item_name) }}" />
                    <label for="item_name"
                      class="absolute ml-3 px-2 top-0 text-lg text-gray-700 bg-white mt-2 -z-1 duration-300 origin-0">Item
                      Name</label>
                    @error('item_name')
                      <p class="text-sm text-red-600">{{ $message }}</p>
                    @enderror
                  </div>
                  {{-- place desc input --}}
                  <div class="mb-5 f-outline relative border focus-within:border-indigo-400">
                    <textarea type="text" name="item_desc" id="item_desc" placeholder=" "
                      class="block p-2 w-full text-lg appearance-none focus:outline-none bg-transparent resize-none"
                      rows="3" maxlength="255">{{ old('item_desc', $lab->item_desc) }}</textarea>
                    <label for="item_desc"
                      class="absolute ml-3 px-2 top-0 text-lg text-gray-700 bg-white mt-2 -z-1 duration-300 origin-0">Item
                      Description</label>
                    @error('item_desc')
                      <p class="text-sm text-red-600">{{ $message }}</p>
                    @enderror
                  </div>
                  <div class="mb-2">
                    <select class="w-full border bg-white rounded px-3 py-2 outline-none text-gray-700">
                      <option class="py-1">Option 1</option>
                      <option class="py-1">Option 2</option>
                    </select>
                  </div>
                </div>
              </div>

              {{-- numeral information & button --}}
              <div class="border-t-4 border-indigo-400 bg-white mt-8 sm:mt-0 sm:border-0">
                <div class="pt-4 grid grid-cols-1 divide-y divide-gray-300">
                  <div>
                    <h1 class="mb-4 px-6 text-2xl font-bold text-gray-900 xs:text-lg">Numeral Information</h1>
                  </div>
                  <div></div>
                </div>
                <div class="p-6">
                  {{-- item quantity --}}
                  <div class="mb-5 f-outline relative border focus-within:border-indigo-400">
                    <input type="number" name="item_quantity" id="item_quantity" placeholder=" "
                      class="block p-2 w-full text-lg appearance-none focus:outline-none bg-transparent resize-none"
                      value="{{ $lab->item_quantity }}">
                    <label for="item_quantity"
                      class="absolute ml-3 px-2 top-0 text-lg text-gray-700 bg-white mt-2 -z-1 duration-300 origin-0">Item
                      Quantity</label>
                    @error('item_quantity')
                      <p class="text-sm text-red-600">{{ $message }}</p>
                    @enderror
                  </div>
                  {{-- item value --}}
                  <div class="mb-5 f-outline relative border focus-within:border-indigo-400">
                    <input type="number" name="item_value" id="item_value" placeholder=" "
                      class="block p-2 w-full text-lg appearance-none focus:outline-none bg-transparent resize-none"
                      value="{{ $lab->item_value }}">
                    <label for="item_value"
                      class="absolute ml-3 px-2 top-0 text-lg text-gray-700 bg-white mt-2 -z-1 duration-300 origin-0">Item
                      Value</label>
                    @error('item_value')
                      <p class="text-sm text-red-600">{{ $message }}</p>
                    @enderror
                  </div>
                  <div class="mb-5 f-outline relative border focus-within:border-indigo-400">
                    <input type="number" name="item_error" id="item_error" placeholder=" "
                      class="block p-2 w-full text-lg appearance-none focus:outline-none bg-transparent resize-none"
                      value="{{ $lab->item_error }}">
                    <label for="item_error"
                      class="absolute ml-3 px-2 top-0 text-lg text-gray-700 bg-white mt-2 -z-1 duration-300 origin-0">Item
                      Error/Damaged</label>
                    @error('item_error')
                      <p class="text-sm text-red-600">{{ $message }}</p>
                    @enderror
                  </div>
                  <div class="flex">
                    <a href=""
                      class="hidden sm:mt-4 sm:mr-2 bg-white border border-indigo-500 text-indigo-500 font-bold rounded hover:text-white hover:border-indigo-700 hover:bg-indigo-700 py-2 px-5 sm:inline-flex items-center transition sm:w-full sm:justify-center sm:py-3">
                      <span class="mr-2 text-lg">Cancel</span>
                    </a>
                    <button
                      class="hidden sm:mt-4 sm:ml-2 bg-indigo-500 text-white font-bold rounded hover:bg-indigo-700 py-2 px-5 sm:inline-flex items-center transition sm:w-full sm:justify-center sm:py-3">
                      <span class="mr-2 text-lg">Edit</span>
                    </button>
                  </div>
                </div>
                {{-- submit button --}}

              </div>
              <div class="flex items-center justify-end md:justify-center pb-4 pt-6 text-right sm:items-stretch sm:hidden">
                <button
                  class="mr-4 bg-white border border-indigo-500 text-indigo-500 font-bold rounded hover:text-white hover:border-indigo-700 hover:bg-indigo-700 py-2 px-5 inline-flex items-center transition md:w-full md:justify-center md:py-3">
                  <span class="mr-2">Cancel</span>
                </button>
                <a href="."
                  class="bg-indigo-500 text-white font-bold rounded hover:bg-indigo-700 shadow-md py-2 px-5 inline-flex items-center transition md:w-full md:justify-center md:py-3">
                  <span class="mr-2">Edit</span>
                  <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" stroke="currentColor" stroke-width="1"
                    width="12" height="12" viewBox="0 0 24 24" fill-rule="evenodd" clip-rule="evenodd">
                    <path
                      d="M 19.171875 2 C 18.448125 2 17.724375 2.275625 17.171875 2.828125 L 16 4 L 20 8 L 21.171875 6.828125 C 22.275875 5.724125 22.275875 3.933125 21.171875 2.828125 C 20.619375 2.275625 19.895625 2 19.171875 2 z M 14.5 5.5 L 3 17 L 3 21 L 7 21 L 18.5 9.5 L 14.5 5.5 z" />
                  </svg>
                </a>
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
