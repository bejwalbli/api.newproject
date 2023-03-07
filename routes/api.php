<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('your-firstname', fn () => response()->json(['name' => 'Bagus']));
Route::get('your-lastname', fn () => response()->json(['name' => 'Bagus']));