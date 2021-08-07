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
        ->searchable(),
      NumberColumn::name('item_quantity')
        ->label('Quantity'),
      DateColumn::name('created_at')
        ->label('Creation Date')
        ->searchable(),
      Column::callback(['id', 'item_name'], function ($id, $item_name) {
        return view('livewire.table-actions', ['id' => $id, 'item_name' => $item_name]);
      })
    ];
  }
}
