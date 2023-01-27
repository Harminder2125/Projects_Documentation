<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Validator;
use App\Models\Category;

class Categories extends Component
{
    public function render()
    {   $categories=Category::paginate(2);
        $data=compact('categories');
        return view('livewire.category')->with($data);
    }
}
