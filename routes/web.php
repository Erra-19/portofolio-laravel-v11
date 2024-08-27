<?php

use App\Http\Controllers\projectcontroller;
use App\Http\Controllers\updatecontroller;
use App\Http\Controllers\viewcontroller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/project', function () {
    return view('project');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::post('/tambah', function () {
    return view('tambah');
});

Route::get('/tambah', [projectcontroller::class, 'index' ]);

Route::post('/tambah', [viewcontroller::class, 'tambahproject']);

Route::get('/project', [projectcontroller::class, 'project']);

Route::get('/update/{id}', [updatecontroller::class, 'showUpdateForm']);

Route::put('/update/{id}', [updatecontroller::class, 'updateproject']);

Route::delete('/delete/{id}', [viewcontroller::class, 'deleteproject']);