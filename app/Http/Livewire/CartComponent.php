<?php

namespace App\Http\Livewire;

use App\Models\Coupon;
use Carbon\Carbon;
use Livewire\Component;
use Cart;
use Iluminate\Support\Facades\Auth;

class CartComponent extends Component
{









    public function increaseQuantity($rowId)
    {
        $product = Cart::get($rowId);
        $qty = $product->qty + 1;
        Cart::update($rowId,$qty);
    }

    public function decreaseQuantity($rowId)
    {
        $product = Cart::get($rowId);
        $qty = $product->qty - 1;
        Cart::update($rowId,$qty);
    }

    public function destroy($rowId)
    {
        Cart::remove($rowId);
        session()->flash('success_message','item has been removed');
    }

    public function destroyAll()
    {
        Cart::destroy();
        session()->flash('success_message','item has been removed');
    }

    // public function switchToSaveForLater($rowId)
    // {
    //     $item = Cart::instance('saveForLater')->get($rowId);
    //     Cart::instance('cart')->remove($rowId);
    //     Cart::instance('saveForLater')->add($item->id,$item->name,1,$item->price)->associate;
    //     $this->emitTo('cart-count-component','refreshComponent');
    //     session()->flash('success_message','item has been saved to later');
    // }

    // public function moveToCart($rowId)
    // {
    //     $item = Cart::instance('saveForLater')->get($rowId);
    //     Cart::instance('saveForLater')->remove($rowId);
    //     Cart::instance('cart')->add($item->id,$item->name,1,$item->price)->associate;
    //     $this->emitTo('cart-count-component','refreshComponent');
    //     session()->flash('s_success_message','item has been added to cart');
    // }



    public function checkout()
    {
        return redirect()->route('/checkout');

        // if(Auth::check())
        // {
        //    return redirect()->route('/checkout');
        // }
        // else
        // {
        //    return redirect()->route('login');
        // }

    }

    // public function setAmountForCheckout()
    // {
    //     if(session()->has('coupon'))
    //     {
    //         session()->put('checkout',[
    //             'discount' => $this->discount,
    //             'subtotal' => $this->subtotalAfterDiscount,
    //             'tax' => $this->taxAfterDiscount,
    //             'total' => $this->totalAfterDiscount
    //         ]);
    //     }
    //     else
    //     {
    //         session()->put('checkout',[
    //             'discount' => 0,
    //             'subtotal' => Cart::instance('cart')->subtotal(),
    //             'tax' => Cart::instance('cart')->tax(),
    //             'total' => Cart::instance('cart')->total()
    //         ]);
    //     }
    // }

    public function render()
    {
        // if(session()->has('coupon'))
        // {
        //     if(Cart::instance('cart')->subtotal() < session()->get('coupon')['cart-value'])
        //     {
        //         session()->forget('coupon');
        //     }
        //     else
        //     {
        //         $this->calculateDiscount();
        //     }
        // }
        // $this->setAmountForCheckout();
        return view('livewire.cart-component')->layout('layouts.base');
    }
}
