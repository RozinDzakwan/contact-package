<?php

namespace Rozin\Contact\Http\Controllers;

use App\Http\Controllers\Controller;
use Rozin\Contact\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function viewLogin()
    {
        return view('contact::login.login');
    }

    public function viewRegister()
    {
        return view('contact::login.register');
    }

    public function register(Request $request)
    {
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'Regular',
        ]);
        return redirect('/login');
    }

    public function login(Request $request)
    {
        $checkUser = User::where('email', $request->email)->first();
        dd($checkUser->role);
        if ($checkUser) {
            //
        }
    }
}
