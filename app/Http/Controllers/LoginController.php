<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


class LoginController extends Controller
{

    public function showLoginForm()
    {
        return view('login');
    }
    public function login(Request $request)
    {

        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            $userCountry = $this->getUserCountry();

            // Check the user's country and redirect accordingly
            switch ($userCountry) {
                case 'Nigeria':
                    return redirect('/page-a');
                case 'Ghana':
                    return redirect('/page-b');
                case 'United States':
                    return redirect('/page-c');
                default:
                    return redirect('/page-d');
            }
        }

        return redirect('/login')->with('error', 'Invalid login credentials.');
    }

    protected function getUserCountry()
    {
        if (auth()->check()) {
            // Get the authenticated user's country from the 'country' column
            return auth()->user()->country;
        }
        return 'DefaultCountry';
    }

    public function logout()
    {
        Auth::logout();

        return redirect('/');
    }
}
