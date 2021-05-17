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
        $iso = Document::where('type', 1);
        $instructions = Document::where('type', 2);
        return view('layouts.pages.restrictedAreaIndex', compact('isos', 'instructions'));
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
