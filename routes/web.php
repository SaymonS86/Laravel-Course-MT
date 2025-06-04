<?php

use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;

use function Laravel\Prompts\search;
use function Livewire\store;

use App\Http\Controllers\EventController;
use Barryvdh\Debugbar\DataCollector\EventCollector;
use FastRoute\Route as FastRouteRoute;
use GuzzleHttp\Middleware;
use Symfony\Contracts\EventDispatcher\Event;


// criação de eventos
Route::get('/', [EventController::class, 'index'])->name('home');
Route::get('/events', [EventController::class, 'event'])->middleware('auth')->name('events');
Route::post('/events', [EventController::class, 'store']);


Route::get('/events/{id}', [EventController::class, 'show'])->name('store.sowItem');

Route::get('/usuario', function (){
   return redirect('login');});

Route::get('/products_test/{id?}', function($id = null) {
    return view('tests/product', ['id'=> $id]); 
 });

 Route::get('/dashboard', [EventController::class, 'dashboard'])->middleware('auth');



// Route::get('/createUser', [EventController::class, 'dataBase']);

// Route::get('/createUser', function (){
//    return view('CreateUserProf'); 
// })->name('criar'); //Cria um nome para fazer redirects 

// Route::redirect('/createuser', '/createUser');//o redirects basico

// Route::get('/criarUsuario', function() {
//    return redirect()->route('criar');
// });// maneira mais completa de fazer um redirect completo.


 //maniera normal de criar um group

 // Route::prefix('admin')->group(function(){
//    Route::get('user', function(){
//       return 'user';
//    });
//    Route::get('controls', function(){
//       return 'controls';
//    });
//    Route::get('logs', function(){
//       return 'logs';
//    });
// });

//maneira mais versatil e mais eficinete, pois permite adicionar mais opções

//  Route::group([

//    'prefix' => 'admin',
//    'as' => 'admin.'

//  ], function(){
//    Route::get('user', function(){
//       return 'user';
//    })->name('user');

//    Route::get('controls', function(){
//       return 'controls';
//    })->name('controls');

//    Route::get('logs', function(){
//       return 'logs';
//    })->name('logs');

// });

//teste de pesquisa

// Route::get('/pro', function() {

//     $search = request('search');

//    return view('tests/products', ['search' => $search]); 
// });

