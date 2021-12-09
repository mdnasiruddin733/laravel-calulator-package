<?php

namespace Webpane\Nestedset\Http\Controllers;
use App\Http\Controllers\Controller;
class NestedsetController extends Controller
{
    public function index(){
        return config("nestedset.name");
    }
}
