<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use \Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    public function login()
    {
        return view('admin.login');
    }

    public function loginForm(Request $request)
    {
        $data = [
            'email' => $request->input('email'),
            'password' => $request->input('password')
        ];

        if (Auth::Attempt($data)) {
            return to_route('admin.page');
        } else {
            Session::flash('error', 'Email dan password salah');
            return to_route('music.index');
        }
    }

    public function index() {
        return view('admin.index');
    }
}
