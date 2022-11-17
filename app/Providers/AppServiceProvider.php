<?php

namespace App\Providers;

use App\Bll\Lang;
use App\Bll\Utility;
use Inertia\Inertia;
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
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Inertia::share([
            'locale' => function () {
                return app()->getLocale();
            },
            'language' => function () {
                return Lang::translations(
                    base_path('lang/' . app()->getLocale() . '.json')
                );
            },
            'languages' => function () {
                return Lang::getAll();
            },
            'adminLang' => function () {
                return Lang::getAdminLang();
            },
            'lang' => function () {
                return Lang::getLang();
            },
            'setting' => function () {
                return Utility::getDefaultSettings();
            },
            'name' => 'Mustafa'
        ]);
    }
}
