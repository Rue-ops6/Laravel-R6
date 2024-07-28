<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ClassData;


class ClassController extends Controller
{
    /*    #1)
     * Display a listing of the resource.
     */
    public function index()
    {
        /* get all classes from db '
        return view all classes, classes data
        select * from classes = Class::get();*/
        $classes = ClassData::get();
        return view('classes', compact ('classes'));    
    }



    /*    #2)
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('addclass');
    }

    

     /*    #3)
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

        ClassData::create($data);

        return redirect()->route('classes.index');
        //return "Submitted successfully";  //other way        return response()->json(['message' => 'Data stored successfully']);
       }



    /*    #4)
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $class=ClassData::findOrFail($id);
        
        return view('detailsclass',compact('class'));
        }
    


  /*    #5)
         * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

        $class=ClassData::findOrFail($id);
        // dd($class);
            #return "class = " . $id;
        return view('editclass', compact ('class'));
        // return  $car['id'];

    }


    
     /*    #6)
    * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {            //dd($request,$id);

        //$request ==> data to be updated
        $data = [
            'classTitle' => $request->classTitle, #'key' from db migration => $value -> gi mn form frontend-.
            'capacity' => $request->capacity,
            'fulled' => isset($request->fulled),
            'price' => $request->price,
            'begTime' => $request->begTime,
            'endTime' => $request->endTime,
                ];
            
                //zi fi sql lw sebtaha hi3mel update * fa lazem a2wl where el car id =$id ell d5ltoh
                ClassData::where('id',$id)->update($data);
                return redirect()->route('classes.index');  //return "Submitted successfully"; 
                }



      /*    #7)
     * Soft delete.
     */
    public function softdel(string $id)
    {
        // $id = $request->id;
        ClassData::where('id',$id)->delete();

        // return " data delete successfully";
        return redirect()->route("classes.index");   
     }



      /*    #8)
     * permenent del/ Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // $id = $request->id;
        ClassData::where('id',$id)->delete();

        // return " data delete successfully";
        return redirect()->route("classes.trashed");   
     }


    /*    #9)
     * show del.
     */
    public function showDeleted()
    {
        $classes = ClassData::onlyTrashed()->get();

        // return " data delete successfully";
        return view('trashedclass', compact("classes"));
        }
        // return redirect()->route("showDeleted");
        

    /*    #10)
     * restore.
     */
    public function restore(string $id)
    {
        ClassData::where("id", $id)->restore();

        // return " data restored successfully";
        return redirect()->route("classes.index");        

        }

        }
