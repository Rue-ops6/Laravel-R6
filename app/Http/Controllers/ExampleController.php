<?php
#php artisan make:controller ExampleController
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExampleController extends Controller
{
    function login(){
        return view('login');
    } 

/*******************/
    function contactus() {
        return view('contactus');
    }//->where(["name" => "[A-Za-z]+"]);

    public function info(Request $request){
        $data = $request->all();

        session(['formData' => $data]);// Store the data in the session instead of the database nor cookies as there is no pwd n it's more secured

        return redirect()->route('result');
    }
    // Retrieve the stored data from the session
    public function result() {
        $data = session('formData');
        return view('result', compact('data'));
    }




}