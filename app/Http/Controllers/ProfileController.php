<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Profile;

class ProfileController extends Controller {
    public function edit() {
        $user = Auth::user();
        return view('profile.edit', compact('user'));
    }

    public function update(Request $request) {
        $user = Auth::user();

        $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = "profile_" . time() . '.' . $image->extension();
            $image->move(public_path('uploads/images'), $filename);
            $user->image = $filename;
        }

        $user->name = $request->name;
        $user->save();

        return redirect()->back()->with('success', 'Profile updated successfully.');
    }
}
