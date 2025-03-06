<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
class UserController extends Controller
{
    //
    public function register()
    {
        return view('user.register');
    }

    public function handleRegister(Request $request)
    {
        $data=$request->validate([
            'name'=>'required|string',
            'email'=>'required|email|unique:users,email',
            'phone' => 'required|numeric|unique:users,phone',
            'role' => 'required|in:customer,serviceProvider',
            'address'=>'required|string',
            'password'=>'required'
            
        ]);

        if ($request->hasFile('image')){
            $image=$request->file('image');
            $extension=$image->extension();
            $filename="user".time().'.'.$extension;
            $image->move(public_path('uploads/images'),$filename);

        }
        else
        {
            $filename='user.png';
        }

        $image=$filename;
        User::create(
            [
                'name'=>$data['name'],
                'email'=>$data['email'],
                'password'=>Hash::make($data['password']),
                'phone'=>$data['phone'],
                'role'=>$data['role'],
                'Address'=>$data['address'],
                'image'=>$image
            ]
            );
            return View('user.login');
    }

    public function login()
    {
        return view('user.login');
    }

    public function handleLogin(Request $request)
    {
        $data=$request->validate([
            'email'=>'required|email',
            'password'=>'required'
        ]);

        if (!Auth::attempt($data))
        {
            return back()->withErrors([
                'email'=>'The provided credentails are incorrect',
            ])->withInput($request->only('email'));
        }
         return View ('home');
    }
    public function logout()
    {
        Auth::logout();
        return View('welcome');
    }
    public function index()
    {
        $users=User::all();
        return View('user.index',compact('users'));
    }

    public function destroy($id)
    {
        $user=User::find($id);
        $user->delete();
        return redirect()->back();
    }
}
