<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\Team;
use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function index()
    {
        $cat = [0 => ['title' => 'Kits & Consumables', 'description' => 'The perfect solution to get any routine SNP directly from the primary sample with a CE-IVD solution.', 'image' => asset('/images/lacar-48.jpg'), 'link' => '/'], 1=>['title' => 'Solutions', 'description' => 'The perfect solution to handle low-medium amount of samples in a short time with LC-GENIE III, ease-up your routine genetic testing flow with qPCR platform and medium to very high throughput with a fully CE-IVD plug-and-play solution at a reasonable price with automated system.', 'image' => asset('/images/lacar-28.jpg') , 'link' => '/solutions'], 2 => ['title' => 'Software', 'description' => 'The perfect solution to automatically interpret your result from any qPCR machine', 'image' => asset('/images/lacar-36.jpg') , 'link' => '/software'], 3 => ['title' => 'Services', 'description' => 'The perfect solution to get customized constitutional genetic assays on demand', 'image' => asset('/images/lacar-3.jpg'), 'link' => '/services']];

        $teams = Team::all();

        return view('home', compact('cat', 'teams'));
    }

    public function jobs()
    {
        $jobs = Job::all();
        return view('jobs.index', compact('jobs'));
    }
}
