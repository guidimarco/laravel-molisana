<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('home');
}) -> name("home");

Route::get('/prodotti', function () {
    $all_pasta = config("pasta");
    $copy_all_pasta = collect($all_pasta);

    // define single type
    $pasta_lunga = $copy_all_pasta -> where("tipo", "lunga");
    $pasta_corta = $copy_all_pasta -> where("tipo", "corta");
    $pasta_cortissima = $copy_all_pasta -> where("tipo", "cortissima");

    $data = [
        'formati' => [
            'lunga' => $pasta_lunga,
            'corta' => $pasta_corta,
            'cortissima' => $pasta_cortissima
        ], // all type of pasta
    ];

    // dd($data);

    return view('prodotti', $data);
}) -> name("prodotti");

Route::get('prodotti/{id}', function($id) {
    return $id;
});

Route::get('/news', function () {
    return view('news');
}) -> name("news");
