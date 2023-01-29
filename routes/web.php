<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Dashboard\TicketController;
use App\Http\Controllers\RequestController;
use App\Http\Controllers\AssetController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\LaporanController;

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
// ============================
Route::get('/home', [TicketController::class, 'home'])->middleware('auth');
Route::get('/', [AuthController::class, 'index'])->name('login');
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/proses', [AuthController::class, 'proses']);
Route::post('/regis', [AuthController::class, 'pReg']);
Route::get('/logout',[AuthController::class,'logout']);
// ============================
Route::get('/aset',[AssetController::class,'view'])->name('aset');
Route::get('/asetadd',[AssetController::class,'viewadd']);
Route::get('/asetedit{id}',[AssetController::class,'viewedit']);
Route::put('/upaset',[AssetController::class,'update']);
Route::post('/addaset',[AssetController::class,'addasset']);
Route::get('/delset{id}',[AssetController::Class,'deleteasset']);
// ============================
Route::get('/faq',[FaqController::class,'view'])->name('faq');
Route::get('/addfaq',[FaqController::class,'viewadd']);
Route::get('/faqedit{id}',[FaqController::class,'viewedit']);
Route::post('/reqfaq',[FaqController::class,'add']);
Route::put('/editfaq',[FaqController::class,'edit']);
Route::get('/delfaq{id}',[FaqController::class,'delete']);
// ============================
Route::get('/staf',[PegawaiController::class,'view'])->name('pegawai');
Route::get('/stafadd',[PegawaiController::class,'viewadd']);
Route::get('/stafedit',[PegawaiController::class,'viewedit']);
Route::get('/delstaf{id}',[PegawaiController::class,'delete']);
Route::post('/addstaf',[PegawaiController::class,'add']);
// ============================
Route::get('/history',[RequestController::Class,'view'])->name('history');
Route::get('/addrequest',[RequestController::Class,'viewadd']);
Route::post('/addreqst',[RequestController::Class,'addrequst']);
Route::get('/editrequest{id}',[RequestController::Class,'viewedit']);
Route::put('/editreq',[RequestController::Class,'editrequest']);
Route::get('/delreq{id}',[RequestController::Class,'delreq']);
Route::get('/detail',[LaporanController::class,'viewDetail']);
// ============================
