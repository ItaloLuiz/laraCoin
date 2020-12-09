<?php

use App\Http\Controllers\SeedBdController;
use Illuminate\Http\Request;

Route::get('/alimentarBanco','SeedBdController@create');
