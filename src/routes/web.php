<?php

use Illuminate\Support\Facades\Route;

use splittlogic\past\Http\Controllers\pastController;
use splittlogic\past\Http\Controllers\pastadminController;

/*
|--------------------------------------------------------------------------
| Routes must be passed through the web middleware to allow for
|   validation errors and flash messages to be displayed.
|--------------------------------------------------------------------------
*/

Route::get(
  'splittlogic/past',
  [pastController::class, 'index']
)->name('splittlogic.past');

Route::group(['middleware' => ['web', 'auth', 'user-access:1']], function(){

  Route::get(
    '/admin',
    [pastadminController::class, 'index']
  )->name('admin')
  ->middleware('auth');

});

Route::group(['middleware' => ['web', 'auth', 'user-access:2']], function(){

  Route::get(
    '/manager',
    function () {
      view('past::blank', ['content' => 'This is manager']);
  });

});

Route::group(['middleware' => ['web', 'auth', 'user-access:0']], function(){

  Route::get(
    '/user',
    function () {
      view('past::blank', ['content' => 'This is user']);
  });

});
