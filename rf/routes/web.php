<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Companies;
use  App\Models\am;
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
});
Route::view('ak','form');
Route::post('submit' ,[Companies::class, 'save']);
Route::post('update' ,[Companies::class, 'index']); 
Route::post('akash' ,[Companies::class, 'update']);
//::post('ab',     [Companies::class, 'ma']);
Route::post('mm' ,[Companies::class, 'save']);
Route::get('ab', function () {
    $user= am :: all();
    return view('up')->with('user',$user);
});
