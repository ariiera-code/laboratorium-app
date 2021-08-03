<x-guest-layout>
  <div class="min-h-screen flex flex-row justify-center items-center bg-gray-100 lg:px-9">
    <div class="max-h-full flex flex-row max-w-4xl bg-white shadow-md overflow-hidden rounded-lg">
      <div class="flex flex-row">
        <div class="lg:hidden">
          <img class="object-cover h-full max-w-xs w-56" src="{{ 'images/authbg.jpg' }}" alt="reader">
        </div>
        <div class="flex flex-col justify-between">

          @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
              {{ session('status') }}
            </div>
          @endif

          <x-jet-validation-errors class="mb-4" />
          <form method="POST" action="{{ route('password.email') }}">
            @csrf
            <div class="p-6">
              <div class="flex justify-between">
                <h1 class="mb-3 text-2xl font-bold xs:text-xl">Reset Password</h1>
                <span class="text-indigo-600"><a href="{{ route('login') }}">Back</a></span>
              </div>
              <p class="text-gray-500 text-sm">Don't worry, Let us know your email and we will
                email
                you a password reset link.</p>

              <div class="pt-2">
                <div
                  class="relative text-gray-400 focus-within:text-indigo-500 hover:text-indigo-500 after:text-indigo-500 transition">
                  <span class="absolute inset-y-0 left-0 flex items-center pl-3 pt-2">
                    <svg class="w-6 h-6 stroke-current" stroke-width="2" xmlns="http://www.w3.org/2000/svg"
                      viewBox="0 0 24 24">
                      <g id="ic-contact-mail" transform="translate(-1.25 -4.25)">
                        <rect id="Rectangle_25" data-name="Rectangle 25" width="20" height="14" rx="2"
                          transform="translate(2 5)" fill="none" stroke-linecap="round" stroke-linejoin="round"
                          stroke-width="1.5" />
                        <path id="Path_81" data-name="Path 81" d="M2.58,5.59l8.23,8.22a2,2,0,0,0,2.83,0l8-8" fill="none"
                          stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" fill-rule="evenodd" />
                      </g>
                    </svg>
                  </span>
                  <input type="email" name="email" id="email"
                    class="block mt-1 w-full pl-11 placeholder-gray-400 border-gray-300 text-gray-800 hover:ring-0 hover:ring-inset hover:ring-indigo-200 focus:text-gray-800 focus:ring-0 focus:ring-inset focus:ring-indigo-400 rounded-md shadow-sm transition"
                    placeholder="kevin@example.com" autocomplete="on" :value="old('email')" required autofocus>
                </div>
              </div>
            </div>
            <div class="bg-gray-100 lg:justify-center block p-6">
              <button type="submit"
                class="w-full px-4 py-2 bg-indigo-500 border border-transparent rounded-md font-bold text-base text-white text-center tracking-widest hover:bg-indigo-700 active:bg-indigo-900 focus:outline-none focus:border-indigo-900 focus:ring focus:ring-indigo-300 disabled:opacity-25 transition">
                Send Reset Link
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</x-guest-layout>
