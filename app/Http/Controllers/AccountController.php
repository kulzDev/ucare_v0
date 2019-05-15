<?php

namespace ucare\Http\Controllers;

use Illuminate\Http\Request;

class AccountController extends Controller
{
    //creating system user accounts
    

    public function show(){
        return view('admin.accounts');
    }

}
