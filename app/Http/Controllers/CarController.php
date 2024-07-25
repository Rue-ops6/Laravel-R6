<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;

class CarController extends Controller
{
    /*    #1)
     * Display a listing of the resource.
     */

    public function index()
    {
        /* get all cars from db '
        return view all cars, cars data
        select * from cars = Car::get();*/
        $cars = Car::get();
        return view('cars', compact ('cars'));
    }



    /*    #2)
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
            return view('add_car');
        }



    /*    #3)
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
    //dd($request);
     /*$title ='BMW';
     $price ='190000';
     $desc = 'test';
     $pub = true;*/

     //variables not fixed
$data = [
    'carTitle' => $request->title, #'key' from db migration => $value -> gi mn form frontend-.
    'description' => $request->desc,
    'price' => $request->price,
    'pub' => isset($request->pub),
];

       
            Car::create($data);
     /*Car::create([
        'carTitle'=> $title,
        'price'=> $price,
        'description'=> $desc,
        'pub'=> $pub,
     ]);*/

     return redirect()->route('cars.home');  # instead of: return "A car was created & stored to ur DB";

    }



    /*    #4)
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $car=Car::findOrFail($id);
        
        return view('details_car',compact('car'));
        }



    /*    #5)
         * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

        $car=Car::findOrFail($id);
        // dd($car);
            #return "car = " . $id;
        return view('edit_car', compact ('car'));
        // return  $car['id'];

    }



    /*    #6)
    * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
    //dd($request,$id);
    $data = [
        'carTitle' => $request->title, #'key' from db migration => $value -> gi mn form frontend-.
        'description' => $request->desc,
        'price' => $request->price,
        'pub' => isset($request->pub),
    ];
    car::where('id',$id)->update($data);
     return redirect()->route('cars.home');  #instead of writing a msg

    }



    /*    #7)
     * permenent del/ Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Car::where('id',$id)->delete();

        // return " data delete successfully";
        return redirect()->route("cars.home");
        }


        
    /*    #8)
     * soft del.
     */
        public function showDeleted()
        {
            $cars = Car::onlyTrashed()->get();
    
            // return " data delete successfully";
            return view('TrashedCars', compact("cars"));
            }
            // return redirect()->route("showDeleted");
            
}
