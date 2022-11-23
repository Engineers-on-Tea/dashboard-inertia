<?php

namespace App\Modules\Admin\Controllers;

use Inertia\Inertia;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    protected function show()
    {
        return Inertia::render('Admin/Login');
    }

    protected function login(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'email' => 'required|email|exists:users,email',
                'password' => 'required',
            ],
            [
                'email.required' => 'Email is required',
                'email.email' => 'Email is invalid',
                'email.exists' => 'Email does not exists',
                'password.required' => 'Password is required',
            ]
        );

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator->errors());
        }

        $credentials = $request->only('email', 'password');

        if (auth()->attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended(RouteServiceProvider::ADMIN);
        }
    }

    protected function logout(Request $request)
    {
        auth()->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('dashboard.login.show');
    }
}
