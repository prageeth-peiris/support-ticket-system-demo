<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('pages.guest');
});


Route::get('/new-ticket', function () {
    return view('pages.new-ticket');
})->name('new-ticket');

Route::get('/ticket-status', function () {
    return view('pages.ticket-status');
})->name('ticket-status');
