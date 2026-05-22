<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', function () {
    return view('home');
    });

Route::view('/project/blu-sentiment-analysis', 'projects.blu');