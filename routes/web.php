<?php

use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;

use function Laravel\Prompts\search;

use App\Http\Controllers\EventController;
use Barryvdh\Debugbar\DataCollector\EventCollector;
use FastRoute\Route as FastRouteRoute;
use Symfony\Contracts\EventDispatcher\Event;


// criação de eventos
Route::get('/', [EventController::class, 'index']);

Route::get('/events', [EventController::class, 'event']);
Route::post('/events', [EventController::class, 'store']);

//teste de pesquisa
















Route::get('/pro', function() {

    $search = request('search');

   return view('tests/products', ['search' => $search]); 
});


Route::get('/products_test/{id?}', function($id = null) {
    return view('tests/product', ['id'=> $id]); 
 });