<?php

namespace App\Http\Livewire;

use App\Models\Lab;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\NumberColumn;
use Mediconesystems\LivewireDatatables\DateColumn;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

class LabsTable extends LivewireDatatable
{
  public $model = Lab::class;
  public $place;

  public $confirmingItemDeletion = false;
  public $confirmingItemAdd = false;

  protected $rules = [
    'lab.item_name' => 'required|string|min:4',
    'lab.item_desc' => 'required|numeric|between:1,100'
  ];

  public function builder()
  {
    return Lab::query()->where('place_id', '=', $this->place->id);
  }
  function columns()
  {
    return [
      NumberColumn::name('id')
        ->label('ID')
        ->sortBy('id'),
      Column::name('item_name')
        ->label('Item Name')
        ->searchable(),
      Column::name('item_desc')
        ->label('Description')
        ->hide(),
      NumberColumn::name('item_quantity')
        ->label('Quantity'),
      NumberColumn::name('item_error')
        ->label('Item Error'),
      NumberColumn::name('item_value')
        ->label('Value')
        ->hide(),
      NumberColumn::name('item_total')
        ->label('Total')
        ->hide(),
      DateColumn::name('created_at')
        ->label('Creation Date')
        ->searchable()
        ->hide(),
      DateColumn::name('updated_at')
        ->label('Update')
        ->searchable(),
      NumberColumn::name('unit.unit_name')
        ->label('Unit')
        ->hide(),
      NumberColumn::name('place.place_name')
        ->label('Place')
        ->hide(),
      Column::callback(['id', 'item_name'], function ($id, $item_name) {
        return view('livewire.table-actions', ['id' => $id, 'item_name' => $item_name]);
      })->hide()
    ];
  }
}
