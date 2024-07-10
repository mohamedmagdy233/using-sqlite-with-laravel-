<?php

use App\Models\User;
use Illuminate\Support\Facades\Hash;
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
    return view('welcome');
});

Route::get('create',function (){


    User::create([

        'name' => 'mohamed',
        'email' => 'mohamed@a.com',
        'password' =>Hash::make('password'),
    ]);

    User::create([

        'name' => 'mohamed2',
        'email' => 'mohamed2@a.com',
        'password' =>Hash::make('password2'),
    ]);

    return 'done';
});
