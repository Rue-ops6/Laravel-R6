<?php
#php artisan make:controller ExampleController
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Phone;
use Illuminate\Support\Facades\DB;


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
    public function data(Request $request){
        #dd(info);
        $data = $request->all(); #$request; 

        session(['formData' => $data]);// Store the data in the session instead of the database nor cookies as there is no pwd n it's more secured

        return redirect()->route('c-responses');
    }
    // Retrieve the stored data from the session
    public function responses() {
        $data = session('formData');
        return view('c-responses', compact('data'));
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




     #<!------DB relations-------¡> 
    public function DBrelations() {
    #dd(Student::find(1)?->phone->phone_num);     
    dd(DB::table('students')
    ->join('phones', 'phones.id', '=', 'students.phoneID')
    ->where('students.id', '=', 1)
    ->first());
    }

}



