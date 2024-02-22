<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\admin\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\PainelAdmController;
use App\Models\PainelAdm;
use Illuminate\Auth\Events\Login;

/* Rotas para login e registro */

Route::get('/registrar', [RegisterController::class, 'create'])->name('registrar');
Route::post('/login/register', [RegisterController::class, 'store'])->name('login.register');
Route::view("/login", "admin.login.form")->name("login.form");
Route::post("/admin/auth", [LoginController::class, "auth"])->name("login.auth");
Route::get("/logout", [LoginController::class, "logout"]);

/* Rotas para home */

Route::get('/', [HomeController::class, 'index']);

/* Middleware para proteção de rotas (Só poderá acessar se estiver logado) */
Route::middleware("validaLogin")->group(function(){
    
    /* Rotas para eventos */

    Route::get('/events/create', [EventController::class, 'create']);
    Route::get('/events/edit/{id}', [EventController::class, 'edit']);
    Route::post('/events', [EventController::class, 'store']);
    Route::put('/events/update/{id}', [EventController::class, 'update']);
    Route::delete('/events/{id}', [EventController::class, 'destroy']);
    
});

Route::get('/events', [EventController::class, 'index']);

/* Rotas para estilização e criação das views */

Route::get('/estabelecimento', function () {
    return view("establishment");
});

Route::get('/estabelecimentos', function () {
    return view("listEstablishment");
});
Route::get('/evento', function () {
    return view("event");
});

/* Rotas para painel admnistrativo */

Route::resource('admin/paineladm', PainelAdmController::class);