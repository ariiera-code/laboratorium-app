@props(['submit'])

<div {{ $attributes->merge(['class' => 'md:block grid grid-cols-3 gap-6']) }}>
  <x-jet-section-title>
    <x-slot name="title">{{ $title }}</x-slot>
    <x-slot name="description">{{ $description }}</x-slot>
  </x-jet-section-title>

  <div class="md:mt-5 mt-0 col-span-2">
    <form wire:submit.prevent="{{ $submit }}">
      <div
        class="sm:px-6 sm:py-5 bg-white p-6 shadow {{ isset($actions) ? 'sm:rounded-tl-md sm:rounded-tr-md' : 'sm:rounded-md' }}">
        <div class="grid grid-cols-6 gap-6">
          {{ $form }}
        </div>
      </div>

      @if (isset($actions))
        <div
          class="flex items-center justify-end sm:px-4 py-3 bg-gray-50 text-right px-6 shadow rounded-bl-md rounded-br-md">
          {{ $actions }}
        </div>
      @endif
    </form>
  </div>
</div>
