<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index(){
        $nome = "Matheus";
        $idade = 29;
        $profissao = "Mecânico";
    
        $arr = [10,20,30,40,50];
    
        $nomes = ["Alexandre","Beatriz", "Caroline", "Ricardo","Milena", "Gabriel", "Isabela", "Renato", "Daniela", "Bernardo", "Benicio"];
        
        return view('welcome', 
            [
                'nome'=> $nome,
                'idade' => $idade,
                'profissao' => $profissao,
                'arr' => $arr,
                'nomes' => $nomes
            ]);
    };
    
    Route::get('/contact', function () {
        return view('contact');
    });
    Route::get('/produtos'), function () {
        return view('produtos');
    }
}
