<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\NewType;
use App\Models\Product;
use App\Models\Arrival;
use Illuminate\Http\Request;

class CategoryController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
 
    }

    public function TV(Category $category)
    {
        $cart = session()->get('cart');
        $arrival = Arrival::orderBy('created_at', 'desc')->paginate(3);
        $accessories= Product::where('productType','tlevision')->get();
        $subcategory = NewType::where('NewTypeName','tlevision')->get();
        $data = "showTv";
        
        return view('category.TV',compact(
            'accessories',
            'cart',
            'arrival',
            'subcategory',
            'data'

        ));

    }

    public function Radio(Category $category)
    {
        $cart = session()->get('cart');
    
        $arrival = Arrival::orderBy('created_at', 'desc')->paginate(3);
        $accessories= Product::where('productType','radio')->get();
        $subcategory = NewType::where('NewTypeName','radio')->get();

        $data = "showRadio";
        return view('category.Radio',compact(
    
            'accessories',
            'cart',
            'arrival',
            'arrival',
            'subcategory',
            'data'

        ));
    }

    public function Accessory(Category $category)
    {
        $cart = session()->get('cart');

        $arrival = Arrival::orderBy('created_at', 'desc')->paginate(3);
        $accessories= Product::where('productType','accessories')->get();
        $subcategory = NewType::where('NewTypeName','accessories')->get();
        $data = "showAccessories";
        return view('category.Accessory',compact(
    
            'accessories',
            'cart',
            'arrival',
            'arrival',
            'subcategory',
            'data'

        ));
    }

    public function Computer(Category $category)
    {
        $cart = session()->get('cart');
       
        $arrival = Arrival::orderBy('created_at', 'desc')->paginate(3);
        $accessories= Product::where('productType','computer')->get();
        $subcategory = NewType::where('NewTypeName','computer')->get();
        $data = "showComputer";
        return view('category.Computer',compact(
    
            'accessories',
            'cart',
            'arrival',
            'arrival',
            'subcategory',
            'data'


        ));
    }


    public function Camera(Category $category)
    {
        $cart = session()->get('cart');
       
        $arrival = Arrival::orderBy('created_at', 'desc')->paginate(3);
        $accessories= Product::where('productType','Camera')->get();
        $subcategory = NewType::where('NewTypeName','Camera')->get();
        $data = "showCamera";
        return view('category.Computer',compact(
    
            'accessories',
            'cart',
            'arrival',
            'arrival',
            'subcategory',
            'data'

        ));
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        //
    }

    
}
