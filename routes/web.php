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
    return view('form');
});

Route::get('customers','Customers@getAllCustomers');

Route::get('customer/{id}','Customers@getCustomer');

Route::post('customer2','Customers@addCustomer');



// Route::post('customer',function(){
// 	return  'hi';
// });



