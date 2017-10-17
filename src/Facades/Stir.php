<?php

namespace Stir\Facades;

use Illuminate\Support\Facades\Facade;

class Stir extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'stir';
    }

    /**
     * Register the typical authentication routes for an application.
     *
     * @return void
     */
    public static function authRoutes()
    {
        static::$app->make('stir')->registerAuthRoutes();
    }
}
