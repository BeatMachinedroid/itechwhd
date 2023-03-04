<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Dashboard\TicketController;
use App\Http\Controllers\Dashboard\RequestController;
use App\Http\Controllers\Dashboard\AssetController;
use App\Http\Controllers\Dashboard\FaqController;
use App\Http\Controllers\Dashboard\PegawaiController;
use App\Http\Controllers\Dashboard\SearchController;
use App\Http\Controllers\Chart\ControllerChart;
use App\Http\Controllers\option\OptionController;
use App\Http\Controllers\Download\PdfController;
use App\Http\Controllers\Download\ExcelController;
use App\Http\Controllers\Upload\UploadController;
use App\Http\Controllers\Notes\NotesController;
use App\Exports\TicketExport;

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


Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::get('/', function () {
    return view('layout.login');
});
// ============================
Route::get('/home', [TicketController::class, 'home'])->middleware('auth');
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/login', [AuthController::class, 'proses'])->name('proses.login');
Route::post('/register', [AuthController::class, 'pReg'])->name('proses.register');
Route::get('/logout',[AuthController::class,'logout'])->name('logout');
Route::get('/reset',[AuthController::class,'resetview'])->name('forget.get');
Route::post('/resett',[AuthController::class,'submitemail'])->name('forget.post');
Route::get('/reset{token}',[AuthController::class,'showResetpw'])->name('reset.get');
Route::post('/reset',[AuthController::class,'submitResetPasswordForm'])->name('reset.post');
Route::get('/settings{id}',[AuthController::class,'ViewSetting']);
Route::put('/settings',[AuthController::class,'AccountSetting'])->name('settings');
// ============================
Route::get('/aset',[AssetController::class,'view'])->name('aset');
Route::get('/asetadd',[AssetController::class,'viewadd'])->name('aset.get');
Route::get('/asetedit{id}',[AssetController::class,'viewedit']);
Route::get('/Assets{id}',[AssetController::class,'viewDetail']);
Route::put('/upaset',[AssetController::class,'update']);
Route::post('/addaset',[AssetController::class,'addasset']);
Route::get('/delset{id}',[AssetController::Class,'deleteasset']);
// ============================
Route::get('/faq',[FaqController::class,'view'])->name('faq');
Route::get('/addfaq',[FaqController::class,'viewadd'])->name('addfaq');
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
Route::put('/history',[TicketController::Class,'Cancel'])->name('history.cancel');
Route::get('/addrequest',[RequestController::Class,'viewadd'])->name('addrequest.get');
Route::post('/addrequest',[RequestController::Class,'addrequst'])->name('addrequest.post');
Route::get('/editrequest{id}',[RequestController::Class,'viewedit']);
Route::put('/editreq',[RequestController::Class,'editrequest']);
Route::get('/delreq{id}',[RequestController::Class,'delreq']);
Route::get('/Ticket{id}',[RequestController::class,'viewDetail']);
Route::post('/detail/notes',[NotesController::Class,'addnotes'])->name('detail.addnote');
Route::post('/detail/notes/text',[NotesController::Class,'textnote'])->name('detail.addnote.text');
// ============================
Route::get('/chart week',[ControllerChart::class,'view'])->name('chart.view.week');
Route::get('/chart month',[ControllerChart::class,'viewMonth'])->name('chart.view.month');
Route::get('/chart year',[ControllerChart::class,'viewYear'])->name('chart.view.year');
// ============================
Route::get('/ticket/pdf{id}',[PdfController::class,'cetak_pdf']);
Route::get('/assets/pdf{id}',[PdfController::class,'cetak_asset_pdf']);
Route::get('/ticket/pdf/text{id}',[PdfController::class,'cetak_pdf_text']);
Route::get('/ticket/exel',[ExcelController::class,'cetak_excel'])->name('cetak_excel');
Route::get('/upload',[UploadController::class,'view'])->name('upload_view');
Route::post('/upload/post',[UploadController::class,'upload'])->name('upload.post');
Route::get('/upload/download{id}',[UploadController::class, 'download']);
Route::get('/upload/delete{id}',[UploadController::class, 'delete']);
// ============================
Route::get('/search', [SearchController::class,'SearchHistory'])->name('search.history');
// ============================

