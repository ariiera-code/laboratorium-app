<x-guest-layout>
  <x-jet-authentication-card>

    <div class="flex-grow w-3/5 object-cover">
      <img class="w-full" src="{{ 'images/authbg.jpg' }}">
    </div>
    <div class="flex items-center px-6 py-auto w-2/5">
      <x-jet-validation-errors class="mb-4" />

      @if (session('status'))
        <div class="mb-4 font-medium text-sm text-green-600">
          {{ session('status') }}
        </div>
      @endif

      <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="mb-6 text-center">
          <p class="text-2xl font-bold mb-3">Welcome to <span class="text-indigo-600"><a href="/">Laboratory!</a></span>
          </p>
          <p class="px-2 max-w-full text-base mx-auto">Please Log in to your account and start exploring the tools in
            the
            laboratory</p>
        </div>

        <div>
          <x-jet-label for="email" value="{{ __('Email/Username') }}" />
          <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" placeholder="kevin@example.com"
            :value="old('email')" required autofocus />
        </div>

        <div class="mt-4">
          <div class="flex justify-between">
            <x-jet-label for="password" value="{{ __('Password') }}" />
            @if (Route::has('password.request'))
              <a class="underline text-xs text-indigo-600 hover:text-indigo-900"
                href="{{ route('password.request') }}">
                {{ __('Forgot your password?') }}
              </a>
            @endif
          </div>
          <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" placeholder="Password"
            required autocomplete="current-password" />
        </div>

        <div class="block mt-4">
          <label for="remember_me" class="flex items-center">
            <x-jet-checkbox id="remember_me" name="remember" />
            <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
          </label>
        </div>

        <div class="flex mt-4 mb-6">
          <x-jet-button class="text-center content-center items-center self-center flex-1 pt-4 pb-4 text-bold">
            Log in
          </x-jet-button>
        </div>

        <div class="mt-4 mb-4 text-center">
          <p class="max-w-4xl text-sm mx-auto">Don't have
            an account? <a href="{{ route('register') }}" class="text-indigo-600">Register now.</a></p>
        </div>

      </form>
    </div>

  </x-jet-authentication-card>
</x-guest-layout>
