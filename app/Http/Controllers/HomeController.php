<?php

namespace App\Http\Controllers;

use App\Models\Hero;
use App\Models\Service;
use App\Models\Business;
use App\Models\Project;

class HomeController extends Controller
{
    public function index()
    {
        $hero = Hero::where('active', 1)->first();
        $services = Service::where('active', 1)->get();
        $business = Business::where('active', 1)->first();
        $projects = Project::where('active', true)->get();
        return view('main/index',compact('hero','services','business','projects'));
    }
}
