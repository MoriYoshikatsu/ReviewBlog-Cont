<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReviewpostController;

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
Route::get('/', [ReviewpostController::class, 'index']);   

//以下のルーティングを追加
Route::get('/reviewpost1', [ReviewpostController::class, 'index1']);
Route::get('/reviewpost2', [ReviewpostController::class, 'index2']);
Route::get('/reviewpost/create', [ReviewpostController::class, 'create']);
Route::get('/reviewpost/{reviewpost}', [ReviewpostController::class, 'show']);
Route::post('/reviewpost', [ReviewpostController::class, 'store']);

