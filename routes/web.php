<?php


namespace app\Http\Controllers;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


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
    return view('home');
});

Route::get('/users',[UserController::class , 'GetUsers']);
Route::get('/edituser/{id}',[UserController::class , 'EditUser']);
Route::get('/createuser',[UserController::class , 'CreateUser']);
Route::post('/createuser',[UserController::class , 'create']);
Route::post('/update/{id}',[UserController::class , 'update']);
//Route::resource("/create", UserController::class);
Route::get('/deleteuser/{id}',[UserController::class , 'DeleteUser']);
