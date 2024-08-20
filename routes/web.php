<?php

use App\Http\Controllers\ClassController; #the brain where to put the actions. We use web.php as a kobry to head us there "brain" that is why we also have to mension where is there through what looks like require_once = use, using first letters capital.
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ExampleController;
use Illuminate\Support\Facades\Route;
require base_path('routes/cars.php'); #for cars other web route

Route::get('/', function () { #main page
    return view('welcome');
});

/*#comment it until the project is done as it hides errors and bring us to home
Route::fallback(function () {
return redirect("/");
});
//anotherway
Route::fallback(fn() => redirect(""));
 */


#<!------view Html-------¡>

Route::get('resume', function () { #CV is a frontend file tht can be seen in laravel thru the engine "blade". we can find it in resources/views. Therefore it's called by only its name.
    return view('resume');
});
//another static method but it won't be able to handle logic if we have it
Route::view('resume', 'resume');

Route::get('login', function () {
    return view('login');
});
// Route::get('login', [ExampleController:: class, 'login']);  //using controller
Route::post('logged', [ExampleController::class, 'log'])->name('signin');

Route::post('sub', function () {
    return "Data submitted";
})->name('sub');

//named route: anchor tag from page to another
Route::get('link', function () {
    $url1 = route('Wlc');
    $url2 = route('Co.'); //upwards around line 77
    return "<a href='$url1'> go to welcome </a> <br> <a href='$url2'> go to page </a>";
    #return "<a href='/Wlc'> go to welcome </a>";
});
Route::get('Wlc', function () {
    return "wlc to laravel";
})->name('Wlc');

#<!------classes-------¡>
Route::group([
    'prefix' => 'classes', #for the uri
    'controller' => ClassController::class, #then we'll del the [] from the pages that open in browser
    'as' => 'classes.', #for the name
    'middleware' => 'verified',
], function () {

    Route::get('home', 'index')->name('index');
    Route::get('add', 'create')->name('add');
    Route::post('', 'store')->name('store');

    Route::get('edit/{id}', 'edit')->name('edit');
    Route::put('{id}', 'update')->name('update');

    Route::get('details/{id}', 'show')->name('details');
    Route::delete('del/{id}', 'softdel')->name('delete');
    Route::get('trashed', 'showDeleted')->name('trashed');
    Route::patch('{id}', 'restore')->name('restore');
    Route::delete('{id}', 'destroy')->name('destroy');

});
#Route::resources('classes', [ClassController::class]);

#<!------Validation-------¡>

#<!------upload file-------¡>
Route::get('uploadFile', [ExampleController::class, 'uploadFile']);
Route::post('assets', [ExampleController::class, 'uploadimg'])->name('uploadimg');

#<!------DB relations-------¡>
Route::get('one2one', [ExampleController::class, 'DBrelations'])->name('1-1')->middleware('verified');

#<!------Mailing-------¡>
Route::get('contactus', [ContactController::class, 'sendFrom'])->name('sendFrom');
Route::post('contactus', [ContactController::class, 'sendTo'])->name('sendTo');



#<!------Authantication  &&  Middleware-------¡>

Auth::routes(['verify' => true]); #to use it:    ->middleware('verified')
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


