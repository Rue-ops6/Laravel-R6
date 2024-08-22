<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use App\Traits\Common;
use App\Models\Cat;

class CarController extends Controller
{
    use Common;
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
        #DB relation
        $cats = Cat::select('id', 'cat_nom')->get();
            return view('add_car', compact ('cats'));
        }



    /*    #3)
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    //dd($request);

#validation:
/*$message = ['carTitle.required' => __('cars.carTitle'),
'description.required' => __('cars.required'),
'price.required' => __('cars.required'),
'image.required' => __('cars.image'),
'catID.required' => __('cars.required'),
    ];*/

$data = $request->validate([
    'carTitle' => "required|string",
    'description' => "required|string|max:1000",
    'price' => "required|decimal:1",

    'image' => "required|mimes:png,jpg,jpeg|max:2048",
    'catID' => "required|exists:cats,id",
]); #,$message);

$data['pub'] = isset($request->pub);
$data['image'] = $this->uploadFile($request->image,"assets/images");
// $data['catID'] = isset($request->catID);

#dd($data);


     #fixed data
     /*$title ='BMW';
     $price ='190000';
     $desc = 'test';
     $pub = true;*/


        //variables not fixed
 /* elfk w tfasil str 'pub' => isset($request->pub):
if(isset($request->pub)){
    $pub = true;
}else{
    $pub = false;
}
l2n isset bs 4aila el values true w false keda keda*/
/*$data = [
    'carTitle' => $request->title, #'key' from db migration => $value -> gi mn form frontend-.
    'description' => $request->desc,
    'price' => $request->price,
    'pub' => isset($request->pub),
];*/

            Car::create($data);
     /*Car::create([
        'carTitle'=> $title,
        'price'=> $price,
        'description'=> $desc,
        'pub'=> $pub,
     ]);*/

     return redirect()->route('cars.index');  # instead of: return "A car was created & stored to ur DB";
    }



    /*    #4)
     * Display the specified resource.
     */
    public function show(string $id)
    {
                        #$car=Car::findOrFail($id);
                        $car=Car::with('cat')->findOrFail($id);
                        #$data['image'] = $this->uploadFile($request->image,"assets/images");
                        #dd($car);
        return view('details_car',compact('car'));
        }



    /*    #5)
         * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

        $car=Car::findOrFail($id);
        $cats = Cat::select('id', 'cat_nom')->get();

        //dd($car->all());
                    #return "car = " . $id;
        return view('edit_car', compact ('car', 'cats'));
        // return  $car['id'];

    }




    /*    #6)
    * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {            //dd($request,$id);


        #validation:
$data = $request->validate([
    'carTitle' => "required|string",
    'description' => "required|string|max:1000",
    'price' => "required|decimal:1",

    'image' => "sometimes|mimes:png,jpg,jpeg|max:2048",
    'catID' => "required|integer",
]);

$data['pub'] = isset($request->pub);
if($request->hasFile('image')) {
$data['image'] = $this->uploadFile($request->image,"assets/images");
}
#dd($data);

        //$request ==> data to be updated
    /*$data = [
        'carTitle' => $request->title, #'key' from db migration => $value -> gi mn form frontend-.
        'description' => $request->desc,
        'price' => $request->price,
        'pub' => isset($request->pub),
    ];*/

                    //zi fi sql lw sebtaha hi3mel update * fa lazem a2wl where el class id =$id ell d5lto
    car::where('id',$id)->update($data);
     return redirect()->route('cars.index');  #instead of writing a msg

    }



    /*    #7)
     * Soft Delete.
     */
    public function softdel(string $id)
    {
        Car::where('id',$id)->delete();

        // return " data delete successfully";
        return redirect()->route("cars.index");
        }



       /*    #8)
     * permenent del/ Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Car::where('id',$id)->forceDelete();

        // return " data delete successfully";
        return redirect()->route("cars.trashed");
        }



    /*    #9)
     * show del.
     */
        public function showDeleted()
        {
            $cars = Car::onlyTrashed()->get();

            // return " data delete successfully";
            return view('trashed_car', compact("cars"));
            }
            // return redirect()->route("showDeleted");



    /*    #10)
     * restore.
     */
            public function restore(string $id)
        {
            Car::where("id", $id)->restore();

            // return " data restored successfully";
            return redirect()->route("cars.index");
            }




}
