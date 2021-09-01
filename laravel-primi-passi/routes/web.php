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
    return view('home', 
        ['text' => 'Benvenuto']
    );
});

Route::get('/info', function () {
    return view('info', 
        ['text2' => 'Qui puoi trovare le informazioni che ti servono']
    );
});

Route::get('/maps', function () {
    return view('maps', 
        ['src' => 'https://www.itala.it/images/site_blog_art/5/image/zoom_mappa_google_maps.jpg?box=770x1000']
    );
});

Route::get('/contatti', function () {
    return view('contatti', 
        ['text3' => 'Come entrare in contatto con noi:']
    );
});
