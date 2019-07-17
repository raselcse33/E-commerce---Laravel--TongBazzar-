<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Session;
use Cart;

class CartController extends Controller
{
    public function addCart($id)
    {
    	$product = Product::find($id);
    	$data['id'] = $product->id;
    	$data['qty'] = 1;
    	$data['name'] = $product->productName;
    	$data['price'] = $product->productPrice;
    	$data['weight'] = 500;
    	$data['options']['image'] = $product->productImage;

    	Cart::add($data);
    	 Session::flash('success', 'Cart Add Successfully');
    	return redirect()->route('cart');

    }

    public function increment($id,$qty)
    {
        Cart::update($id,$qty+1);
        return redirect()->back();
    }

    public function decrement($id,$qty)
    {
        Cart::update($id,$qty-1);
        return redirect()->back();
    }

    public function deleteCart($id){

         Cart::remove($id);
         Session::flash('success', 'Cart remove Successfully');
         return redirect()->back();
    }
}
