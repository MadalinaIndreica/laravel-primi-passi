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
    return view('welcome');
    $page_title = "this is my first Laravel page";
    $data = [
        'title' => "this is my first Laravel page",
        'class_num' => 108,
        'students' => [
            'pippo',
            'pluto',
            'papaerino',
            'paperina'
        ]
        ];
        return view('home', $data);
});
