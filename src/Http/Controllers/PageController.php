<?php

namespace Stir\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller as Controller;

class PageController extends Controller
{
    public function getWelcome()
    {
      return view('stir::page.welcome');
    }

    public function getDashboard()
    {
      return view('stir::dashboard');
    }

    public function getFaqs()
    {
      $faqs = \Stir\Faq::all();
      return view('stir::page.faqs')->with([
        'faqs'=>$faqs
        ]);
    }

    public function getContact()
    {
      return view('stir::page.contact');
    }

    public function getFeatures()
    {
      return view('stir::page.features');
    }

    public function getLogout()
    {
      return \Auth::logout();
    }

    public function getLegal()
    {
      return view('stir::page.legal');
    }



}
