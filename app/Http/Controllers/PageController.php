<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function index()
    {
        $categories = [0 => ['title' => 'Kits & Consumables', 'description' => 'The perfect solution to get any routine SNP directly from the primary sample with a CE-IVD solution.', 'image' => 'https://images.unsplash.com/photo-1606206591513-adbfbdd7a177?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MjV8fGxhYnxlbnwwfHwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=60'], 1=>['title' => 'Solutions', 'description' => 'The perfect solution to handle low-medium amount of samples in a short time with LC-GENIE III, ease-up your routine genetic testing flow with qPCR platform and medium to very high throughput with a fully CE-IVD plug-and-play solution at a reasonable price with automated system.', 'image' => 'https://images.unsplash.com/photo-1579154392429-0e6b4e850ad2?ixid=MnwxMjA3fDB8MHxzZWFyY2h8OXx8cGNyfGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=60'], 2 => ['title' => 'Software', 'description' => 'The perfect solution to automatically interpret your result from any qPCR machine', 'image' => 'https://images.unsplash.com/photo-1487058792275-0ad4aaf24ca7?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTc1fHxzb2Z0d2FyZXxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=800&q=60'], 3 => ['title' => 'Services', 'description' => 'The perfect solution to get customized constitutional genetic assays on demand', 'image' => 'https://images.unsplash.com/photo-1576156650572-91dc9f7b8f19?ixid=MnwxMjA3fDB8MHxzZWFyY2h8NjV8fGxhYnxlbnwwfHwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=60']];

        return view('home', compact('categories'));
    }
}
