<?php

namespace App\Livewire\Forms;

use App\Models\Category;
use Livewire\Form;

class EditCategoryForm extends Form
{
    public Category $category;

    public $name;

    public $display_order;

    protected function rules() 
    {
        return [
            'name' => 'required|string|max:255',
            'display_order' => 'required|numeric|gt:0|lt:4',
        ];
    }

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
    }
}
