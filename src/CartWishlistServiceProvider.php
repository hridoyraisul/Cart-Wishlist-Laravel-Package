<?php
namespace RaisulHridoy\CartWishList;
use Illuminate\Support\ServiceProvider;
use RaisulHridoy\CartWishList\Http\Interfaces\CartWishlistInterface;
use RaisulHridoy\CartWishList\Http\Repositories\CartWishlistRepository;

class CartWishlistServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');
    }
    public function register()
    {
        $this->app->bind(
            CartWishlistInterface::class,
            CartWishlistRepository::class
        );
    }
}
