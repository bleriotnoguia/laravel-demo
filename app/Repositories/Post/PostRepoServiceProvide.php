<?php

namespace App\Repositories\Post;

use Illuminate\Support\ServiceProvider;

class PostRepoServiceProvide extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {   

    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('App\Repositories\Post\PostInterface', 'App\Repositories\Post\PostRepository');
    }

}