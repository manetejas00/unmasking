<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function signIn()
    {
        return view('pages/authentication/signIn');
    }
    
    public function resetPassword()
    {
        return view('pages/authentication/resetPassword');
    }

    public function signUp()
    {
        return view('pages/authentication/signUp');
    }

    public function portfolio01()
    {
        return view('pages/projects/portfolio01');
    }

    public function portfolio02()
    {
        return view('pages/projects/portfolio02');
    }

    public function singlePortfolio()
    {
        return view('pages/projects/singlePortfolio');
    }

    public function service()
    {
        return view('pages/services/service');
    }

    public function singleService()
    {
        return view('pages/services/singleService');
    }

    public function team()
    {
        return view('pages/team/team');
    }

    public function singleTeam()
    {
        return view('pages/team/singleTeam');
    }

    public function errorPage()
    {
        return view('pages/utility/errorPage');
    }

    public function comingSoon()
    {
        return view('pages/utility/comingSoon');                                                   
    }

    public function faq()
    {
        return view('pages/faq');
    }

    public function pricing()
    {
        return view('pages/pricing');
    }

    public function testimonial()
    {
        return view('pages/testimonial');
    }

    public function about()
    {
        return view('pages/about');
    }

    public function contact()
    {
        return view('pages/contact');
    }
}
