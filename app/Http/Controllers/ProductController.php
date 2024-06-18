<?php

namespace App\Http\Controllers;

use App\Models\NewType;
use App\Models\Payment;
use App\Models\Product;
use App\Models\Arrival;
use App\Models\Customer;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use PhpParser\Node\Stmt\Return_;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

            }




    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }
    public function login()
    {
        $CategoryTv = NewType::where('NewTypeName', 'like', '%Television%')->get();
        $Categoryradio = NewType::where('NewTypeName', 'like', '%radio%')->get();
        $Categorycamera = NewType::where('NewTypeName', 'like', '%camera%')->get();
        $Categoryaccessory= NewType::where('NewTypeName', 'like', '%accessories%')->get();
        $CategoryRent = NewType::where('NewTypeName', 'like', '%tv%')->get();
        $arrival = Arrival::orderBy('created_at', 'desc')->paginate(5);
        $data = "login";
        return view('login',
        compact('arrival',
                'CategoryTv',
                'Categoryradio',
                'Categorycamera',
                'Categoryaccessory',
                'CategoryRent',
                'arrival',
                'data'

        ));
    }

        public function arrival()
    {
        $SavedType = NewType::all();
        return view('Admin.newArival',compact('SavedType'));
    }


    /**
     * Store a newly created resource in storage.
     */

   public function newArrival(Request $request)
{

// dd("i am here");

    if($request->hasFile('file')) {

        $photo_names = [];
        $photo_paths = [];


        foreach ($request->file('file') as $photo) {
            $filename = $photo->getClientOriginalName();
            $filepath = $photo->move('uploads', $filename);
            $photo_names[] = $filename;
            $photo_paths[] = $filepath->getPathname();
        }




        $product = new Arrival();
        $product->productName = $request->name;
        $product->productPrice = $request->price;
        $product->saleType = $request->saleType;
        $product->shippingMethod = $request->shipping;
        $product->productType = $request->ProductType;
        $product->discount = $request->discount;
        $product->Badge = $request->badge;
        $product->productDescription = $request->description;
        $product->fileName = json_encode($photo_names);
        $product->filePath = json_encode($photo_paths);
        $product->save();
        return redirect()->back()->with('success', 'Product created successfully.');
    } else {

        // dd('no photo uploaded');
        return redirect()->back()->with('error', 'No files uploaded.');
    }
}



     public function store(Request $request)
{


    if($request->hasFile('file')) {

        $photo_names = [];
        $photo_paths = [];


        foreach ($request->file('file') as $photo) {
            $filename = $photo->getClientOriginalName();
            $filepath = $photo->move('uploads', $filename);
            $photo_names[] = $filename;
            $photo_paths[] = $filepath->getPathname();
        }




        $product = new Product();
        $product->productName = $request->name;
        $product->productPrice = $request->price;
        $product->saleType = $request->saleType;
        $product->shippingMethod = $request->shipping;
        $product->productType = $request->ProductType;
        $product->subCategory = $request->subCategory;
        $product->discount = $request->discount;
        $product->Badge = $request->badge;
        $product->productDescription = $request->description;
        $product->fileName = json_encode($photo_names);
        $product->filePath = json_encode($photo_paths);
        $product->save();
        return redirect()->back()->with('success', 'Product created successfully.');
    } else {

        // dd('no photo uploaded');
        return redirect()->back()->with('error', 'No files uploaded.');
    }
}


    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        $CategoryTv = NewType::where('NewTypeName', 'like', '%tlevision%')->get();
        $Categoryradio = NewType::where('NewTypeName', 'like', '%radio%')->get();
        $Categorycamera = NewType::where('NewTypeName', 'like', '%camera%')->get();
        $Categoryaccessory= NewType::where('NewTypeName', 'like', '%accessories%')->get();
        $CategoryRent = NewType::where('NewTypeName', 'like', '%tv%')->get();
        $arrival = Arrival::orderBy('created_at', 'desc')->paginate(3);


        $cart = session()->get('cart');

          $topElectronic = Product::where('discount', '>', '0')
         ->paginate(4);


        $topTelecommunication = Product::where('productType', 'dish')
            ->orWhere('productType', 'decoder')
            ->paginate(4);

         $accessories = Product::paginate(20);
         $lastData = Product::orderBy('created_at', 'desc')->paginate(30);

         $arrival = Arrival::orderBy('created_at', 'desc')->paginate(3);
         $data = "home";

            return view('welcome',compact(
                'topElectronic' ,
                'topTelecommunication',
                'accessories',
                'cart',
                'arrival',
                'CategoryTv',
                'Categoryradio',
                'Categorycamera',
                'Categoryaccessory',
                'CategoryRent',
                'arrival',
                'data',
                'lastData'

            ));


    }

    public function all()
    {
      $data = Product::all();
       return view('Admin.allProduct',compact('data'));
    }

       public function allArival()
    {
      $data = Arrival::all();
       return view('Admin.allArival',compact('data'));
    }
    public function removeFromCart($id)
    {
        $cart = session()->get('cart');



        if(isset($cart[$id])) {
            unset($cart[$id]);
            session()->put('cart', $cart);
        }

        return redirect()->back()->with('success', 'Product removed from cart successfully!');
    }


    public function showRequest()
    {
       return view('Admin.RequestedProducts');
    }

    public function showOrdered()
    {
        return view('Admin.OrderedProduct');
    }

    public function soldProduct()

    {

        $data = Payment::all();
        return view('Admin.SoldProduct',compact('data'));
    }

    public function addProduct(){
        $SavedType = NewType::all();
        return view('Admin.AddProduct',compact('SavedType'));
    }
    public function addNewType(){

          $category = NewType::all();

        return view('Admin.AddNewType',compact('category'));
    }

    public function storeNewType(Request $request){

        $newType =New  NewType();
        $newType->NewTypeName = $request->input('name');
        $newType->subCategory = $request->input('subCategory');

      $newType->save();

        return redirect()->route('newType');
    }


    public function updateType(Request $request, $id) {

        $newType = NewType::findOrFail($id);
        $newType->NewTypeName = $request->input('name');
        $newType->subCategory = $request->input('subCategory');
        $newType->save();

        return redirect()->route('newType');
    }

    public function shoeFeedback(){
        return view('Admin.feedBack');
    }




    public function loginOption(){
        return view('Admin.home');
    }

    public function adminHome(){

        $ibicuruzwaByose = Product::all()->count();
        $category= NewType::all()->count();
        $ibyaguzwe=Payment::all()->count();
        $ibyaguzweNone = Payment::whereDate('created_at', today())->count();
        $amafaranga = Payment::all()->sum('productPrice');
        $amafarangaNone = Payment::whereDate('created_at', today())->sum('productPrice');
        $abakiriya=Customer::all()->count();




        return view('Admin.home',compact(
            'ibicuruzwaByose',
            'category',
            'ibyaguzwe',
            'ibyaguzweNone',
            'amafaranga',
           'amafarangaNone',
           'abakiriya'  ));
    }





    public function showProductDetail($productId)

    {

        $CategoryTv = NewType::where('NewTypeName', 'like', '%tlevision%')->get();
        $Categoryradio = NewType::where('NewTypeName', 'like', '%radio%')->get();
        $Categorycamera = NewType::where('NewTypeName', 'like', '%camera%')->get();
        $Categoryaccessory= NewType::where('NewTypeName', 'like', '%accessories%')->get();
        $CategoryRent = NewType::where('NewTypeName', 'like', '%tv%')->get();
        $arrival = Arrival::orderBy('created_at', 'desc')->paginate(3);



        Session::forget('currentproductDetail');

        Session::put('currentproductDetail', $productId);
        $product = Product::findOrFail($productId);


        $array = json_decode($product->fileName);

        $relate = Product::where('productType',$product->productType)->get();
        $data = "home";
        return view('productDetails',compact(
        'product',
        'array',
        'relate',
        'CategoryTv',
        'Categoryradio',
        'Categorycamera',
        'Categoryaccessory',
        'CategoryRent',
        'arrival',
        'data'

    ));


    }
// kureba detaye zigicuruzwa



public function showCurrentProduct() {
    $data = Session::get('currentproductDetail');
    $result = Product::findOrFail($data);
    $productType = $result->productType; // Access productType directly

    // Fetch related products based on $productType
    $relate = Product::where('productType', $productType)->get();

    return response()->json([
        'result' => $result,
        'data' => $data,
        'relate' => $relate,
        'route' => 'result',
    ]);
}

public function showContacUs(){
  $CategoryTv = NewType::where('NewTypeName', 'like', '%tlevision%')->get();
        $Categoryradio = NewType::where('NewTypeName', 'like', '%radio%')->get();
        $Categorycamera = NewType::where('NewTypeName', 'like', '%camera%')->get();
        $Categoryaccessory= NewType::where('NewTypeName', 'like', '%accessories%')->get();
        $CategoryRent = NewType::where('NewTypeName', 'like', '%tv%')->get();
        $arrival = Arrival::orderBy('created_at', 'desc')->paginate(3);


        $cart = session()->get('cart');

          $topElectronic = Product::where('discount', '>', '0')
         ->paginate(4);


        $topTelecommunication = Product::where('productType', 'dish')
            ->orWhere('productType', 'decoder')
            ->paginate(4);

         $accessories = Product::paginate(28);


         $arrival = Arrival::orderBy('created_at', 'desc')->paginate(3);
         $data = "home";

            return view('contactUs',compact(
                'topElectronic' ,
                'topTelecommunication',
                'accessories',
                'cart',
                'arrival',
                'CategoryTv',
                'Categoryradio',
                'Categorycamera',
                'Categoryaccessory',
                'CategoryRent',
                'arrival',
                'data'

            ));

}


public function showAboutUs(){
  $CategoryTv = NewType::where('NewTypeName', 'like', '%tlevision%')->get();
        $Categoryradio = NewType::where('NewTypeName', 'like', '%radio%')->get();
        $Categorycamera = NewType::where('NewTypeName', 'like', '%camera%')->get();
        $Categoryaccessory= NewType::where('NewTypeName', 'like', '%accessories%')->get();
        $CategoryRent = NewType::where('NewTypeName', 'like', '%tv%')->get();
        $arrival = Arrival::orderBy('created_at', 'desc')->paginate(3);


        $cart = session()->get('cart');

          $topElectronic = Product::where('discount', '>', '0')
         ->paginate(4);


        $topTelecommunication = Product::where('productType', 'dish')
            ->orWhere('productType', 'decoder')
            ->paginate(4);

         $accessories = Product::paginate(28);


         $arrival = Arrival::orderBy('created_at', 'desc')->paginate(3);
         $data = "home";

            return view('about',compact(
                'topElectronic' ,
                'topTelecommunication',
                'accessories',
                'cart',
                'arrival',
                'CategoryTv',
                'Categoryradio',
                'Categorycamera',
                'Categoryaccessory',
                'CategoryRent',
                'arrival',
                'data'

            ));

}

public function showSelectedCategory($id)
{
    Session::forget('currentData');
    Session::put('currentData', $id);

    $CategoryTv = NewType::where('NewTypeName', 'like', '%tlevision%')->get();
    $Categoryradio = NewType::where('NewTypeName', 'like', '%radio%')->get();
    $Categorycamera = NewType::where('NewTypeName', 'like', '%camera%')->get();
    $Categoryaccessory= NewType::where('NewTypeName', 'like', '%accessories%')->get();
    $CategoryRent = NewType::where('NewTypeName', 'like', '%tv%')->get();

    $arrival = Arrival::orderBy('created_at', 'desc')->paginate(3);

    $data = "home";
    // dd($CategoryTv);



    switch ($id) {
        case 'support':

            return view('suportPage', compact(
            'CategoryTv',
            'Categoryradio',
            'Categorycamera',
            'Categoryaccessory',
            'CategoryRent',
            'arrival',
        'data'   ));
        case 'about':

            return view('about', compact(
            'CategoryTv',
            'Categoryradio',
            'Categorycamera',
            'Categoryaccessory',
            'CategoryRent',
            'arrival' ,'data'  ));
        case 'contact':

            return view('contactUs', compact(
            'CategoryTv',
            'Categoryradio',
            'Categorycamera',
            'Categoryaccessory',
            'CategoryRent',
            'arrival','data'   ));

        case 'sound':

            return view('soundPage', compact(
            'CategoryTv',
            'Categoryradio',
            'Categorycamera',
            'Categoryaccessory',
            'CategoryRent',
            'arrival','data'   ));

        case 'login':
            return view('login');
        default:
        $result = Product::where('subCategory', 'like', "%{$id}%")->get();
        return view('resultList', compact('result',
             'CategoryTv',
             'Categoryradio',
             'Categorycamera',
             'Categoryaccessory',
             'CategoryRent',
'arrival','data'


            ));
    }
}


public function showCurrentCategory(){

    $data = Session::get('currentData');
    $result = Product::where('productType', $data)->get();
      return  response()->json([
                    'result' => $result ,
                    'data'=>$data,
                    'route' =>'result',
                ]);
}

public function addToCart($id)
{
    $product = Product::find($id);

    if (!$product) {
        abort(404); // Or handle the error accordingly
    }

    // Retrieve cart from session or initialize an empty array
    $cart = session()->get('cart', []);

    // Initialize variable to count total quantity of products in cart
    $totalQuantity = 0;

    // If the product is already in cart, increment its quantity
    if (isset($cart[$id])) {
        $cart[$id]['quantity']++;
    } else {
        // If the product is not in cart, add it with its details
        $cart[$id] = [
            'id' => $product->id,
            'name' => $product->productName,
            'quantity' => 1,
            'price' => $product->productPrice,
            'image' => $product->fileName // Adjust based on your product model
        ];
    }

    // Update total quantity by iterating through cart items
    foreach ($cart as $item) {
        $totalQuantity += $item['quantity'];
    }

    // Store the updated cart and total quantity back into the session
    session()->put('cart', $cart);
    session()->put('cartTotalQuantity', $totalQuantity);

    return redirect()->back()->with('success', 'Product added to cart successfully!');
}


    /**
     * Show the form for editing the specified resource.
     */
    public function edit($productId)
    {
        $product = Product::find($productId);
        $SavedType = NewType::all();
        //  dd($product->productPrice);

        return view('Admin.adimiEdit',compact('product','SavedType'));
        // dd($product);
    }


        public function arival_edit($productId)
    {
        $product = Arrival::find($productId);
        $SavedType = NewType::all();
        //  dd($product->productPrice);

        return view('Admin.arrivalEdit',compact('product','SavedType'));
        // dd($product);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request ,$productId )
    {

            $rules = [
        'name' => 'required',
        'price' => 'required|numeric',
        'saleType' => 'required',
        'shipping' => 'required',
        'ProductType' => 'required',
        'subCategory' => 'required',
        'discount' => 'required|numeric',
        'badge' => ['required', Rule::in(['out', '0'])],
        'description' => 'required',
    ];


    $validatedData = $request->validate($rules);

        $product = Product::find($productId);

//   dd($request->input('description'));
            if($request->hasFile('file')) {

                $photo_names = [];
                $photo_paths = [];


                foreach ($request->file('file') as $photo) {
                    $filename = $photo->getClientOriginalName();
                    $filepath = $photo->move('uploads', $filename);
                    $photo_names[] = $filename;
                    $photo_paths[] = $filepath->getPathname();
                }




                $product =  Product::find($productId);
                $product->productName = $request->input('name');
                $product->productPrice = $request->input('price');
                $product->saleType = $request->input('saleType');
                $product->shippingMethod = $request->input('shipping');
                $product->productType = $request->input('ProductType');
                $product->subCategory = $request->input('subCategory');
                $product->discount = $request->input('discount');
                $product->badge = $request->input('badge');
                $product->productDescription = $request->input('description');
                $product->fileName = json_encode($photo_names);
                $product->filePath = json_encode($photo_paths);

                $product->save();
               return redirect()->route('all')->with('success', 'Product Updated successfully.');
            } else {

                           $product =  Product::find($productId);
                $product->productName = $request->input('name');
                $product->productPrice = $request->input('price');
                $product->saleType = $request->input('saleType');
                $product->shippingMethod = $request->input('shipping');
                $product->productType = $request->input('ProductType');
                $product->subCategory = $request->input('subCategory');
                $product->discount = $request->input('discount');
                $product->Badge = $request->input('badge');
                $product->productDescription = $request->input('description');
                 $product->save();
                   return redirect()->route('all')->with('success', 'Product Updated successfully.');
            }


    }



public function arival_update(Request $request ,$productId )
    {

            $rules = [
        'name' => 'required',
        'price' => 'required|numeric',
        'saleType' => 'required',
        'shipping' => 'required',
        'ProductType' => 'required',
        'discount' => 'required|numeric',
        'badge' => ['required', Rule::in(['out', '0'])],
        'description' => 'required',
    ];


    $validatedData = $request->validate($rules);

        $product = Arrival::find($productId);

//   dd($request->input('description'));
            if($request->hasFile('file')) {

                $photo_names = [];
                $photo_paths = [];


                foreach ($request->file('file') as $photo) {
                    $filename = $photo->getClientOriginalName();
                    $filepath = $photo->move('uploads', $filename);
                    $photo_names[] = $filename;
                    $photo_paths[] = $filepath->getPathname();
                }




                $product =  Product::find($productId);
                $product->productName = $request->input('name');
                $product->productPrice = $request->input('price');
                $product->saleType = $request->input('saleType');
                $product->shippingMethod = $request->input('shipping');
                $product->productType = $request->input('ProductType');
                $product->discount = $request->input('discount');
                $product->badge = $request->input('badge');
                $product->productDescription = $request->input('description');
                $product->fileName = json_encode($photo_names);
                $product->filePath = json_encode($photo_paths);

                $product->save();
               return redirect()->route('all')->with('success', 'Product Updated successfully.');
            } else {

                           $product =  Product::find($productId);
                $product->productName = $request->input('name');
                $product->productPrice = $request->input('price');
                $product->saleType = $request->input('saleType');
                $product->shippingMethod = $request->input('shipping');
                $product->productType = $request->input('ProductType');
                $product->discount = $request->input('discount');
                $product->Badge = $request->input('badge');
                $product->productDescription = $request->input('description');
                 $product->save();
                   return redirect()->route('all')->with('success', 'Product Updated successfully.');
            }


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($productId)
    {
$data = Product::find($productId);
$data->delete();
return redirect()->back()->with('success','Product deleted successfully');
    }


        public function arival_delete($productId)
    {
$data = Arrival::find($productId);
$data->delete();
return redirect()->back()->with('success','Product deleted successfully');
    }



    public function search(Request $request){

        $CategoryTv = NewType::where('NewTypeName', 'like', '%tlevision%')->get();
        $Categoryradio = NewType::where('NewTypeName', 'like', '%radio%')->get();
        $Categorycamera = NewType::where('NewTypeName', 'like', '%camera%')->get();
        $Categoryaccessory= NewType::where('NewTypeName', 'like', '%accessories%')->get();
        $CategoryRent = NewType::where('NewTypeName', 'like', '%tv%')->get();

        $arrival = Arrival::orderBy('created_at', 'desc')->paginate(3);


        $searchTerm = $request->input('search');

        $result = Product::where('productName', 'like', "%{$searchTerm}%")
                           ->orWhere('productPrice', 'like', "%{$searchTerm}%")
                           ->orWhere('saleType', 'like', "%{$searchTerm}%")
                           ->orWhere('shippingMethod', 'like', "%{$searchTerm}%")
                           ->orWhere('productType', 'like', "%{$searchTerm}%")
                           ->orWhere('productDescription', 'like', "%{$searchTerm}%")
                           ->get();
                     $id=$searchTerm;

// dd($searchTerm );
$data = "showTv";
        return view('searchResult', compact(
            'result',
            'id',
            'CategoryTv',
            'Categoryradio',
            'Categorycamera',
            'Categoryaccessory',
            'CategoryRent',
            'arrival','data'
        ));

    }


}
