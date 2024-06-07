<?php

namespace App\Http\Controllers\Web\Site\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Web\Site\Auth\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('site.pages.auth.register');
    }

    public function register (RegisterRequest $request)
    {
        $data = $request->validated();
        $data['password'] = Hash::make($request->password);
        $user = User::create($data);
        Auth::login($user);
        return redirect()->route('index');
    }
}
