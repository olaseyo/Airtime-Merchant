<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->post('/register','CreateControler@Test');

Route::post('/register','UserController@registerUser');

Route::post('/login','UserController@login');

//Route::group(['middleware' => 'auth:api'], function(){
	
Route::post('/makePayment','PaymentController@makePayment');
Route::post('/applyForLoan','LoanController@applyForLoan');
Route::post('/getTransactionHistory','TransactionController@getTransactionHistory');

//});