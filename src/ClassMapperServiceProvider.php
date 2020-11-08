<?php

namespace DesaBL\ClassMapper;

use Illuminate\Support\ServiceProvider;

class ClassMapperServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/views', 'ClassMapper');
        $this->loadRoutesFrom(__DIR__.'/routes.php');
    }

    public function register()
    {
        $this->app->singleton(ClassMapper::class, function (){
            return new ClassMapper();
        });
    }
}