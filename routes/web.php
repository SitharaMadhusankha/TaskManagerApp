<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/tasks', function () {
    $data = \App\Models\Task::all();
    return view('tasks')->with('tasks', $data);
});

Route::post('/saveTask', [TaskController::class, 'store']);

Route::get('/markascompleted/{id}', [TaskController::class, 'updateTaskAsCompleted']);
Route::get('/markasnotcompleted/{id}', [TaskController::class, 'updateTaskAsNotcompleted']);

Route::get('/deletetask/{id}', [TaskController::class, 'deletetask']);
Route::get('/updatetask/{id}', [TaskController::class, 'updatetaskview']);

Route::post('/updatetask', [TaskController::class, 'updatetask']);
