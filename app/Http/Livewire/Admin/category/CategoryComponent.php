<?php

namespace App\Http\Livewire\Admin\Category;

use Livewire\Component;
use App\Models\Category;
use Livewire\WithPagination;

class CategoryComponent extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        $categories = Category::paginate(5);
        return view('livewire.admin.category.category-component',['categories'=>$categories])->layout('layouts.admin.base');
}

}
