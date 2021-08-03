<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'ExcelController@All')->name('home');
Route::get('/all', 'ExcelController@All');
Route::post('/informe/import','ExcelController@fileInformeImport');
Route::post('/indice/import','ExcelController@fileIndiceImport');