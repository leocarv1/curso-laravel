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
use App\Http\Controllers\EventController;

// //Tela principal
// Route::get('/', [EventController::class, 'index']);

// //Tela para criar um evento
// Route::get('/events/create', [EventController::class, 'create'])->middleware('auth');

// //Tela mostrar detalhes de um evento
// Route::get('/events/{id}', [EventController::class, 'show']);

// //
// Route::post('/events', [EventController::class, 'store']);

// //Excluir um evento
// Route::delete('/events/{id}', [EventController::class, 'destroy'])->middleware('auth');

// //Atualizar um evento
// Route::get('/events/edit/{id}', [EventController::class, 'edit'])->middleware('auth');
// Route::put('/events/update/{id}', [EventController::class, 'update'])->middleware('auth');




// Route::get('/events/contact', [EventController::class, 'contact']);


// //Tela para eventos de um usuários logado
// Route::get('/dashboard', [EventController::class, 'dashboard'])->middleware('auth');

// //Participar do evento
// Route::post('events/join/{id}', [EventController::class, 'joinEvent'])->middleware('auth');
// //Sair do evento
// Route::delete('events/leave/{id}', [EventController::class, 'leaveEvent'])->middleware('auth');




Route::middleware('auth')->group(function(){
    Route::post('event/join/{id}', [EventController::class, 'joinEvent']);
});


Route::controller(EventController::class)->group(function(){
    //Tela principal
    Route::get('/', 'index');

    //Tela para criar um evento
    Route::get('/events/create', 'create')->middleware('auth');

    //Tela mostrar detalhes de um evento
    Route::get('/events/{id}', 'show');

    //
    Route::post('/events', 'store');

    //Excluir um evento
    Route::delete('/events/{id}', 'destroy')->middleware('auth');

    //Atualizar um evento
    Route::get('/events/edit/{id}', 'edit')->middleware('auth');
    Route::put('/events/update/{id}', 'update')->middleware('auth');




    Route::get('/events/contact', 'contact');


    //Tela para eventos de um usuários logado
    Route::get('/dashboard', 'dashboard')->middleware('auth');

    //Participar do evento
    Route::post('events/join/{id}', 'joinEvent')->middleware('auth');
    //Sair do evento
    Route::delete('events/leave/{id}', 'leaveEvent')->middleware('auth');
});









