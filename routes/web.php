<?php

use App\Http\Controllers\ClassController; #the brain where to put the actions. We use web.php as a kobry to head us there "brain" that is why we also have to mension where is there through what looks like require_once = use, using first letters capital.
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\ExampleController;
use App\Http\Controllers\SocialControllar;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;
// require base_path('routes/cars.php'); #for cars other web route

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



/*
// M camara -langs
Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){


                          #<!------Cars-------¡>
                          Route::prefix('car')->middleware('verified')->group(function() {

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






                        });
*/



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

#<!------Socialmedia login-------¡>
Route::get('auth/github/redirect', [SocialControllar::class, 'redirect'])->name('sociallogin');;
Route::get('auth/github/callback', [SocialControllar::class, 'callback'])->name('callback');;


#<!------Authantication  &&  Middleware-------¡>

Auth::routes(['verify' => true]); #to use it:    ->middleware('verified')
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


