<?php

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

// authentication routes and User
Auth::routes();
Route::resource('user','UserController');
Route::get('/profile', 'UserController@profile');

// Pages
Route::resource('/login_home','HomeController');
// Route::get('/demo','PageController@demo');

Route::match(['get', 'post'], "/demo", 'PageController@demo');
Route::post('/get_restaurants', 'PageController@get_restaurants');
Route::get('/contact', 'PageController@contact');
Route::get('/faq', 'PageController@faq');




// Payment Routes
Route::post('/payment', 'PaymentController@payment');
Route::post('/payment_received', 'PaymentController@payment_received')->name('payment_received');




// example Route for all restful routes in TestingController
// Route::resource('/testing','TestingController');

//Route for show id ---
//Route::get('/photo/{photo}', 'PhotoController@show');

// grouping routes:

// Route::group(['prefix' => 'admin'], function () {
//     Voyager::routes();
// });
