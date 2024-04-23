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

Route::get('/about', function() {
    return 10*5;
});

Route::get('/contact', function(){
    return view('contact',['name' => 'hanif', 'phone' => '03893803']);
});

// Route::view('/contact', 'contact', ['name' => 'hanif daffa', 'phone' => '08287387837...']);

// route redirect
Route::redirect('/contact', '/contact-us');

// route parameter
Route::get('/product/', function() {
    return 'product';
});

Route::get('/product/{id}', function ($id){
   return view('product.detail', ['id' => $id]);
});

// Route Prefix 
Route::prefix('administrator')->group(function (){
    Route::get('/profile-admin', function(){
        return 'profil-admin';
    });
    
    Route::get('/about-admin', function(){
        return 'about-admin';
    });
    
    Route::get('/contact-admin', function(){
        return 'contact-admin';
    }); 
});

