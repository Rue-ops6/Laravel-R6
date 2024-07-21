<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Clazz;


class ClassController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('addclass');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    
        #dd($request);
        // fixed data
        /*$title ='maths';
        $capacity = '10';
        $fulled = true;
        $price ='190000';
        $begTime = '14:05:19';
        $endTime = '16:35:00';*/

                // data from form



/* elfk w tfasil str 'fulled' => isset($request->fulled):

if(isset($request->fulled)){
    $fulled = true;
}else{
    $fulled = false;    
}
l2n isset bs 4aila el values true w false keda keda*/
$data = [
'classTitle' => $request->classTitle, #'key' from db migration => $value -> gi mn form frontend-.
'capacity' => $request->capacity,
'fulled' => isset($request->fulled),
'price' => $request->price,
'begTime' => $request->begTime,
'endTime' => $request->endTime,
    ];

   
        Clazz::create($data);
        return "Submitted successfully";
        //other way        return response()->json(['message' => 'Data stored successfully']);
   
       }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
