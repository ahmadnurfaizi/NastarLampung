<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;
use Cart;
use App\Models\Category;

class ShopComponent extends Component
{
    public $sorting;
    public $pagesize;

    public function mount()
    {
        $this->sorting = "default";
        $this->pagesize = 12;
    }

    public function store($product_id,$product_name, $product_quantity, $product_price)
    {
        //dd($product_id,$product_name,$product_price);
        Cart::add($product_id, $product_name,$product_quantity, $product_price)->associate('App\Models\Product');
        session()->flash('success_message','Item added in Cart');
        return redirect()->route('product.cart');
    }

    use WithPagination;
    public function render()
    {
        if($this->sorting=='date')
        {
            $products = Product::orderBy('created_at','DESC')->paginate($this->pagesize);
        }
        else if($this->sorting=="price")
        {
            $products = Product::orderBy('regular_price','ASC')->paginate($this->pagesize);
        }
        else if($this->sorting=="price-desc")
        {
            $products = Product::orderBy('regular_price','DESC')->paginate($this->pagesize);

        }
        else{
            $products = Product::paginate($this->pagesize);
        }

        $products = Product::paginate(12);
        return view('livewire.shop-component',['products'=> $products])->layout('layouts.base');
    }
}
