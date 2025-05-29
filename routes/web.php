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
// Route::get('/createUser', [EventController::class, 'dataBase']);

Route::get('/createUser', function (){
   return view('CreateUserProf'); 
})->name('criar'); //Cria um nome para fazer redirects 

Route::redirect('/createuser', '/createUser');//o redirects basico

Route::get('/criarUsuario', function() {
   return redirect()->route('criar');
});// maneira mais completa de fazer um redirect completo.

Route::get('/events', [EventController::class, 'event'])->name('events');
Route::post('/events', [EventController::class, 'store']);
Route::get('/events/{id}', [EventController::class, 'show']);

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
Route::get('/usuario', function (){
   return redirect()->route('admin.user');});

//maneira mais versatil e mais eficinete, pois permite adicionar mais opções

 Route::group([

   'prefix' => 'admin',
   'as' => 'admin.'

 ], function(){
   Route::get('user', function(){
      return 'user';
   })->name('user');

   Route::get('controls', function(){
      return 'controls';
   })->name('controls');

   Route::get('logs', function(){
      return 'logs';
   })->name('logs');

});

//teste de pesquisa

Route::get('/pro', function() {

    $search = request('search');

   return view('tests/products', ['search' => $search]); 
});


Route::get('/products_test/{id?}', function($id = null) {
    return view('tests/product', ['id'=> $id]); 
 });