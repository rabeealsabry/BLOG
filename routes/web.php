<?php

use App\Http\Controllers\rabeecontroller;
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


Route::get('/rabee', [rabeecontroller::class, 'index']);


// Route::get('/', function () {
//     //return "rabee";
//     return redirect('/index');

// });
// Route::get('/', usercontroller::class)->name('user.index');

//Route::get('user', [usercontroller::class,['index']]);

