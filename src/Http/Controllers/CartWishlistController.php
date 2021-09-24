<?php

namespace RaisulHridoy\CartWishList\Http\Controllers;

use App\Http\Controllers\Controller;
use RaisulHridoy\CartWishList\Http\Interfaces\CartWishlistInterface;

class CartWishlistController extends Controller
{
    protected $cartWishlistRepo;
    public function __construct(CartWishlistInterface $cartWishlistInterface)
    {
        $this->cartWishlistRepo = $cartWishlistInterface;
    }

}
