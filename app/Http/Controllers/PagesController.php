<?php

namespace App\Http\Controllers;

use App\Example;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Request;

class PagesController extends Controller
{

    /*public function home(Example $example)
    {

        ddd($example);

    }*/

    public function home()
    {

        /*ddd(resolve('App\Example'), resolve('App\Example'));*/

        /*return View::make('welcome');*/

        /*return request('name');*/

        /*return Request::input('name');*/

        /*return File::get(public_path('index.php'));*/

        Cache::remember('foo', 60, fn() => 'foobar');

        return Cache::get('foo');

    }

}
