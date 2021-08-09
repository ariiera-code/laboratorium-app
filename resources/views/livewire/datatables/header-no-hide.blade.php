@unless($column['hidden'])
  <div class="relative table-cell h-12 overflow-hidden align-top" @if (isset($column['width'])) style="width:{{ $column['width'] }}" @endif>
    @if ($column['unsortable'])
      <div
        class="w-full h-full px-6 py-3 border-b-4 border-indigo-400 bg-white text-left text-xs leading-4 font-bold text-gray-400 uppercase tracking-wider flex items-center focus:outline-none @if ($column['align']==='right' ) justify-end @elseif($column['align'] === 'center') justify-center @endif">
        <span class="inline ">{{ str_replace('_', ' ', $column['label']) }}</span>
      </div>
    @else
      <button wire:click.prefetch="sort('{{ $index }}')"
        class="w-full h-full px-6 py-3 border-b-4 border-indigo-400 bg-white text-left text-xs leading-4 font-bold text-gray-400 uppercase tracking-wider flex items-center focus:outline-none @if ($column['align']==='right' ) justify-end @elseif($column['align'] === 'center') justify-center @endif">
        <span class="inline ">{{ str_replace('_', ' ', $column['label']) }}</span>
        <span class="inline text-xs text-blue-400">
          @if ($sort === $index)
            @if ($direction)
              <x-icons.chevron-up wire:loading.remove class="h-6 w-6 text-green-600 stroke-current" />
            @else
              <x-icons.chevron-down wire:loading.remove class="h-6 w-6 text-green-600 stroke-current" />
            @endif
          @endif
        </span>
      </button>
    @endif
  </div>
  @endif
