<?php

Route::get('/','HomeController@index');
Route::get('/moeda/{code}','DetalheMoedaController@show');


