<?php

namespace App\Providers;

use App\interfaces\Iarticles;
use App\interfaces\Icomments;
use App\Repositories\Articles;
use App\Repositories\Comments;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(Iarticles::class,Articles::class);
        $this->app->bind(Icomments::class,Comments::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
    }
}
