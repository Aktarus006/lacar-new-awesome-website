<?php

namespace App\Http\Controllers;

use App\Models\Document;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function __construct()
    {
    }
    public function restricted()
    {
        $documents = \App\Models\Document::all();
        return view('layouts.pages.restrictedAreaIndex', compact('documents'));
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

        return redirect('/login');
    }
}
