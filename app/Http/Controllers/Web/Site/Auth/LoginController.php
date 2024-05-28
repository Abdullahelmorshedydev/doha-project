<?php

namespace App\Http\Controllers\Web\Site\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Web\Site\Auth\LoginRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function index()
    {
        return view('site.pages.auth.login');
    }

    public function login(LoginRequest $request)
    {
        if (!Auth::attempt($request->validated())) {
            return redirect()->back()->with('error', 'Credential invalid');
        }
        $request->session()->regenerate();
        return redirect()->route('index');
    }

    public function logout ()
    {
        Auth::logout();
        return back();
    }
}
