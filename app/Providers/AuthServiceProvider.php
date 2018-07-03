<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{

    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
        \App\Models\User::class => \App\Policies\UserPolicy::class,
        \App\Models\Blog::class => \App\Policies\BlogPolicy::class,
        \App\Models\Reply::class => \App\Policies\ReplyPolicy::class,
    ];

    public function boot()
    {
        $this->registerPolicies();

        \Horizon::auth(function ($request) {
            return \Auth::user()->hasRoles('Founder');
        });
    }
}
