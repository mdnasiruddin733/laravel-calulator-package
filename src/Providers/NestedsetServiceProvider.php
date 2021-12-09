<?php
namespace Webpane\Nestedset\Providers;
use Illuminate\Support\ServiceProvider;
use Webpane\Nestedset\Classes\Calculator;

class NestedsetServiceProvider extends ServiceProvider{
    public function boot(){
        $this->loadRoutesFrom(__DIR__."/../../routes/web.php");
        $this->mergeConfigFrom(__DIR__."/../../config/nestedset.php","nestedset");
        $this->publishes([
            __DIR__."/../../config/nestedset.php"=>config_path("package.php"),
            __DIR__."/../Library"=>app_path("Library"),
        ]);
        
        
    }

    public function register(){
        $this->app->bind("calculator",function($app){
            return new Calculator();
        });
    }
}