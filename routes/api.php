<?php

use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TaskController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::middleware('auth:sanctum')->group(function(){
// Projects
    Route::get('/projects',[ProjectController::class,'index']);
    Route::post('/projects',[ProjectController::class,'store']);
    Route::get('/projects/{project}',[ProjectController::class,'show']);
    Route::put('/projects/{project}',[ProjectController::class,'update']);
    Route::delete('/projects/{project}',[ProjectController::class,'destroy']);

//task 1
    Route::get('/projects/{project}/tasks',[TaskController::class,'index']);
    Route::post('/projects/{project}/tasks',[TaskController::class,'store']);
    Route::get('/projects/{project}/tasks/{task}',[TaskController::class,'show']);
    Route::put('/projects/{project}/tasks/{task}',[TaskController::class,'update']);
    Route::delete('/projects/{project}/tasks/{task}',[TaskController::class,'destroy']);
});
