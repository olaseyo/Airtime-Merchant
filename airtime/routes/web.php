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
    return view('index');
});

Route::get('/flag/{id}','CreateController@flagCard')->middleware('auth');
Route::get('/dashboard','CreateController@customerDashboard')->middleware('auth');
Route::get('/mdashboard','CreateController@merchantDashboard')->middleware('auth');
Route::get('/list_airtime','CreateController@listAirtime')->middleware('auth');
Route::get('/airtime','CreateController@getCustomersPurchase')->middleware('auth');
Route::get('/edit_card/{id}','CreateController@getAirtime')->middleware('auth');
Route::get('/airtime','CreateController@getCustomersPurchase')->middleware('auth');

Route::get('/cprofile', function () {
    return view('profile');
})->middleware('auth');

Route::get('/mprofile', function () {
    return view('mprofile');
})->middleware('auth');

Route::get('/create_airtime', function () {
    return view('create_cards');
})->middleware('auth');


Route::get('/register', function () {
    return view('signup');
});

//Auth::routes();

Route::post('/update','CreateController@editAirtime')->middleware('auth');
Route::post('/add_airtime','CreateController@addAirtime')->middleware('auth');
Route::post('/recharge','CreateController@recharge')->middleware('auth');
Route::post('/user_signup','CreateController@register');
Route::post('/user_login','CreateController@authenticate');
Route::post('/logout','LogOutController@LogOut');

Route::get('/home', 'HomeController@index')->name('home');
