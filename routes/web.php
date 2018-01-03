<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


$this->group(['middleware' => ['auth']], function(){
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/balance', 'BalanceController@index')->name('balance');
    Route::post('/balance/deposit', 'BalanceController@depositStore')->name('deposit.store');
    Route::get('/balance/deposit', 'BalanceController@deposit')->name('balance.deposit');

});

