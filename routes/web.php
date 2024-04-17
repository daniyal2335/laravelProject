<?php
use App\Http\Controllers\MyController;
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
    return view('index');
});
Route::get('about',function(){
    return view('about');
});
Route::get('contact',function(){
    return view('contact');
});
Route::get('users',[MyControler::class,'userData']);

Route::get('register',function(){
    return view('insert');
});

Route::post('register',[MyController::class,'insertData']);
Route::get('select2',[MyController::class,'selectData']);
Route::get('edit/{id}',[MyController::class,'showData']);
Route::post('edit/{id}',[MyController::class,'updateData']);
Route::get('edit/{id}/delete',[MyController::class,'removeData']);
