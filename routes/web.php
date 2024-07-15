<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExampleController; 

/*#comment it until the project is done as it hides errors and bring us to home 
Route::fallback(function () {
    return redirect("/");
});
*/

Route::get('/', function () {
    return view('welcome');
});


#after 8000 from termiinal is uri -- after /public/ in xampp is uri. while the whole thing is url 'Uniform Resource Locator'.
Route::get('r/gaming', function () { #'r/gaming' is the uri 'Uniform Resource Identifier' thus its an identifier can't be repeated twice.
    return "¡Hey Rue!";
});
# we end writing by the r/gaming route. Unlike php there is no need to write the whole path. all the way up to r.php. Now hacker won't know what language are we using which is more secure.

// to get a result even when there ain't no id
Route::get('car/{id?}', function ($id = 0) {
    return "car no. is : " . $id;
})->where([
    "id" => "[0-9]+",
]);
//another way
Route::get('classes/{id?}', function ($id = null) {
    return "class no. is : " . $id;
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
    });
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
    Route::prefix("cars")->group(function () {
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



                          #<!------view Html-------¡>                              

Route::get('CV', function () {
    return view('CV');
});
