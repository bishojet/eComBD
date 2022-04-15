<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Cart;

class CartComponent extends Component
{


    public function IncraeseQunatity($rowId)
    {
        $product = Cart::get($rowId);
        $qty = $product->qty+1;
        Cart::update($rowId, $qty);
        return redirect()->to('/cart');
    }

    public function DecreaseQunatity($rowId)
    {
        $product = Cart::get($rowId);
        $qty = $product->qty-1;
        Cart::update($rowId, $qty);
        return redirect()->to('/cart');
    }

    public function destroy($rowId)
    {
        Cart::remove($rowId);
        session()->flash('success', 'Product has been removed from cart');
        return redirect()->to('/cart');
    }

    public function destroyAll()
    {
        Cart::destroy();
        session()->flash('success', 'All products has been removed from cart');
        return redirect()->to('/cart');
    }


    public function render()
    {
        return view('livewire.cart-component')->layout('layouts.base');
    }
}
