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
Route::get('/contact', 'Employee@show');
Route::get('/', function () {
    return view('welcome');
});
Route::get('/About/{name}/{id?}', function ($name, $id = null) {
    return view('About', ['name' => $name, 'id' => $id]);
});
Route::get('/contact', function () {
    return view('Contact');
});
Route::get('/Something/{name?}', function ($name = null) {
    $demo = '<h3>Hello demo</h3>';

    $data = compact('name', 'demo');
    return view('Some')->with($data);
});
