<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class DeleteCategoryController extends Controller
{
    public function __invoke(Category $category)
    {
        $category->delete();
        
        return redirect()->route('admin.categories.index')->with('success', 'Category deleted successfully.');
    }
}
