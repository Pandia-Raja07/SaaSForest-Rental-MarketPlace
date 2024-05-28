<?php

namespace App\Livewire\Components;

use App\Models\Rent\Category;
use Livewire\Component;
use Livewire\WithPagination;

class Categories extends Component
{
    public $categories;

    public function mount()
    {
        $this->categories = Category::all();
    }

    public function render()
    {
        return view('livewire.components.categories');
    }
}
