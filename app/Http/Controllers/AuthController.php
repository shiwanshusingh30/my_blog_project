<?php
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\Rules\Password;
class AuthController extends Controller
{
    public function index()
    {
        return view('admin.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            return redirect()->intended('/dashboard'); 
        }

        return redirect()->route('login')->withErrors('Login details are not valid.');
    }

    public function register_view()
    {
        return view('admin.register');
    }

    public function register(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => [
                'required',
                'confirmed',
                Password::min(8)
                    ->letters()
                    ->numbers()
                    ->symbols()
                    ->mixedCase(),
            ],
        ]);


        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        return redirect()->route('login')->with('success', 'Registration successful.');
    }

    public function logout()
    {
        Auth::logout();
        Session::flash('success', 'Logged out successfully!');
        return redirect()->route('home');
    }
}

