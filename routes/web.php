<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get("/", function () {
    return view("home");
    });

Route::group(["prefix" => "pessoas"], function () {
    Route::get("/", "PessoasController@index");
    Route::get("/nova", "PessoasController@criarPessoa");
    Route::get("/{id}/editar", "PessoasController@editar");
    Route::get("/{id}/excluir", "PessoasController@excluir");
    Route::get("/{id}/destroy", "PessoasController@destroy");
    Route::post("/store", "PessoasController@store");
    Route::post("/update", "PessoasController@update");
});
