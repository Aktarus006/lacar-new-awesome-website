<?php

namespace App\Http\Controllers;

use App\Models\Kit;
use Illuminate\Http\Request;

class KitController extends Controller
{
    public function __construct()
    {
    }

    public function show($slug)
    {
        $kit = Kit::with('categories')->where('slug', $slug)->firstOrFail();
        return view('kits.view', ['kit' => $kit]);
    }
}
