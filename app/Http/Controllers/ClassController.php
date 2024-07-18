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

        //dd($request);
        $title ='maths';
        $capacity = '10';
        $fulled = true;
        $price ='190000';
        $begTime = '14:05:19';
        $endTime = '16:35:00';
   
        Clazz::create([
           'classTitle'=> $title,
           'capacity'=> $capacity,
           'fulled'=> $fulled,
           'price'=> $price,
           'begTime'=> $begTime,
           'endTime'=> $endTime,
        ]);
        return "Submitted successfully";
   
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
