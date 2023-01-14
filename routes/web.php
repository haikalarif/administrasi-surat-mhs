<?php

use App\Http\Controllers\DashboardCont;
use App\Http\Controllers\LoginCont;
use App\Http\Controllers\ProfileCont;
use App\Http\Controllers\UserCont;
use App\Http\Controllers\SuratCont;
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

Route::get('/', [LoginCont::class, 'index']);
Route::get('/login', [LoginCont::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginCont::class, 'login']);
Route::post('/logout', [LoginCont::class, 'logout']);

Route::get('/dashboard', [DashboardCont::class, 'index'])->middleware('auth');

Route::get('/surat', [SuratCont::class, 'index'])->middleware('auth');
Route::get('/surat/tambah', [SuratCont::class, 'create'])->middleware('admin');
Route::post('/surat/tambah-surat', [SuratCont::class, 'store'])->middleware('admin');
Route::get('/surat/detail/{id}', [SuratCont::class, 'detail'])->middleware('mhs');
Route::get('/surat/{id}/edit', [SuratCont::class, 'edit'])->middleware('admin');
Route::post('/surat/update/{id}', [SuratCont::class, 'update'])->middleware('admin');
Route::delete('/surat/delete/{id}', [SuratCont::class, 'delete'])->middleware('admin');
Route::get('/ajuan', [SuratCont::class, 'ajuan'])->middleware('mhs');
Route::post('/pengajuan-surat', [SuratCont::class, 'pengajuan'])->middleware('mhs');

Route::resource('/user', UserCont::class)->middleware('admin');

Route::resource('/profile', ProfileCont::class)->middleware('auth');