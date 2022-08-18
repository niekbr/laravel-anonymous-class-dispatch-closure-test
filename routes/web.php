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
    $class = new class{
        function tryDispatch(): void
        {
            dispatch(function () {
                \Illuminate\Support\Facades\Log::info('Closure dispatch in anonymous class works');
            });
        }
    };

    $class->tryDispatch();

    dispatch(function () {
        \Illuminate\Support\Facades\Log::info('Closure dispatch works');
    });
});
