<x-app-layout>
  <title>{{ $data['title'] }}</title>
  <div>
    <div class="max-w-2xl mx-auto pb-8 sm:p-0 lg:px-8">
      <div class="mt-5 md:mt-0 md:col-span-2">
        {{-- form start --}}
        <form method="post" action="{{ route('users.update', $user->id) }}">
          @csrf
          @method('PUT')
          {{-- input --}}
          <div class="overflow-hidden sm:rounded-md">
            <h1 class="text-center px-6 sm:pt-8 text-2xl font-extrabold text-gray-900 xs:text-xl">Edit User</h1>
            <p class="mb-8 px-6 text-base text-center text-gray-500 text-opacity-75 xs:text-sm">Any changes to this
              User?</p>
            {{-- general information --}}
            <div class="border-t-4 border-indigo-400 bg-white rounded-lg sm:border-0">
              <div class="pt-4 grid grid-cols-1 divide-y divide-gray-300">
                <div>
                  <h1 class="mb-4 px-6 text-2xl font-bold text-gray-900 xs:text-lg">General Information</h1>
                </div>
                <div></div>
              </div>
              <div class="p-6">
                {{-- user name input --}}
                <div class="mb-5 f-outline relative border focus-within:border-indigo-400">
                  <input type="text" name="name" id="name" placeholder=" "
                    class="block p-2 w-full text-lg appearance-none focus:outline-none bg-transparent"
                    value="{{ old('name', $user->name) }}" />
                  <label for="name"
                    class="absolute ml-3 px-2 top-0 text-lg text-gray-700 hover:text-indigo-400 bg-white mt-2 -z-1 duration-300 origin-0">Full
                    Name</label>
                  @error('name')
                    <p class="text-sm text-red-600">{{ $message }}</p>
                  @enderror
                </div>
                {{-- user email input --}}
                <div class="mb-5 f-outline relative border focus-within:border-indigo-400">
                  <input type="text" name="email" id="email" placeholder=" "
                    class="block p-2 w-full text-lg appearance-none focus:outline-none bg-transparent"
                    value="{{ old('email', $user->email) }}" />
                  <label for="email"
                    class="absolute ml-3 px-2 top-0 text-lg text-gray-700 hover:text-indigo-400 bg-white mt-2 -z-1 duration-300 origin-0">Email Address</label>
                  @error('email')
                    <p class="text-sm text-red-600">{{ $message }}</p>
                  @enderror
                </div>
                {{-- user role select --}}
                <div class="mb-5">
                  <select name="roles[]" id="roles" class="w-full border rounded px-3 py-2 outline-none text-gray-700">
                    @foreach ($roles as $id => $role)
                      <option class="py-1" value="{{ $id }}"
                        {{ in_array($id, old('roles', $user->roles->pluck('id')->toArray())) ? ' selected' : '' }}>
                        {{ $role }}</option>
                    @endforeach
                  </select>
                </div>
                {{-- new password input --}}
                <div class="mb-2 f-outline relative border focus-within:border-indigo-400">
                  <input type="password" name="password" id="password" placeholder=" "
                    class="block p-2 w-full text-lg appearance-none focus:outline-none bg-transparent" />
                  <label for="password"
                    class="absolute ml-3 px-2 top-0 text-lg text-gray-700 hover:text-indigo-400 bg-white mt-2 -z-1 duration-300 origin-0">New
                    Password</label>
                  @error('password')
                    <p class="text-sm text-red-600">{{ $message }}</p>
                  @enderror
                </div>
                {{-- submit button sm --}}
                <div class="flex">
                  <a href="{{ $backurl }}"
                    class="hidden sm:mt-4 sm:mr-2 bg-white border border-indigo-500 text-indigo-500 font-bold rounded-md hover:text-white hover:border-indigo-700 hover:bg-indigo-700 py-2 px-5 sm:inline-flex items-center transition sm:w-full sm:justify-center sm:py-3">
                    <span class="mr-2 text-lg">Cancel</span>
                  </a>
                  <button type="submit"
                    class="hidden sm:mt-4 sm:ml-2 bg-indigo-500 text-white font-bold rounded-md hover:bg-indigo-700 py-2 px-5 sm:inline-flex items-center transition sm:w-full sm:justify-center sm:py-3">
                    <span class="mr-2 text-lg">Edit</span>
                  </button>
                </div>
              </div>
            </div>
            {{-- submit button lg --}}
            <div
              class="flex items-center justify-end md:justify-center pb-4 pt-6 text-right sm:items-stretch sm:hidden">
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
</x-app-layout>
