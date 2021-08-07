<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Lab;
use Illuminate\Support\Str;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\NumberColumn;
use Mediconesystems\LivewireDatatables\DateColumn;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

class LabTable extends LivewireDatatable
{
    public $model = Lab::class;

    function columns()
    {
        return [
            NumberColumn::name('id')->label('ID')->sortBy('id'),
            Column::name('item_name')->label('Item Name'),
            Column::name('item_desc')->label('Description'),
            NumberColumn::name('item_quantity')->label('Quantity'),
            DateColumn::name('created_at')->label('Creation Date')
        ];
    }
}
