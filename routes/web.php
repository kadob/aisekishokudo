<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\MapController;
use App\Http\Controllers\NiceController;

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
Route::get('/nice/maps/{map}',[NiceController::class,'nicemap'])->name('do_good');//マップにいいねをする
Route::get('/unnice/maps/{map}',[NiceController::class,'unnicemap'])->name('donot_good');//マップのいいねを解除する

//認証ユーザーのみ
Route::controller(LocationController::class)->middleware(['auth'])->group(function(){
    Route::get('/locations','showLocalist');//ロケリスト画面を表示
    Route::get('/locations/search','searchLocation')->name('searchLocation');//ロケ検索
    Route::get('/locations/locapop','showLocapop');//ロケ人気ランキングを表示
    Route::get('/locations/{location}','showLocadetail')->name('showLocadetail');//ロケ詳細画面を表示
});
Route::get('/nice/locations/{location}',[NiceController::class,'niceLoca'])->name('nice');//ロケにいいねをする
Route::get('/unnice/locations/{location}',[NiceController::class,'unniceLoca'])->name('unnice');//ロケのいいねを解除する

/**Route::get('/', function () {
    return view('welcome');
});**/

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
