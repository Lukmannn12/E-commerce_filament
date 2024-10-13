<?php

namespace App\Livewire\Home;

use App\Models\Brand;
use App\Models\Product;
use Livewire\Component;
use App\Models\Category;
use Livewire\Attributes\Url;
use Livewire\WithPagination;
use Livewire\Attributes\Title;

#[Title('Products - DevelopMan')]

class Products extends Component
{
    use WithPagination;
    
    #[Url]
    public $selected_categories = [];
    
    public function render()
    {

        $productQuery = Product::query()->where('is_active', 1);

        if(!empty($this->selected_categories)) {
            $productQuery->whereIn('category_id', $this->selected_categories);
        }

        return view('livewire.home.products', [
            'products' => $productQuery->paginate(6),
            'brand' => Brand::where('is_active', 1)->get(['id', 'name', 'slug']),
            'categories' => Category::where('is_active', 1)->get(['id', 'name', 'slug']),
        ]);
    }
}
