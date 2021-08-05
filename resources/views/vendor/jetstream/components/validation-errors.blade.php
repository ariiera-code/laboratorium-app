@if ($errors->any())
  <div {{ $attributes }}>
    <div class="bg-red-100 rounded-md p-3">
      <div class="font-bold text-sm text-red-600">{{ __('Whoops! Something went wrong.') }}</div>

      <ul class="mt-3 list-disc list-inside font-semibold text-xs text-red-600">
        @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
  </div>
@endif
