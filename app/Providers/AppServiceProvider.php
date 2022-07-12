<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\CourseCategory;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer(
            'layouts.web',
            function ($view) {
                $view->with('categories1', CourseCategory::orderBy('id', 'desc')->offset(0)->limit(8)->get());
            }
        );

        view()->composer(
            'layouts.web',
            function ($view) {
                $view->with('categories2', CourseCategory::orderBy('id', 'desc')->offset(8)->limit(16)->get());
            }
        );
    }
}
