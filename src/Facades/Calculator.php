<?php
namespace Webpane\Nestedset\Facades;
use Illuminate\Support\Facades\Facade;

class Calculator extends Facade{
    protected static function getFacadeAccessor()
    {
        return 'calculator';
    }
}