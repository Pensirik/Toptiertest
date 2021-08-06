<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InfomationformController;
use App\Http\Controllers\LogController;

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


Auth::routes();

Route::get('/', [App\Http\Controllers\InfomationformController::class, 'indexFrom'])->name('indexFrom');
Route::post('/infomationform',[App\Http\Controllers\InfomationformController::class, 'store'])->name('infomationform.store');


Route::get('/thankyou', function () {
    return view('thankyou');
});

//Admin
Route::group(['prefix'=>'/admin','middleware'=>['is_admin']],function(){
    Route::get('/',[HomeController::class, 'adminHome']);
    Route::get('/home',[HomeController::class, 'adminHome'])->name('admin.home');
    Route::get('/infomationform/create', [InfomationformController::class, 'create'])->name('infomationform.create');
    Route::post('/infomationform', [InfomationformController::class, 'store']);
    Route::get('/infomationform/{id}/edit', [InfomationformController::class, 'edit'])->name('infomationform.edit');
    Route::put('/infomationform/{id}', [InfomationformController::class, 'update'])->name('infomationform.update');
    Route::get('/infomationform/{id}', [InfomationformController::class, 'show'])->name('infomationform.show');
    Route::delete('/infomationform/{id}',[InfomationformController::class, 'destroy'])->name('infomationform.destroy');
    Route::get('/log', [LogController::class, 'index'])->name('log.home');


});
