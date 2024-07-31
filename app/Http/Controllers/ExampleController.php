<?php
#php artisan make:controller ExampleController
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExampleController extends Controller
{
    function login(){
        return view('login');
    } 
    function log(Request $request){
    return $request['email'] . '<br>' . $request->password;
    #return "Data submitted";
        #dd($request->all()); #to request all will get us even the token and unwanted fields, thus its better to request each alone and for more info do a dd();
    }

/*******************/
    function contactus() {
        return view('contactus');
    }//->where(["name" => "[A-Za-z]+"]);

#facade //use Illuminate\Http\Request;
    public function info(Request $request){
        #dd(info);
        $data = $request->all(); #$request; 

        session(['formData' => $data]);// Store the data in the session instead of the database nor cookies as there is no pwd n it's more secured

        return redirect()->route('result');
    }
    // Retrieve the stored data from the session
    public function result() {
        $data = session('formData');
        return view('result', compact('data'));
    }

//upload file
    public function uploadFile() {
        return view('uploadFile');
    }
    public function uploadimg(Request $request){
        $file_extension = $request->image->getClientOriginalExtension();
        $file_name = time() . '.' . $file_extension;
        $path = 'assets/images';
        $request->image->move($path, $file_name);
        return 'Uploaded';
    }

}