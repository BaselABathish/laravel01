<?php

use App\Http\Controllers\AssistantController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/create',[AssistantController::class,'create_assistant']);

Route::post('/store', [AssistantController::class, 'store_assistant']);
?>
