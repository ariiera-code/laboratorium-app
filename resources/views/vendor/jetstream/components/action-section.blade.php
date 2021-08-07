<div class="md:block grid grid-cols-3 gap-6" {{ $attributes }}>
  <x-jet-section-title>
    <x-slot name="title">{{ $title }}</x-slot>
    <x-slot name="description">{{ $description }}</x-slot>
  </x-jet-section-title>

  <div class="md:mt-5 mt-0 col-span-2">
    <div class="sm:px-4 sm:py-5 p-6 bg-white shadow rounded-lg">
      {{ $content }}
    </div>
  </div>
</div>
