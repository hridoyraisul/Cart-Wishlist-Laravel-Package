# Cart & Wishlist Package for Laravel App

This package provides basic "add to cart" and "add to wishlist" functionalities for building e-commerce project with Laravel framework

---------------------------------------------------

## Installations

#### Step-1: Run Command Below
```
composer require hridoyraisul/cartwishlistlaravel
```

#### Step-2: Add the line below to providers array in config/app.php file
``` 
RaisulHridoy\CartWishList\CartWishlistServiceProvider::class,
```

#### Step-3: Optimize Laravel App
```
php artisan optimize
```
#### Step-4: Run Migration Command:
```
php artisan migrate
```

Done !!! Let's have some fun now 😉

---------------------------------------------------

## Usage

#### Firstly, add the line below to your controller
```
use RaisulHridoy\CartWishList\Http\Interfaces\CartWishlistInterface;
```

#### Secondly, declare interface in controller through constructor function
```
protected $cartWishlist;
public function __construct(CartWishlistInterface $cartWishlistInterface)
{
    $this->cartWishlist = $cartWishlistInterface;
}
```

#### Trirdly, call interfaces predefined method in controller with require parameter
```
public function example()
{
    $user_id = 1; //as example
    $this->cartWishlist->getUserCart($user_id);
}
```

---------------------------------------------------

## Methods Overview
#### 1. storeItemToCart($item)  
Here the parameter "$item" is an array which includes attributes like below,
```
$item = [
     'product_id' => 1,  
     'user_id'    => 2,
     'quantity'   => 3,
     'unit_price' => 200,    //Nullable Field
     'total_price'=> 600    //Nullable Field
];
```


#### 2. updateItemToCart($cart_id, $item)  
Here the 1st parameter "$cart_id" is an integer value of specific cart's id to update and the 2nd parameter "$item" is an array which includes attributes like below,
```
$item = [
     'quantity'   => 3,
     'unit_price' => 200,    //Nullable Field
     'total_price'=> 600    //Nullable Field
];
```
#### 3. getCart($cart_id)  
Here parameter "$cart_id" is an integer value of specific cart's id to retrieve.

#### 4. getUserCart($user_id)  
This function require user's id as parameter and retrieve all cart items for specific user.

#### 5. getAllCartItems()  
This function retrieve all cart items on the project.

#### 6. deleteCart($cart_id)  
This function will delete specific cart item for a user. It requires cart's id as parameter.

#### 7. clearUserCart($user_id)  
This function will delete all cart items for a user. It requires user's id as parameter.

#### 8. storeItemToWishList($item)  
Here the parameter "$item" is an array which includes attributes like below,
```
$item = [
    'product_id' => 1,
    'user_id'    => 2
];
```
#### 9. getUserWishList($user_id)  
This function require user's id as parameter and retrieve all wishlist items for specific user.

#### 10. deleteItemFromWishlist($wishlist_id)  
This function will delete specific wishlist item for a user. It requires wishlist's id as parameter.

#### 11. clearUserWishlist($user_id)  
This function will delete all wishlist items for a user. It requires user's id as parameter.


---------------------------------------------------
---------------------------------------------------

## Published by -
### Raisul Hridoy
###### Website: www.raisulhridoy.rf.gd
###### Email: raisulhridoy@hotmail.com
###### Phone: (+880)-1686-851584

