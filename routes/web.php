<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\PdfController;
use App\Http\Controllers\PDFF2Controller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('test', [PdfController::class, "htmlToPdf"]);
Route::get('test2', [PDFF2Controller::class, "htmlToPdff"]);
