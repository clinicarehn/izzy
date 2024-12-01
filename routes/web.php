<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Maatwebsite\LaravelNovaExcel\Actions\DownloadExcel;

Route::get('/', function () {
    return Auth::check() ? redirect('/nova') : redirect('/nova');
});