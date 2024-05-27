<?php

namespace App\Livewire\Components;

use App\Models\Rent\Category;
use Livewire\Component;
use Livewire\WithPagination;

class Categories extends Component
{
    public $name;
    public $categoryNames;
    public $setPage;

    use WithPagination;


    public function render()
    {

        return view('livewire.components.categories', [
            'categories' => Category::paginate(15),
        ]);
        
    }
}
