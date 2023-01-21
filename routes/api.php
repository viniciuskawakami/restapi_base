<?php

use App\Http\Controllers\Api\PostController;
use App\Http\Controllers\Api\UserTypeController;
use App\Http\Controllers\Api\DocumentTypeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::apiResource('posts',PostController::class);
Route::apiResource('user/types',UsertypeController::class);
Route::apiResource('document-types',DocumentTypeController::class);
//  crud create ,read, update, delete

Route::prefix('v1')->group(function () {
    Route::get('/user/types/list',[UsertypeController::class, 'showAll'])->name('user-types.list');
    Route::get('/user/types',[UsertypeController::class, 'index'])->name('user-types');
    Route::get('/user/types/show/{id}',[UsertypeController::class, 'show'])->name('user-types.show');
    Route::post('/user/types/new',[UsertypeController::class, 'store'])->name('user-types.new');
    Route::put('/user/types/update/{id}',[UsertypeController::class, 'update'])->name('user-types.update');
    Route::patch('/user/types/edit/{id}',[UsertypeController::class, 'edit'])->name('user-types.edit');
    Route::delete('/user/types/delete/{id}',[UsertypeController::class, 'destroy'])->name('user-types.edit');
});