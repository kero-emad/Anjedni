<?php

namespace App\Http\Controllers;

use App\Models\Time;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class TimeController extends Controller
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
        $times=Auth::user()->Times()->latest()->get();    
        return View('times.create',compact('times'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'datetime' => 'required|date|after:today',
        ]);
    
        Time::create([
            'provider_id' => Auth::user()->id,
            'datetime' => $request->datetime,
        ]);
    
        return redirect()->route('times.create')->with('success', 'Time slot created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Time $time)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Time $time)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Time $time)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $time=Time::find($id);
        $time->delete();
        return redirect()->back();
    }
}
