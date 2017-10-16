<?php

namespace Stir\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller as Controller;

class PageController extends Controller
{
    public function getWelcome()
    {
      return view('stir::welcome');
    }

    public function getDashboard()
    {
      return view('stir::dashboard');
    }

    public function getFaqs()
    {
      $faqs = \Stir\Faq::all();
      return view('stir::faqs')->with([
        'faqs'=>$faqs
        ]);
    }

    public function getContact()
    {
      return view('stir::contact');
    }

    public function getFeatures()
    {
      return view('stir::features');
    }

    public function getLogout()
    {
      return \Auth::logout();
    }

    public function getLegal()
    {
      return view('stir::legal');
    }

}
