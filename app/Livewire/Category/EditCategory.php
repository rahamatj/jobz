<?php

namespace App\Livewire\Category;

use App\Models\Category;
use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\Attributes\Validate;

class EditCategory extends Component
{
    public Category $category;

    #[Validate('required | string | max:255')]
    public $name;

    #[Validate('required | numeric | gt:0 | lt:4')]
    public $display_order;

    public function mount(Category $category)
    {
        $this->category = $category;
        $this->name = $category->name;
        $this->display_order = $category->display_order;
    }

    public function update()
    {
        $this->validate();

        $this->category->update($this->all());

        return redirect()->route("admin.categories.index")->with("success","Category updated successfully.");
    }

    #[Title('Edit Category')]
    public function render()
    {
        return view('livewire.category.edit-category')
                ->layout('components.layouts.admin');
    }
}
