<?php

use App\Http\Controllers\AssistantController;
use Illuminate\Support\Facades\Route;

Route::get('/', [AssistantController::class,'select_all']);


Route::get('/create',[AssistantController::class,'create_assistant']); //format of [Controller name::class, function], you always write "class after controller name"
Route::post('/store', [AssistantController::class, 'store_assistant']);

Route::get('/edit/{id}', [AssistantController::class, 'edit_assistant']);
Route::post('/update/{id}', [AssistantController::class, 'update_assistant']);

?>
