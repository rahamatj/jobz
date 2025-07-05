<?php

namespace App\Livewire\Category;

use Livewire\Attributes\Title;
use Livewire\Component;
use App\Models\Category;
use Livewire\Attributes\Validate;

class CreateCategory extends Component
{
    #[Validate('required | string | max:255')] 
    public $name = "";

    #[Validate('required | numeric | gt:0 | lt:4')]
    public $display_order = 0;

    public function save()
    {
        $this->validate();
  
        Category::create($this->all());
 
        return redirect()->route("admin.categories.index")->with("success","Category created successfully.");
    }

    #[Title('Create Category')]
    public function render()
    {
        return view('livewire.category.create-category')
                ->layout('components.layouts.admin');
    }
}
