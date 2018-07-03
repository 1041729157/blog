<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function boot()
    {
        \Carbon\Carbon::setLocale('zh');
        \App\Models\Blog::observe(\App\Observers\BlogObserver::class);
        \App\Models\Reply::observe(\App\Observers\ReplyObserver::class);
        \App\Models\User::observe(\App\Observers\UserObserver::class);
        \App\Models\Contact::observe(\App\Observers\ContactObserver::class);
    }

    public function register()
    {
        if (app()->isLocal()) {
            $this->app->register(\VIACreative\SudoSu\ServiceProvider::class);
        }
    }
}
