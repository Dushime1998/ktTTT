<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Payment;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
   use Illuminate\Support\Facades\Hash;
   use Illuminate\Support\Facades\Auth;



class CustomerController extends Controller
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
    $validator = Validator::make($request->all(), [
        'firstName' => 'required',
        'name' => 'required',
        'email' => 'required|email|unique:customers,email', // Ensure email is unique
        'phoneNumber' => 'required',
        'password' => 'required'
    ]);

    if ($validator->fails()) {
        return redirect()->back()->withErrors($validator)->withInput();
    }

    // Hash the password before saving
    $hashedPassword = Hash::make($request->get('password'));

    Customer::create([
        'first_name' => $request->get('firstName'),
        'name' => $request->get('name'),
        'email' => $request->get('email'),
        'phoneNumber' => $request->get('phoneNumber'),
        'password' => $hashedPassword
    ]);

    return redirect()->route('loginPage')->with('success', 'You have created an account. You can now log in here.');
}



    /**
     * Display the specified resource.
     */
    public function show(Customer $customer)
    {
        $userID = Auth::id();

        $data = Payment::where('userId', $userID)->get();

      $relate = Product::all();
        return view('shopping.userShopList', compact('data', 'relate'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Customer $customer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Customer $customer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Customer $customer)
    {
        //
    }
}
