<?php
namespace Ramayan\Laracontactform;

use Illuminate\Support\ServiceProvider;


class LaraContactFormServiceProvider extends ServiceProvider {


    public function boot()
    {
        // ramayan\LaraContactForm\src\ContactFormServiceProvider.php
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');

        $this->loadViewsFrom(__DIR__.'/resources/views', 'Laracontactform');

        $this->loadMigrationsFrom(__DIR__.'/Database/migrations');
    }


    public function register()
    {
    }
}