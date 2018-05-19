<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Template;
use App\Package;

class PagesController extends Controller
{
    public function index()
    {
        return view('pages.welcome');
    }

    public function packages()
    {
        $packages = Package::all();
        
        return view('pages.packages')->with('packages', $packages);
    }

    public function templates()
    {
        $templates = Template::all();
        return view('pages.templates')->with('templates', $templates);
    }

    public function contact()
    {
        return view('pages.contact');
    }
    
    public function contactForm()
    {
        
    }
}
