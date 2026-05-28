<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::view('/', 'home')->name('home');
Route::view('/project', 'project')->name('projects.gallery');
Route::view('/project/blu-sentiment-analysis', 'projects.blu')->name('projects.blu');
Route::view('/project/powerbi-it-bsc-dashboard', 'projects.powerbi')->name('projects.powerbi');
Route::view('/project/ali-khamenei-sentiment-analysis', 'projects.ali-khamenei')->name('projects.ali');
Route::view('/project/data-lakehouse-etl-medallion', 'projects.etl')->name('projects.etl');
Route::view('/project/health-burden-clustering', 'projects.clustering')->name('projects.clustering');
Route::view('/project/music-graph-knowledge', 'projects.music-graph-knowledge')->name('projects.music-graph-knowledge');
Route::view('/project/indonesaku', 'projects.indonesaku')->name('projects.indonesaku');