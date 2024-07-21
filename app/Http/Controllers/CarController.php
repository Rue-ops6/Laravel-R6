<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;

class CarController extends Controller
{
    /**
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

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
            return view('add_car');
        }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        //dd($request);
     /*$title ='BMW';
     $price ='190000';
     $desc = 'test';
     $pub = true;*/

     
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
     return "A car was created & stored to ur DB";

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

        $car=Car::findOrfail($id);
        // dd($car);
        return view('edit_car', compact ('car'));
        // return  $car['id'];

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
