<?php
namespace RaisulHridoy\CartWishList\Http\Interfaces;

interface CartWishlistInterface
{
    public function storeItemToCart(array $item);
    public function updateItemToCart($cart_id,array $item);
    public function getCart($cart_id);
    public function getUserCart($user_id);
    public function getAllCartItems();
    public function deleteCart($cart_id);
    public function clearUserCart($user_id);
    public function clearUserWishlist($user_id);
    public function storeItemToWishList(array $item);
    public function getUserWishList($user_id);
    public function deleteItemFromWishlist($wishlist_id);
}
