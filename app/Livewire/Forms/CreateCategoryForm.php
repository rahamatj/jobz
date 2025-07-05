<?php

namespace App\Livewire\Forms;

use App\Models\Category;
use Livewire\Attributes\Validate;
use Livewire\Form;

class CreateCategoryForm extends Form
{
    public $name = "";
    public $display_order = 0;

    protected function rules() 
    {
        return [
            'name' => 'required|string|max:255',
            'display_order' => 'required|numeric|gt:0|lt:4',
        ];
    }

    public function save() 
    {
        $this->validate();
 
        Category::create($this->all());
    }
}
