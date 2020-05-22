<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/welcome', function () {
    /* return ['foo' => 'bar']; */
});

Route::get('/posts/{post}', function ($post) {

    $posts = [

        'zz' => 'zzz',

        'xx' => 'xxx'

    ];

    if (! array_key_exists($post, $posts)) {

        abort(404, 'sorry, post not exist');

    }

    return view('post', [

       'post' => $posts[$post]

    ]);
});

Route::get('/posts/{post}', 'PostsController@show');

Route::get('/test', function () {

    $name = request('name');
    return view('test', [

        'name' => $name

    ]);
});

Route::get('/about', function () {

    return view('about', [

        'articles' => App\Article::take(3)->latest()->get()

    ]);

});

Route::get('/articles', 'ArticlesController@index')->name('articles.index');;

Route::post('/articles', 'ArticlesController@store');

Route::get('/articles/create', 'ArticlesController@create');

Route::get('/articles/{article}', 'ArticlesController@show')->name('articles.show');

Route::get('/articles/{article}/edit', 'ArticlesController@edit');

Route::put('/articles/{article}', 'ArticlesController@update');

/*Route::get('/', function () {
    $container = new \App\Container();
    $container->bind('example', function () {
        return new \App\Example();
    });

    $example = $container->resolve('example');

    $example->go();

});*/

/* app()->bind('example', function (){

    $foo = config('services.foo');

    return new \App\Example($foo);

});

Route::get('/', function () {

    $example = resolve('example');

    ddd($example);

}); */

/* app()->bind('App\Example', function (){

    $collaborator = new App\Collaborator();

    $foo = 'foobar';

    return new \App\Example($collaborator, $foo);

}); */

/*Route::get('/', function (App\Example $example) {*/

    /* $example = resolve(App\Example::class); */

/*    ddd($example);

});*/

/*Route::get('/', 'PagesController@home');*/

Route::get('/contact', 'ContactController@show');

Route::post('/contact', 'ContactController@store');
