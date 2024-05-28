<?php

namespace App\Livewire\Components;

use App\Models\Rent\Category;
use Livewire\Component;
use Livewire\WithPagination;

class Categories extends Component
{
    public $categoryNames;
    
    public function mount()
    {
        $this->categoryNames = Category::all();
    }

    public function render()
    {
        return view('livewire.components.categories');
    }
}
