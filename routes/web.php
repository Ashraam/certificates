<?php

use App\Diplome\PSC1;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
    /*return response((new PSC1())->render(), '200', [
        'content-type' => 'application/pdf'
    ]);*/
});
