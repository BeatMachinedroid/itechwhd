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
Route::get('/dasboard', [TicketController::class, 'home'])->name('index')->middleware('auth');
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/login', [AuthController::class, 'proses'])->name('proses.login');
Route::post('/register', [AuthController::class, 'pReg'])->name('proses.register');
Route::get('/logout',[AuthController::class,'logout'])->name('logout');
Route::get('/reset',[AuthController::class,'resetview'])->name('forget.get');
Route::post('/resett',[AuthController::class,'submitemail'])->name('forget.post');
Route::get('/reset{token}',[AuthController::class,'showResetpw'])->name('reset.get');
Route::post('/reset',[AuthController::class,'submitResetPasswordForm'])->name('reset.post');
// ============================
Route::get('/asset',[AssetController::class,'view'])->name('aset');
Route::get('/asset/add',[AssetController::class,'viewadd'])->name('aset.get');
Route::get('/asset/{id}/edit',[AssetController::class,'viewedit']);
Route::get('/asset/{id}/detail',[AssetController::class,'viewDetail']);
Route::put('/asset/update',[AssetController::class,'update'])->name('aset.update');
Route::post('/asset/add',[AssetController::class,'addasset'])->name('aset.add');
Route::get('/asset/{id}/delete',[AssetController::Class,'deleteasset']);
Route::get('/asset/search', [SearchController::class,'SearchAsset'])->name('search.asset');
Route::put('/asset/status/proses' , [AssetController::class, 'statusup'])->name('statusup');
// ============================
Route::get('/faq',[FaqController::class,'view'])->name('faq');
Route::get('/faq/add',[FaqController::class,'viewadd'])->name('addfaq');
Route::get('/faq/{id}/edit',[FaqController::class,'viewedit']);
Route::post('/faq/add/proses',[FaqController::class,'add'])->name('add.faq');
Route::put('/faq/edit/proses',[FaqController::class,'edit'])->name('edit.faq');
Route::get('/faq/{id}/delete',[FaqController::class,'delete']);
Route::get('/faq/search', [SearchController::class,'SearchFaqs'])->name('search.faq');
// ============================
Route::get('/staf',[PegawaiController::class,'view'])->name('pegawai');
Route::get('/staf/{id}/edit',[PegawaiController::class,'edit']);
Route::get('/staf/{id}/delete',[PegawaiController::class,'delete']);
Route::put('/staf/edit/proses',[PegawaiController::class,'proses'])->name('edit.proses');
Route::get('/staf/{id}/setting',[AuthController::class,'ViewSetting']);
Route::get('/staf/search', [SearchController::class, 'SearchPegawai'])->name('search.staf');
Route::put('/settings',[AuthController::class,'AccountSetting'])->name('settings');
// ============================
Route::get('/report/history',[RequestController::Class,'view'])->name('history');
Route::put('/report/cancel',[TicketController::Class,'Cancel'])->name('history.cancel');
Route::get('/add/report',[RequestController::Class,'viewadd'])->name('addrequest.get');
Route::post('/add/report/proses',[RequestController::Class,'addrequst'])->name('addrequest.post');
Route::get('/report/{id}/edit',[RequestController::Class,'viewedit']);
Route::put('/report/edit/proses',[RequestController::Class,'editrequest'])->name('editrequest.edit');;
Route::get('/report/{id}/delete',[RequestController::Class,'delreq']);
Route::get('/report/{id}/detail',[RequestController::class,'viewDetail']);
Route::post('/report/detail/notes',[NotesController::Class,'addnotes'])->name('detail.addnote');
Route::post('/report/detail/notes/text',[NotesController::Class,'textnote'])->name('detail.addnote.text');
Route::get('/report/search', [SearchController::class,'SearchHistory'])->name('search.history');
// ============================
Route::get('/chart week',[ControllerChart::class,'view'])->name('chart.view.week');
Route::get('/chart month',[ControllerChart::class,'viewMonth'])->name('chart.view.month');
Route::get('/chart year',[ControllerChart::class,'viewYear'])->name('chart.view.year');
// ============================
Route::get('/ticket/pdf{id}',[PdfController::class,'cetak_pdf']);
Route::get('/assets/pdf{id}',[PdfController::class,'cetak_asset_pdf']);
Route::get('/ticket/pdf/text{id}',[PdfController::class,'cetak_pdf_text']);
Route::get('/ticket/exel',[ExcelController::class,'cetak_excel'])->name('cetak_excel');
Route::get('/ticket/exel/asset',[ExcelController::class,'cetak_excel_aset'])->name('asset_excel');
Route::get('/upload',[UploadController::class,'view'])->name('upload_view');
Route::post('/upload/post',[UploadController::class,'upload'])->name('upload.post');
Route::get('/upload/download{id}',[UploadController::class, 'download']);
Route::get('/upload/delete{id}',[UploadController::class, 'delete']);
Route::get('/upload/search/',[SearchController::class,'SearchUpload'])->name('search.upload');
// ============================
// Route::get('/upload/table/',[UploadController::class, 'excel'])->name('upload.table');
