<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Traits\Common;

class ProdController extends Controller
{
    use Common;


    public function index() {

        /* get all cars from db '
        return view all cars, cars data
        #SELECT * FROM `cars` ORDER BY updated_at DESC limit 3;*/
        $prod = Product::get();
        return view('fashiondex');
}




}