<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormularioController;

// Estas rotas get, definem o template blade a ser utilizado e passam a variavel 
// `active` para o VueJs


Route::get('/Home', function () {
    return view('pages.home')->with('active', 'home');
})->name('home');
Route::get('/Subscribe', function () {
    return view('pages.subscribe')->with('active', 'cadastrar');
});
Route::get('/Subscribers', function () {
    return view('pages.subscriebers')->with('active', 'inscritos');
});
Route::get('/AboutUs', function () {
    return view('pages.aboutus')->with('active', 'sobre');
});

// Esta rota post serve para receber o formulário que esta na rota `/Subscribe` ou
// `Cadastrar` na navbar, chamando o Controller de formulario

Route::post('/petiko-submit-form', [FormularioController::class, 'submit']);

// Configuração para redirecionar caso tente acessar outra rota
Route::fallback(function () {
    return redirect()->route('home');
});
