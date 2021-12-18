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
    $titles= [
        'text' => 'WELCOME TO MY FIRST LARAVEL SITE...',
        'textSmaller' => '....kind of....',
        'url' => 'dreamhouse.jpg'
    ];
    
    $links= [
        'link1' => 'Home',
        'link2' => 'Who I am',
        'link3' => 'My contacts',
        'link4' => 'Wonderland',
        'link5' => 'My pirate ship',
        'link6' => 'Hello word'

    ];
    
    return view('welcome', $titles, $links);
});

Route::get('/who_i_am', function(){

    $img= [
        'url' => 'saymyname.jpg'
    ];
    return view('who_i_am', $img);
});

Route::get('/my_contacts', function(){

    $img= [
        'url' => 'dontcallme.jpg'
    ];
    return view('my_contacts', $img);
});

Route::get('/wonderland', function(){
    $img= [
        'url' => 'wonderland.jpg'
    ];
    return view('wonderland', $img);
});

Route::get('/my_pirate_ship', function(){
    $img= [
        'url' => 'sunny.jpg'
    ];
    return view('my_pirate_ship', $img);
});

Route::get('/hello_world', function(){
    $img= [
        'url' => 'helloworld.jpg'
    ];
    return view('hello_world', $img);
});