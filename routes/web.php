<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\Auth\VerificationController;
use App\Http\Controllers\Auth\LoginRegisterController;

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
Route::get('', [App\Http\Controllers\IndexController::class, 'index'])->name('home');

Route::get('/produk/{slug}/{pid}', [App\Http\Controllers\IndexController::class, 'detail'])->name('main.produk.detail');
Route::get('/search', [App\Http\Controllers\IndexController::class, 'search'])->name('search');

Route::get('/topup', [App\Http\Controllers\TopupController::class, 'index'])->name('topup');

//Order Games
Route::get('/topup/{kategori:kode}', [App\Http\Controllers\OrderGameController::class, 'index']);
Route::post('/topup/harga', [App\Http\Controllers\OrderGameController::class, 'price'])->name('ajax.price.game');
Route::post('/topup/konfirmasi-data', [App\Http\Controllers\OrderGameController::class, 'confirm'])->name('ajax.confirm-data.game');
Route::post('/topup/pembelian', [App\Http\Controllers\OrderGameController::class, 'store'])->name('order.game');
Route::get('/riwayat/transaksi/{oid}', [App\Http\Controllers\InvoiceController::class, 'index']);

//Order PPOB
Route::get('/order/ppob', [App\Http\Controllers\OrderPpobController::class, 'index'])->name('ppob');
Route::post('/cek/layanan/ppob', [App\Http\Controllers\OrderPpobController::class, 'cek_layanan'])->name('ajax.cek.nomor.ppob');
Route::post('/detail/order/ppob', [App\Http\Controllers\OrderPpobController::class, 'detail'])->name('ajax.detail.pesanan');
Route::post('/validasi/pay/ppob', [App\Http\Controllers\OrderPpobController::class, 'pembayaran'])->name('validasi.pembayaran.ppob');
Route::post('/post/pembelian/ppob', [App\Http\Controllers\OrderPpobController::class, 'order'])->name('order.ppob');

Route::controller(GoogleController::class)->group(function(){
    Route::get('auth/google', 'redirectToGoogle')->name('auth.google');
    Route::get('auth/google/callback', 'handleGoogleCallback');
});

Route::controller(VerificationController::class)->group(function() {
    Route::get('/email/verify', 'notice')->name('verification.notice');
    Route::get('/email/verify/{id}/{hash}', 'verify')->name('verification.verify');
    Route::post('/email/resend', 'resend')->name('verification.resend');
});

Route::controller(LoginRegisterController::class)->group(function() {
    Route::get('/register', 'register')->name('register');
    Route::post('/store', 'store')->name('store');
    Route::get('/login', 'login')->name('login');
    Route::post('/authenticate', 'authenticate')->name('authenticate');
    Route::post('/logout', 'logout')->name('logout');
});

Auth::routes();

Route::group(['middleware' => ['auth']], function() {
    Route::get('/akun', [App\Http\Controllers\ProfilController::class, 'index'])->name('akun');
    Route::get('/akun/edit', [App\Http\Controllers\ProfilController::class, 'edit'])->name('editprofil');
    Route::post('/akun/edit', [App\Http\Controllers\ProfilController::class, 'save_edit'])->name('saveprofil');
    
    //Deposit
    Route::get('/akun/deposit', [App\Http\Controllers\ProfilController::class, 'deposit'])->name('deposit');
    Route::post('/akun/deposit', [App\Http\Controllers\ProfilController::class, 'deposit_post'])->name('deposit.post');
    Route::get('/akun/riwayat/deposit', [App\Http\Controllers\ProfilController::class, 'riwayat_deposit'])->name('riwayat.deposit');
    Route::get('/akun/riwayat/deposit/{inv}', [App\Http\Controllers\ProfilController::class, 'detail_riwayat_deposit'])->name('detail.riwayat.deposit');
    
    //Transaksi
    Route::get('/akun/riwayat/transaksi', [App\Http\Controllers\ProfilController::class, 'riwayat_transaksi'])->name('riwayat.transaksi');
    Route::get('/akun/riwayat/transaksi/{oid}', [App\Http\Controllers\ProfilController::class, 'detail_riwayat_transaksi'])->name('detail.riwayat.transaksi');

    Route::get('/akun/transfer', [App\Http\Controllers\ProfilController::class, 'transfer'])->name('transfer');
    Route::post('/akun/transfer', [App\Http\Controllers\ProfilController::class, 'transfer_post'])->name('transfer.post');
    
    //Inbox
    Route::get('/inbox', [App\Http\Controllers\InboxController::class, 'index'])->name('inbox');
    Route::post('/inbox', [App\Http\Controllers\InboxController::class, 'read'])->name('ajax.read.inbox');
    
    //UPGRADE
    Route::post('/akun/upgrade/cek', [App\Http\Controllers\ProfilController::class, 'upgrade_cek'])->name('price.up');
    Route::get('/akun/upgrade', [App\Http\Controllers\ProfilController::class, 'upgrade'])->name('upgrade');
    Route::post('/akun/upgrade', [App\Http\Controllers\ProfilController::class, 'upgrade_post'])->name('upgrade.post');
    Route::get('/akun/riwayat/upgrade/{inv}', [App\Http\Controllers\ProfilController::class, 'detail_riwayat_upgrade'])->name('detail.riwayat.upgrade');
});

Route::group(['middleware' => ['auth', 'check.role']], function() {
    Route::get('/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('ds');
});