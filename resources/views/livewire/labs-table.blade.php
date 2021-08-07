<div>
  <div class="w-full flex pb-8">
    {{-- search input --}}
    <div class="w-3/6 mx-1">
      <input wire:model.debounce.300ms="search" type="text"
        class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
        placeholder="Search items...">
    </div>
    {{-- order by --}}
    <div class="w-1/6 relative mx-1">
      <select wire:model="orderBy"
        class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
        id="grid-state">
        <option value="id">ID</option>
        <option value="item_name">Item Name</option>
        <option value="item_desc">Description</option>
        <option value="created_at">Date Added</option>
      </select>
    </div>
    {{-- sort --}}
    <div class="w-1/6 relative mx-1">
      <select wire:model="orderAsc"
        class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
        id="grid-state">
        <option value="1">Ascending</option>
        <option value="0">Descending</option>
      </select>
    </div>
    {{-- perPage --}}
    <div class="w-1/6 relative mx-1">
      <select wire:model="perPage"
        class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
        id="grid-state">
        <option>10</option>
        <option>25</option>
        <option>50</option>
        <option>100</option>
      </select>
    </div>
  </div>
  <table class="table-auto w-full mb-6">
    <thead>
      <tr>
        <th class="px-4 py-2">ID</th>
        <th class="px-4 py-2">Item Name</th>
        <th class="px-4 py-2">Description</th>
        <th class="px-4 py-2">Added at</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($labs as $lab)
        <tr>
          <td class="border px-4 py-2">{{ $lab->id }}</td>
          <td class="border px-4 py-2">{{ $lab->item_name }}</td>
          <td class="border px-4 py-2">{{ $lab->item_desc }}</td>
          <td class="border px-4 py-2">{{ $lab->created_at }}</td>
        </tr>
      @endforeach
    </tbody>
  </table>
  {!! $labs->links() !!}
</div>
