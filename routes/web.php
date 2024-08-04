<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExampleController;  #the brain where to put the actions. We use web.php as a kobry to head us there "brain" that is why we also have to mension where is there through what looks like require_once = use, using first letters capital.
use App\Http\Controllers\CarController;
use App\Http\Controllers\ClassController;

Route::get('/', function () {  #main page
    return view('welcome');
});


/*#comment it until the project is done as it hides errors and bring us to home 
Route::fallback(function () {
    return redirect("/");
});
//anotherway
Route::fallback(fn() => redirect(""));
*/



#after 8000 from termiinal is uri -- after /public/ in xampp is uri. while the whole thing is url 'Uniform Resource Locator'.
Route::get('r/gaming', function () { #'r/gaming' is the uri 'Uniform Resource Identifier' thus its an identifier can't be repeated twice.
    return "¡Hey Rue!";
});
# we end writing by the r/gaming route. Unlike php there is no need to write the whole path. all the way up to r.php. Now hacker won't know what language are we using which is more secure.

// to get a result even when there ain't no id
Route::get('kar/{id?}', function ($id = 0) {
    return "car no. is : " . $id;
})->where([
    "id" => "[0-9]+",
]);
//another way
Route::get('clazzez/{id?}', function ($id = null) {
    return "clazz no. is : " . $id;
})->whereNumber("id");
//
Route::get('users/{name}/{age}', function ($name, $age) {
    return "users' info.: " . $name . " - " . $age;
})->whereAlpha("name")->whereNumber("age");
//using associative array
Route::get('user/{name?}/{age?}', function ($name = "Guest", $age = null) {
    if ($age == null) { #if hwa md5l4 el age ediny el name bs l2ni m4 3aizak tkteb elage =0 wlw d5l koloh, tal3 koloh
        return "Username: " . $name;
    } elseif ($name == "Guest") {
        return "Userage: " . $age;
    } else {
        return "Username: " . $name . "<br> Userage: " . $age . "<br>";
    }
    /*aw momkn a2ol
if ($age > 0){
return "Username: " . $name . "<br> Userage: " . $age . "<br>";
} else {
return "Username: " . $name; }
 */
})->where([
    "name" => "[A-Za-z]+",
    "age" => "[0-9]+",
]);



#Other where CONSTRAINTS
Route::get('tea/{gender}', function ($gender) {
    return "Gender is : " . $gender;
})->whereIn('gender', ['Female', 'Male']);
Route::get('tea/{name}', function ($name) {
    return "Teacher name is : " . $name;
})->whereIn('name', ['Mo.Alaa', 'Mr.Tony']);



#if we've more than one group in the same uri like
/* company/
company/About
company/users*/
Route::prefix('company')->group(function () {
    Route::get('/', function () {
        return "Welcome Home";
    })->name("Co.");
    Route::get('about', function () {
        return "About Co.";
    });
    Route::get('users', function () {
        return "Company users";
    });
}); // it can work with if as well like in; 'user/{name?}/{age?}'.. But this way is more readable and will function better in MCV specifically in controller.




                          #<!------Task2-------¡>                              
    #1)
    Route::prefix("accounts")->group(function () {
    Route::get('', function () {
        return "In da Index";
    });
    Route::get('admin', function () {
        return "Dear, Admin";
    });
    Route::get('user', function () {
        return "Welcome user";
    });
});


    #2)
    Route::prefix("kars")->group(function () {
    Route::get('', function () {
        return "Wlc Home";
    });

    Route::prefix("usa")->group(function () {
        Route::get('ford', function () {
        return "Ford cars";
    });
    Route::get('tesla', function () {
        return "Tesla cars";
    });
  });

    Route::prefix("ger")->group(function () {
    Route::get('mercedes', function () {
    return "Mercedes cars";
    });
    Route::get('audi', function () {
        return "Audi cars";
    });
    Route::get('volkswagen', function () {
        return "Volkswagen cars";
    });
  });
});
//another way but it is missing the if statment for everytype to write its return msg
/*Route::prefix('cars')->group(function () {
    Route::get('/', function () {
        return "cars index";
});
Route::prefix('usa/{type}')->group(function ($type) {
return "USA cars" . $type;
})->whereIn('type',['ford','tesla']);
Route::prefix('ger/{type}')->group(function ($type) {
    return "German cars" . $type;
    })->whereIn('type',['mercedes','audi','volkswagen']);
});
*/

                          #<!------view Html-------¡>                              

Route::get('resume', function () {  #CV is a frontend file tht can be seen in laravel thru the engine "blade". we can find it in resources/views. Therefore it's called by only its name.
    return view('resume');
});
//another static method but it won't be able to handle logic if we have it
Route::view('resume', 'resume');


Route::get('login', function () {
    return view('login');
});
// Route::get('login', [ExampleController:: class, 'login']);  //using controller
Route::post('logged', [ExampleController::class,'log'])->name('signin');

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




                          #<!------Task3-------¡>                              

                          Route::get('contactus', [ExampleController:: class, 'contactus']);  //using controller
                        /*Route::get('contactus', function () {
                        return view('contactus');
                        });*/
                        Route::post('info', [ExampleController::class, 'info'])->name('info'); 
                        Route::get('result', [ExampleController::class, 'result'])->name('result'); 




                          #<!------Cars-------¡>                              
                          Route::prefix('cars')->group(function() {

                          Route::get('/home', [CarController::class,'index'])->name('cars.index');
                          Route::get('/add', [CarController::class,'create'])->name('cars.add');
                          Route::post('', [CarController::class,'store'])->name('cars.store');

                          Route::get('{id}/edit', [CarController::class,'edit'])->name('cars.edit');
                          Route::put('/{id}', [CarController::class,'update'])->name('cars.update');

                          Route::get('/details/{id}',[CarController::class,'show'])->name('cars.details');
                          Route::get('/del/{id}', [CarController::class,'softdel'])->name('cars.delete');
                          Route::get('/trashed', [CarController::class,'showDeleted'])->name('cars.trashed');
                          Route::patch('/{id}', [CarController::class,'restore'])->name('cars.restore');
                          Route::delete('/{id}', [CarController::class,'destroy'])->name('cars.destroy');
                          
                        
                        });
                          #Route::resources('cars', [CarController::class]);

                          #<!------classes-------¡>                              
                          Route::group([
                            'prefix' => 'classes',  #for the uri
                            'controller' => ClassController::class,  #then we'll del the [] from the pages that open in browser
                            'as' => 'classes.'  #for the name
                          ], function() {

                          Route::get('home', 'index')->name('index');
                          Route::get('add', 'create')->name('add');
                          Route::post('', 'store')->name('store');

                          Route::get('edit/{id}', 'edit')->name('edit');
                          Route::put('{id}', 'update')->name('update');

                          Route::get('details/{id}','show')->name('details');
                          Route::delete('del/{id}', 'softdel')->name('delete');
                          Route::get('trashed', 'showDeleted')->name('trashed');
                          Route::patch('{id}', 'restore')->name('restore');
                          Route::delete('{id}', 'destroy')->name('destroy');
                        
                        
                        });
                          #Route::resources('classes', [ClassController::class]);

                          #<!------Validation-------¡> 


                           #<!------upload-------¡> 
                           Route::get('uploadFile', [ExampleController::class,'uploadFile']);
                           Route::post('assets', [ExampleController::class,'uploadimg'])->name('uploadimg');



                         #<!------Fashion-------¡> 
                         Route::group([
                            'prefix' => 'fashion',  #for the uri
                            'controller' => ExampleController::class,  #then we'll del the [] from the pages that open in browser
                            'as' => 'fashion.'  #for the name
                          ], function() {

                          Route::get('home', 'index')->name('index');

                         });














                        