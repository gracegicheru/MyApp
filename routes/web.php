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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', 'IndexController@Display');
// Route::get('/login', 'LoginController@Login');
// Route::get('/register', 'RegisterController@Register');
Route::post('/registerUser', 'RegisterController@RegisterUser');
Route::get('/otp', 'LoginController@GenerateOTP');
Route::post('/loginUser', 'LoginController@LoginUser');
Route::post('/otpSubmit', 'LoginController@VerifyOTP');
Route::get('/products','ProductController@displayProducts');
Route::post('/addProducts', 'ProductController@AddProducts');
Route::get('/id', 'ProductController@generateProductID');
Route::get('/getHome','DashboardController@ViewDashboard');
Route::post('/delete','ProductController@deleteProducts');
Route::post('/editProduct', 'ProductController@editProducts');

Auth::routes();

// Route::get('/gethome', 'HomeController@index')->name('home');
