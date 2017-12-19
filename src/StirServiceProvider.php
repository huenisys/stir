<?php

namespace Stir;

use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\ServiceProvider;
use Faker\Generator as Faker;

class StirServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->setTemplateGlobals();

        $this->setPublishers();

        $this->doLoaders();

    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {

				$loader = \Illuminate\Foundation\AliasLoader::getInstance();
				$loader->alias('Stir', \Stir\Facades\Stir::class);

        $this->mergeConfigs();

        $this->app->singleton('stir', function ($app) {
            return new Stir($app);
        });

        $this->app->router->aliasMiddleware('admin', \Stir\Http\Middleware\IsAdmin::class);
        $this->app->router->aliasMiddleware('guest', \Stir\Http\Middleware\RedirectIfAuthenticated::class);

    }


    public function mergeConfigs()
    {

        $this->mergeConfigFrom(
            __DIR__.'/../config/stir.php', 'stir'
        );

    }

    public function doLoaders()
    {

        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');

        $this->loadViewsFrom(__DIR__.'/../resources/views', 'stir');

        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');

    }

    public function setPublishers()
    {

        $this->publishes([
            __DIR__.'/../database/sqlite' => database_path(),
        ], 'stir-sqlite');

        $this->publishes([
            __DIR__.'/../config' => config_path(),
        ], 'stir-config');

        $this->publishes([
            __DIR__.'/../resources/assets' => resource_path('assets/stir'),
        ], 'stir-assets');

    }

    public function setTemplateGlobals()
    {
        $tpl_globals = Config::get('stir');
        foreach ($tpl_globals as $key => $value) {
            View::share($key, $value);
        }

    }

}
