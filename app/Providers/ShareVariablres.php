<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ShareVariablres extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        // Using Closure based composers...
        view()->composer('partials.article_form', function ($view) {
            $view->with('list', \App\Tag::lists('name', 'id'));
        });
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
