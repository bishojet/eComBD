<?php

namespace App\Http\Livewire\Admin\Category;

use Livewire\Component;
use App\Models\Category;
use Illuminate\Support\Str;

class AddCategoryComponent extends Component
{
    public $name;
    public $slug;

    public function genarateslug()
    {
        $this->slug = Str::slug($this->name);
    }

    public function storeCategory()
    {
        $category = new Category;
        $category->name = $this->name;
        $category->slug = $this->slug;
        $category->save();
        redirect()->route('admin.addCategory')->with('message', 'Category Added Successfully');
    }

    public function render()
    {

        return view('livewire.admin.category.add-category-component')->layout('layouts.admin.base');
    }
}
