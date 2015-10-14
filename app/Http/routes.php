<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/','Front@index');
Route::get('/products','Front@products');
Route::get('/products/details/{id}','Front@product_details');
Route::get('/products/categories','Front@product_categories');
Route::get('/products/brands','Front@product_brands');
Route::get('/blog','Front@blog');
Route::get('/blog/post/{id}','Front@blog_post');
Route::get('/contact-us','Front@contact_us');
Route::get('/login','Front@login');
Route::get('/logout','Front@logout');
Route::get('/cart','Front@cart');
//Route::get('/checkout','Front@checkout');
Route::get('/search/{query}','Front@search');

Route::post('/cart', 'Front@cart');

// Authentication routes...
Route::get('auth/login', 'Front@login');
Route::post('auth/login', 'Front@authenticate');
Route::get('auth/logout', 'Front@logout');

// Registration routes...
Route::post('/register', 'Front@register');

//Protect the checkout url just for logged in users
Route::get('/checkout', [
    'middleware' => 'auth',
    'uses' => 'Front@checkout'
]);

//Route:get('blade', function() { 
//    $drinks = array('Vodka', 'Gin', 'Brandy');
//    return view('page', array('name' => "The Raven", 'day' => 'Friday', 'drinks' => $drinks));    
//});
//
//Route::get('/insert', function() {
//    App\Category::create(array('name' => 'Music'));
//    return 'category added';
//});
//
//Route::get('/read', function() {
//    $category = new App\Category();
//    
//    $data = $category->all(array('name','id'));
//
//    foreach ($data as $list) {
//        echo $list->id . ' ' . $list->name . '<br>';
//    }
//});
//
//Route::get('/update', function() {
//    $category = App\Category::find(1);
//    $category->name = 'HEAVY METAL';
//    $category->save();
//    
//    $data = $category->all(array('name','id'));
//
//    foreach ($data as $list) {
//        echo $list->id . ' ' . $list->name . '<br>';
//    }
//});
//
//Route::get('/delete', function() {
//    $category = App\Category::find(6);
//    $category->delete();
//    
//    $data = $category->all(array('name','id'));
//
//    foreach ($data as $list) {
//        echo $list->id . ' ' . $list->name . '<br>';
//    }
//});
