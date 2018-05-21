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
    
        public function contactForm(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'name' => 'required',
            'messageBody' => 'required',
            'reason' => 'required'
            ]);
        $data = array(
            'email' => $request->email,
            'name' => $request->name,
            'messageBody' => $request->messageBody,
            'reason' => $request->reason
        );
        Mail::send('alerts.contactEmail', $data, function($message) use ($data){
            $message->from($data['email']);
            $message->to('contact@rdswebdesigns.com);
            $message->subject($data['messageBody']);
        });
        return redirect('/')->with('success', 'Your Email Was Sent Successfully');
    }
}
