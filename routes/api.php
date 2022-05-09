<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoteController;

Route::prefix('note')->group(function () {    

    Route::get('/', [NoteController::class, 'get_all']);
    Route::get('/{id}', [NoteController::class, 'get_one']);
    Route::post('/', [NoteController::class, 'create']);
    Route::put('/{id}', [NoteController::class, 'update']);
    Route::delete('/{id}', [NoteController::class, 'destroy']);

});

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
