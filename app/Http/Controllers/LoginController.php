<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function __construct()
    {
    }

    public function createForm()
    {
        return view('layouts.pages.restrictedAreaLogin');
    }

    public function login(Request $request)
    {
        $auth = resolve('littlegatekeeper');

        $loginSuccess = $auth->attempt($request->only(
            'username',
            'password'
        ));

        if ($loginSuccess) {
            return redirect('/restricted');
        }

        dd($loginSuccess);
    }
}
