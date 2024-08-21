
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExampleController;  #the brain where to put the actions. We use web.php as a kobry to head us there "brain" that is why we also have to mension where is there through what looks like require_once = use, using first letters capital.
use App\Http\Controllers\CarController;
use App\Http\Controllers\ContactController;
use App\Http\Middleware\EnsureTokenIsValid;
#namespace Illuminate\Session\Middleware;
use App\Http\Middleware\TerminatingMiddleware;

Route::get('/carsweb', function () {  #main page
    #return view('welcome');
    return 'This is a cars world';
});

// protected $routeMiddleware = [
//     'auth' => \App\Http\Middleware\Authenticate::class,
//     health: '/up',
//     then: function () {  #web for side routes
//         Route::namespace('Cars')->prefix('cars')->name('cars.')->group(base_path('routes/cars.php'));
//     },
// ];



/*
// M camara -langs
Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){


                          #<!------Cars-------¡>
                          Route::prefix('cars')->middleware('verified')->group(function() {

                          Route::get('home', [CarController::class,'index'])->name('cars.index');
                          Route::get('add', [CarController::class,'create'])->name('cars.add');
                          Route::post('', [CarController::class,'store'])->name('cars.store');

                          Route::get('edit/{id}', [CarController::class,'edit'])->name('cars.edit');
                          Route::put('{id}', [CarController::class,'update'])->name('cars.update');

                          Route::get('details/{id}',[CarController::class,'show'])->name('cars.details');
                          Route::get('del/{id}', [CarController::class,'softdel'])->name('cars.delete');
                          Route::get('trashed', [CarController::class,'showDeleted'])->name('cars.trashed');
                          Route::patch('{id}', [CarController::class,'restore'])->name('cars.restore');
                          Route::delete('{id}', [CarController::class,'destroy'])->name('cars.destroy');


                        });
                          #Route::resources('cars', [CarController::class]);





                        });

*/
