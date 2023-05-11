<?php

use App\Http\Controllers\BansosController;
use App\Http\Controllers\BantuanController;
use App\Http\Controllers\ChartController;
use App\Http\Controllers\DusunController;
use App\Http\Controllers\JenisBansosController;
use App\Http\Controllers\JenisBantuanController;
use App\Http\Controllers\KematianController;
use App\Http\Controllers\KtpController;
use App\Models\Saran;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PendudukController;
use App\Http\Controllers\PerangkatController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SaranController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;
use App\Models\Bantuan;
use App\Models\Dusun;
use App\Models\JenisBantuan;
use App\Models\Kematian;
use App\Models\Ktp;
use App\Models\Penduduk;
use App\Models\Perangkat;
use App\Models\User;

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
    return view('utama.index');
});

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);


Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::resource('/saran', SaranController::class)->middleware('auth');
Route::resource('/penduduk', PendudukController::class)->middleware('admin');
Route::resource('/user', UserController::class)->middleware('admin');
Route::resource('/dusun', DusunController::class)->middleware('admin');
Route::resource('/jenis_bantuan', JenisBantuanController::class)->middleware('admin');
Route::resource('/bantuan', BantuanController::class)->middleware('admin');
Route::resource('/perangkat', PerangkatController::class)->middleware('admin');
Route::resource('/ktp', KtpController::class)->middleware('auth');
Route::resource('/kematian', KematianController::class)->middleware('auth');

Route::get('/dashboard', function () {
    return view('admin.dashboard', [
        'title' => 'Home' ,
        'users' => User::latest()->get(),
        'user_count' => User::all()->count(),
        'penduduk_count' => Penduduk::all()->count(),
        'perangkat_count' => Perangkat::all()->count(),
        'dusun_count' => Dusun::all()->count(),
        'bantuan_count' => Bantuan::all()->count(),
        'jenis_bantuan_count' => JenisBantuan::all()->count(),
        'ktp_count' => Ktp::all()->count(),
        'kematian_count' => Kematian::all()->count(),
        'ktp_user' => Ktp::where('user_id',  auth()->user()->id)->count(),
        'kematian_user' => Kematian::where('user_id',  auth()->user()->id)->count()


    ]);
})->middleware('auth');

Route::get('/profile', [ProfileController::class, 'index'])->middleware('auth');
Route::get('/profile/edit', [ProfileController::class, 'edit'])->middleware('auth');
Route::put('/profile/{user}', [ProfileController::class, 'update']);

Route::get('/ktp/{ktp}/download', [KtpController::class, 'download']);
Route::get('/kematian/{kematian}/download', [KematianController::class, 'download']);

Route::get('/chart', [ChartController::class, 'index']);

Route::get('/bansos', function () {
    return view('utama.bansos', [
        'bantuans' => Bantuan::all()

    ]);
});
Route::get('/perangkatdesa', function () {
    return view('utama.perangkat-desa', [
        'perangkats' => Perangkat::all()

    ]);
});
Route::get('/contactperson', function () {
    return view('utama.cp');
});
