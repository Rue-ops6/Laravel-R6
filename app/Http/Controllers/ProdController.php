<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Traits\Common;

class ProdController extends Controller
{
    use Common;


    /*    #1)
     * Display a listing of the resource.
     */
    public function LatestProds()
    {
        /* 
        #SELECT * FROM `products` ORDER BY updated_at DESC limit 3;
        */
        #$products = Product::orderBy('updated_at', 'desc')->limit(3)->get();
        $prods = Product::where('pub', 1)
        ->orderBy('updated_at', 'DESC')
        ->limit(3)
        ->get();

        return view('fashiondex', compact('prods'));
    }

    /*    #2)
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('prod-add');
    }

    /*    #3)
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //dd($request);

        #validation:
        $data = $request->validate([
            'prodTitle' => "required|string",
            'description' => "required|string|max:1000",
            'price' => "required|decimal:0,3",
            'image' => "required|mimes:png,jpg,jpeg|max:2048",
        ]);

        $data['pub'] = isset($request->pub);
        $data['image'] = $this->uploadFile($request->image, "assets/images");

        #dd($data);

        Product::create($data);

        return redirect()->route('prod-index');  # instead of: return "A car was created & stored to ur DB";
    }










}
