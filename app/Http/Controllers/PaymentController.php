<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Models\Product;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Http\Response as HttpResponse;
use Illuminate\Support\Facades\Auth;
use App\Utils\ObjectFromArray;
use Paypack\Paypack;

class PaymentController extends Controller
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
    public function show(Payment $payment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Payment $payment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Payment $payment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Payment $payment)
    {
        //
    }

    public function process()
    {

    }




    public function webhookVerified(Request $request)
    {
        $secret = getenv('PAYPACK_WEBHOOK_SECRET') ? getenv('PAYPACK_WEBHOOK_SECRET') : '';
        $hash = base64_encode(hash_hmac('sha256', $request->getContent(), $secret, true));
        $hmacHeader = $request->header('X-Paypack-Signature');

        if (empty($hmacHeader)) {
            return response()->json([
                'message' => 'Missing webhook signature header',
                'success' => false,
            ], Response::HTTP_UNAUTHORIZED);
        }

        if ($hash !== $hmacHeader) {
            return response()->json([
                'message' => 'Invalid webhook signature',
                'success' => false,
            ], Response::HTTP_UNAUTHORIZED);
        }

        return null;
    }

    public function processPaypackWebhook(Request $request)
    {
        // Verify webhook signature
        $verification = $this->webhookVerified($request);

        // Handle verification failure
        if ($verification !== null) {
            return $verification;
        }

        // Get payment data from request
        $payment = ObjectFromArray::createObject($request->all());
        $transaction = null;

        // Update payment status if ref is provided
        if (isset($payment->data) && isset($payment->data->ref)) {
            $transaction = Payment::where('ref', $payment->data->ref)->first();

            if ($transaction) {
                $transaction->status = (string) $payment->data->status;
                $transaction->update();
            } else {
                // Transaction not found
                logger()->error("Transaction with ref " . $payment->data->ref . " not found");
                return response()->json([
                    'success' => false,
                    'message' => 'Transaction with ref ' . $payment->data->ref . ' not found',
                    "ref" => $payment->data->ref ?? null,
                    "data" => $payment->data ?? null,
                ], Response::HTTP_NOT_FOUND);
            }
        }

        return response()->json([
            'message' => 'Webhook processed successfully',
            'success' => true,
        ], Response::HTTP_OK);
    }




    public function pay(Request $request)
    {
        $userID = Auth::id();

        if ((int) $request->input('amount') <= 0) {
            return redirect()->back()->with('error', 'Insufficient money');
        } else {
            $paypackInstance = $this->paypackConfig()->Cashin([
                "amount" => $request->input('amount'),
                "phone" => $request->input('phone'),
            ]);

            if (isset($paypackInstance['error'])) {
                return redirect()->back()->with('error', $paypackInstance['error']);
            } else {
                if ($request->input('PayType') == 'form') {
                    $payInfo = new Payment();
                    $payInfo->name = $request->input('firstName');
                    $payInfo->last_name = $request->input('lastName');
                    $payInfo->email = $request->input('email');
                    $payInfo->phone = $request->input('phone');
                    $payInfo->productQuantity = $request->input('quantity');
                    $payInfo->userId = $userID;
                    $payInfo->status = 'Pending';
                    $payInfo->productId = $request->input('id');
                    $payInfo->productPrice = $request->input('quantity') * $request->input('amount');
                    $payInfo->ref = $paypackInstance['ref'];
                    $payInfo->save();

                    return redirect()->back();
                } else if ($request->input('PayType') == 'cart') {
                    $cart = session('cart');

                    if (!$cart) {
                        return redirect()->back()->with('error', 'Cart is empty!');
                    }

                    foreach ($cart as $productId => $item) {
                        Payment::create([
                            'name' => auth()->user()->first_name,
                            'last_name' => auth()->user()->name,
                            'email' => auth()->user()->email,
                            'phone' => $request->input('phone'),
                            'productQuantity' => $item['quantity'],
                            'userId' => auth()->user()->id,
                            'status' => 'Pending',
                            'productId' => $item['id'],
                            'productPrice' => $request->input('amount'),
                            'ref' => $paypackInstance['ref'],
                        ]);
                    }

                    session()->forget('cart');
                    session()->forget('cartTotalQuantity');

                    return redirect()->back();
                }
            }
        }
    }


    public function paypackConfig()
    {
        $paypack = new Paypack();

        $paypack->config([
            'client_id' => env('PAYPACK_CLIENT_ID'),
            'client_secret' => env('PAYPACK_CLIENT_SECRET'),
        ]);

        return $paypack;
    }



    public function storeCartData()
    {
        $cart = session('cart');

        if (!$cart) {
            return redirect()->back()->with('error', 'Cart is empty!');
        }

        foreach ($cart as $productId => $item) {
            Product::create([
                'name' => $item['name'],
                'quantity' => $item['quantity'],
                'price' => $item['price'],
            ]);
        }

        // Clear the cart after storing data in the Product table
        session()->forget('cart');
        session()->forget('cartTotalQuantity');

        return redirect()->route('desired_route')->with('success', 'Cart data stored successfully!');
    }




}
