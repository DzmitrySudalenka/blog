<?php

namespace App\Providers;

use App\Collaborator;
use App\Example;
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
        /*app()->bind('App\Example', function (){*/
        /*$this->app->singleton('App\Example', function (){*/
        $this->app->bind('App\Example', function (){

            $collaborator = new Collaborator();

            $foo = 'foobar';

            return new Example($collaborator, $foo);

        });

        /*$this->app->bind('example', function() {
            return new Example();
        });*/

        $this->app->bind(Example::class, function() {
            return new Example('api-key-here');
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
