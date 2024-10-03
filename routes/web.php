<?php

use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\UserController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',[UserController::class,'home']);
Route::get('/auth',[UserController::class,'login']);
Route::post('/auth',[UserController::class,'authentikasi']);
Route::get('/artikel',[UserController::class,'artikel']);
Route::middleware('status_login')->group(function(){
    Route::get('/logout',[UserController::class,'logout']);
    Route::get('/admin',[UserController::class,'admin']);

    Route::get('/admin',[ArtikelController::class,'show']);
    Route::get('/artikel/create',[ArtikelController::class,'create']);
    Route::post('/artikel/create',[ArtikelController::class,'add']);
    Route::post('/artikel/search',[ArtikelController::class,'search']);
    Route::get('/artikel/delete/{id}',[ArtikelController::class,'delete']);
    Route::get('/artikel/edit/{id}',[ArtikelController::class,'edit']);
    Route::post('/artikel/edit/{id}',[ArtikelController::class,'update']);
    // Route::get('/detail/{id}',[ArtikelController::class,'detail']);


    Route::get('/kategori',[UserController::class,'kategori']);
    Route::get('/berita1',[UserController::class,'berita1']);
    Route::get('/berita2/{id}',[UserController::class,'berita2']);
    Route::get('/gigi',[UserController::class,'gigi']);
    Route::get('/nutrisi',[UserController::class,'nutrisi']);
    Route::get('/kulit',[UserController::class,'kulit']);
    Route::get('/kebugaran',[UserController::class,'kebugaran']);
    Route::get('/mental',[UserController::class,'mental']);
    Route::get('/profil',[UserController::class,'profil']);

    Route::get('/user', [UserController::class, 'show']);
    Route::post('/user', [UserController::class, 'search']);
    Route::get('/user/create', [UserController::class, 'create']);
    Route::post('/user/create', [UserController::class, 'add']);
    Route::get('/user/delete/{id}', [UserController::class, 'delete']);
    Route::get('/user/edit/{id}', [UserController::class, 'edit']);
    Route::post('/user/edit/{id}', [UserController::class, 'update']);
});



