<?php

namespace App\Http\Livewire\Admin\Category;

use Livewire\WithPagination;
use App\Models\Category;
use Livewire\Component;

class Index extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        $categories = Category::orderBy('id', 'DESC')->paginate(1);
        return view('livewire.admin.category.index', ['categories' => $categories]);
    }
}
