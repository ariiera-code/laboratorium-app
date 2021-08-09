<?php

namespace App\Http\Livewire;

use App\Models\Item;
use Livewire\Component;

class CreateItemForm extends Component
{
    public $currentPage = 1;
    public $success;

    // Form properties
    public $item_name;
    public $item_desc;
    public $item_quantity;
    public $item_value;

    public $pages = [
        1 => [
            'heading' => 'Personal Information',
            'subheading' => 'Enter your name and email to get started.',
        ],
        2 => [
            'heading' => 'Password',
            'subheading' => 'Create a password for the new account.',
        ],
    ];

    private $validationRules = [
        1 => [
            'item_name' => [''],
        ],
        2 => [
            'item_quantity' => [''],
        ],
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName, $this->validationRules[$this->currentPage]);
    }

    public function goToNextPage()
    {
        $this->validate($this->validationRules[$this->currentPage]);
        $this->currentPage++;
    }

    public function goToPreviousPage()
    {
        $this->currentPage--;
    }

    public function resetSuccess()
    {
        $this->reset('success');
    }

    public function submit()
    {
        $rules = collect($this->validationRules)->collapse()->toArray();

        $this->validate($rules);

        Item::create([
            'item_name' => $this->item_name,
            'item_desc' => $this->item_desc,
            'item_quantity' => $this->item_quantity,
            'item_value' => $this->item_value,
        ]);

        $this->reset();
        $this->resetValidation();

        $this->success = 'Item created successfully!';
    }

    public function render()
    {
        return view('livewire.items.create');
    }
}
