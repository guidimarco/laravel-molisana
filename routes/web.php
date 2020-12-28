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

    // dd($data['formati']);

    return view('prodotti', $data);
}) -> name("prodotti");

Route::get('scheda-prodotto/{id}', function($id) {
    $all_pasta = config("pasta");
    $this_pasta = $all_pasta[$id]; // this type of pasta

    // calc of prev-next id
    $numb_pasta = count($all_pasta) - 1; // lenght of array of pasta
    $prev_id;
    $next_id;

    if ($id != 0 && $id != $numb_pasta) {
        $prev_id = $id - 1;
        $next_id = $id + 1;
    } elseif ($id == 0) {
        // this_id is the first-product
        $prev_id = $numb_pasta;
        $next_id = $id + 1;
    } elseif ($id == $numb_pasta) {
        // this_id is the last-product
        $prev_id = $id - 1;
        $next_id = 0;
    }

    $prev_pasta = $all_pasta[$prev_id]; // prev type of pasta
    $next_pasta = $all_pasta[$next_id]; // next type of pasta


    // dd($numb_pasta . $prev_id . $next_id);

    $data = [
        'this_id' => $id,
        'this_formato' => $this_pasta,
        'prev_id' => $prev_id,
        'prev_formato' => $prev_pasta,
        'next_id' => $next_id,
        'next_formato' => $next_pasta
    ];

    return view('scheda-prodotto', $data);
}) -> name("scheda-prodotto");

Route::get('/news', function () {
    return view('news');
}) -> name("news");
