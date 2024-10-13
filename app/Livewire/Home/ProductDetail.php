<?php

namespace App\Livewire\Home;

use App\Models\Product;
use Livewire\Component;
use Livewire\Attributes\Title;


#[Title('Product Detail - DevelopMan')]
class ProductDetail extends Component
{
    public $slug;
    public function mount($slug) {
        $this->slug = $slug;
    }
    public function render()
    {
        return view('livewire.home.product-detail', [
            'product' => Product::where('slug', $this->slug)->firstOrFail(),
        ]);
    }
}
