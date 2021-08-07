<?php

namespace App\Http\Livewire;

use App\Models\Lab;
use Livewire\Component;
use Livewire\WithPagination;

class LabsTable extends Component
{
  use WithPagination;

  public $perPage = 10;
  public $search = '';
  public $orderBy = 'id';
  public $orderAsc = true;

  public function render()
  {
    return view('livewire.labs-table', [
      'labs' => Lab::search($this->search)
        ->orderBy($this->orderBy, $this->orderAsc ? 'asc' : 'desc')
        ->simplePaginate($this->perPage),
    ]);
  }
}
