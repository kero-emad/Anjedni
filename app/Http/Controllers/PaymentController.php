<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Models\Offer;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

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
    public function create($id)
    {
        //
        $offer=Offer::find($id);
        return View('payments.create',compact('offer'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'visanumber'=>"required|digits:16",
            'CVV'=>"required|digits:3"
        ]);
        Payment::create([
            'user_id'=>Auth::user()->id,
            'service_request_id'=>$request->service_request_id,
            'offer_id'=>$request->offer_id,
            'price'=>$request->price,
            'visanumber'=>$request->visanumber,
            'CVV'=>$request->CVV
        ]);

        $offer=Offer::find($request->offer_id);
        $offer->status='accepted';
        $offer->save();
        $offer->ServiceRequests->update(['status' => 'accepted']);
        $offer->save();
        return View("home");
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
}
