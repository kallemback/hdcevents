<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {

    $nome = "Alexandre";
    $idade = 48;
    $profissao = "Empresário";

    $arr = [10,20,30,40,50,60];

    $nomes = ['Alexandre', 'Beatriz', 'Caroline', 'Ricardo', 'Milena', 'Isabela', 'Gabriel', 'Renato', 'Daniela', 'Bernardo', 'Benício'];

    return view('welcome',
    ['nome' => $nome,
     'idade' => $idade,
     'profissao' =>$profissao,
     'arr' => $arr,
     'nomes' => $nomes


    ]);
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/products', function () {
    return view('products');
});
