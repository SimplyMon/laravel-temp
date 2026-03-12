<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/dashboard', function () {
    return view('screens.Dashboard.index');
});
Route::get('/departments', function () {
    return view('screens.Departments.index');
});

Route::get('/departments', function () {
    return view('screens.Departments.index');
})->name('departments.index');
