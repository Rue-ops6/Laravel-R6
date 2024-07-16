<?php
#php artisan make:controller ExampleController
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExampleController extends Controller
{
    function login(){
        return view('login');
    } //->where(["name" => "[A-Za-z]+"]);


    function contactus() {
        return view('contactus');
    }

    // function info() {
    //     return "Data submitted";
    // } #)->name('info');
}
