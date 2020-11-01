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
    return view('pages.contactUs');
});

Route::get('/contact_us', function () {
    $name='ali';
    return view('pages.contactUs', compact('name'));
});

Route::post('/send', function (\Illuminate\Http\Request $request) {
    $name= $request->name;
    return view('pages.contactUs', compact('name'));
})->name('send');