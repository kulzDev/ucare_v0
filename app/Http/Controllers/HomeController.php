<?php

namespace ucare\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {    
        /*  

        if (Auth::user()->isAdmin()) {

            return view('admin.adminTest');
       
        } else  if (Auth::user()->isReceptionist()) {

            return view('reception.receptionTest');
            
        }else  if (Auth::user()->isMarketing()) {

            return view('marketing.marketingTest');
        
        }else{

            return redirect('/'); 
        }
            */

       // return view('home');

       return view('admin.dashboard');


    }
}
