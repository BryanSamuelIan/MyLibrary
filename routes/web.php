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

// Route::view('/', "index",

//     [
//         "pagetitle"=>"home",
//         "maintitle"=>"My librari"
//     ]);


Route::view('/tentangkita','about',
    [
        "pagetitle"=>"Hello",
        "maintitle"=>"Tentang Kita"
    ]
);

Route::view('/contactkita','contact',
    [
        "pagetitle"=>"Contact",
        "maintitle"=>"Contact data"
    ]
);

Route::get('/', function () {
    return view('index',
    [
        "pagetitle"=>"home",
        "maintitle"=>"My librari"
    ]);
});
