<?php

use App\Http\Controllers\MitarbeiterController;
use App\Models\Mitarbeiter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');



Route::get('/', function(Request $request){
    return 'Hallo World';
});

Route::post('/mitarbeiter',[MitarbeiterController::class,'create']);