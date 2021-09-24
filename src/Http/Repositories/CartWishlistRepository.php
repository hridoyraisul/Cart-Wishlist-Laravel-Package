<?php

namespace RaisulHridoy\CartWishList\Http\Repositories;

use RaisulHridoy\CartWishList\Http\Interfaces\CartWishlistInterface;
use RaisulHridoy\CartWishList\Models\Cart;
use RaisulHridoy\CartWishList\Models\Wishlist;

class CartWishlistRepository implements CartWishlistInterface
{

    public function storeItemToCart(array $item)
    {
        return Cart::create([
            'product_id' => $item['product_id'],
            'user_id'    => $item['user_id'],
            'quantity'   => $item['quantity'],
            'unit_price' => $item['unit_price'],
            'total_price'=> $item['total_price']
        ]);
    }

    public function updateItemToCart($cart_id, array $item)
    {
        return Cart::where('id',$cart_id)->update([
            'quantity'   => $item['quantity'],
            'unit_price' => $item['unit_price'],
            'total_price'=> $item['total_price']
        ]);
    }

    public function getCart($cart_id)
    {
        return Cart::where('id',$cart_id)->first();
    }

    public function getUserCart($user_id)
    {
        return Cart::where('user_id',$user_id)->get();
    }

    public function getAllCartItems()
    {
        return Cart::all();
    }

    public function deleteCart($cart_id)
    {
        return Cart::where('id', $cart_id)->delete();
    }

    public function clearUserCart($user_id)
    {
        $carts = Cart::where('user_id', $user_id)->get();
        foreach ($carts as $cart)
        {
            $cart->delete();
        }
        return true;
    }

    public function clearUserWishlist($user_id)
    {
        $wishlists = Wishlist::where('user_id', $user_id)->get();
        foreach ($wishlists as $wishlist)
        {
            $wishlist->delete();
        }
        return true;
    }

    public function storeItemToWishList(array $item)
    {
        return Wishlist::create([
            'product_id' => $item['product_id'],
            'user_id'    => $item['user_id']
        ]);
    }

    public function getUserWishList($user_id)
    {
        return Wishlist::where('user_id', $user_id)->get();
    }

    public function deleteItemFromWishlist($wishlist_id)
    {
        return Wishlist::where('id', $wishlist_id)->delete();
    }
}
