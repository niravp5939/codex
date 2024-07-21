<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function showWebsite()
    {
        return view('website.index');
    }
    
    public function about()
    {
        return view('website.about');
    }

    public function resume()
    {
        return view('website.resume');
    }

    public function services()
    {
        return view('website.services.services');
    }
    
    public function webDev()
    {
        return view('website.services.web-development');
    }

    public function webDes()
    {
        return view('website.services.web-designing');
    }

    public function devOps()
    {
        return view('website.services.devops-offering');
    }

    public function projects()
    {
        return view('website.projects.projects');
    }

    public function hrms()
    {
        return view('website.projects.hrms');
    }

    public function ecom()
    {
        return view('website.projects.e-commerce');
    }

    public function contact()
    {
        return view('website.contact');
    }
}
