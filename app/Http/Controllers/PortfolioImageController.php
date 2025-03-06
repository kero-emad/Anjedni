<?php

namespace App\Http\Controllers;

use App\Models\PortfolioImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
class PortfolioImageController extends Controller
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
    $request->validate([
        'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        'title' => 'nullable|string|max:255',
        'description' => 'nullable|string',
    ]);

    $user = Auth::user();

    if ($request->hasFile('image')) {
        $image = $request->file('image');
        $extension = $image->extension();
        $filename = "portfolio_" . time() . '.' . $extension;
        $image->move(public_path('uploads/images'), $filename);
    } else {
        $filename = 'default.jpg'; 
    }

    PortfolioImage::create([
        'provider_id' => Auth::id(),
        'image' => $filename,
        'title' => $request->title,
        'description' => $request->description,
    ]);

    return redirect()->back();
}

    

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
        $user=User::find($id)->load('images');
        return View('portfolio.show',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
        //
        $user = Auth::user()->load('images');
        return view('portfolio.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PortfolioImage $portfolioImage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $image = PortfolioImage::findOrFail($id);

        if ($image->provider_id !== Auth::id()) {
            return redirect()->back();
        }

        $image->delete();

        return redirect()->back();
    }
}

