<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class GeneralController extends Controller
{
    public function index(){
    	return view('login');
    }

    public function payment(){
    	return view('payment');
    }

    public function success(){
    	return view('success');
    }

    public function errors(){
        return view('errors');
    }

    public function passwordReset(){
    	return view('password-reset');
    }

   
}
