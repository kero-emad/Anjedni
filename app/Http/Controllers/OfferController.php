<?php

namespace App\Http\Controllers;

use App\Models\Offer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OfferController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $offers=Offer::all();
        return View('offers.index',compact('offers'));
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
        $request->validate([
            'message'=>'required|string',
            'price'=>'numeric|required'
        ]);
            offer::create([
                'message'=>$request['message'],
                'price'=>$request['price'],
                'service_request_id'=>$request['requestID'],
                'provider_id'=>Auth::user()->id
            ]);
            return redirect()->route('requests.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Offer $offer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Offer $offer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Offer $offer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $offer=Offer::find($id);
        $offer->delete();
        return redirect()->back();
    }
}
