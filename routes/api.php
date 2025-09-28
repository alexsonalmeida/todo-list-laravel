<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoListController;
use App\Http\Controllers\TaskController;

Route::get('/ping', function () {
    return response()->json(['message' => 'API está no ar 🚀']);
});

Route::apiResource('lists', TodoListController::class);
Route::apiResource('tasks', TaskController::class);
