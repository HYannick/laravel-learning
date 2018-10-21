<?php

namespace App\Providers;

use App\Billing\Stripe;
use App\Post;
use App\Tag;
use Illuminate\Support\ServiceProvider;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('layouts.sidebar', function ($view) {
            $view->with('archives', Post::archives());
            $view->with('tags', Tag::has('posts')->pluck('name'));
        });

        view()->composer('posts.index', function ($view) {
            $data = [
                'page_title' => 'Here is the list',
                'created_at' => '',
                'author' => ''
            ];
            $view->with('data', $data);
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(Stripe::class, function () {
            return new Stripe(config('services.stripe.secret'));
        });
    }
}
