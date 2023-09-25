<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\MapController;
use App\Http\Controllers\NiceController;
use App\Http\Controllers\PostController;

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
//アプリケーションのホーム画面
Route::get('/',function (){
    return view('maps/map');
});
//マップ詳細画面を表示（認証ユーザーのみ）
Route::controller(MapController::class)->middleware(['auth'])->group(function(){
    Route::get('/maps/{map}','showMapspot');
});

//いいね機能（認証ユーザーのみ）
Route::controller(NiceController::class)->middleware(['auth'])->group(function(){
    Route::get('/nice/maps/{map}','nicemap')->name('do_good');//マップにいいねをする
    Route::get('/unnice/maps/{map}','unnicemap')->name('donot_good');//マップのいいねを解除する
    Route::get('/nice/locations/{location}','niceLoca')->name('nice');//ロケにいいねをする
    Route::get('/unnice/locations/{location}','unniceLoca')->name('unnice');//ロケのいいねを解除する
    Route::get('/nices','showNice');//ユーザーがいいねしたものの一覧を表示
});

//ロケ機能（認証ユーザーのみ）
Route::controller(LocationController::class)->middleware(['auth'])->group(function(){
    Route::get('/locations','showLocalist');//ロケリスト画面を表示
    Route::get('/locations/search','searchLocation')->name('searchLocation');//ロケ検索
    Route::get('/locations/locapop','showLocapop');//ロケ人気ランキングを表示
    Route::get('/locations/{location}','showLocadetail')->name('showLocadetail');//ロケ詳細画面を表示
});

//投稿機能（認証ユーザーのみ）
Route::controller(PostController::class)->middleware(['auth'])->group(function(){
    Route::get('/posts','showList');
    Route::post('/posts','store');
    Route::get('/posts/create','createPost');
    Route::put('/posts/{post}','update');
    Route::delete('/posts/{post}','delete');
    Route::get('/posts/{post}/edit','edit');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
