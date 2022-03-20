<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use App\Tutorial;

class UserController extends Controller
{
    public function showWelcomePage(){
    	return view('user-dashboard.welcome');
    }

    public function showProductionResourcesPage(){
    	return view('user-dashboard.production-resources');
    }

    public function showGalleryPage(){
        return view('user-dashboard.gallery');
    }

    public function showForumsMainPage(){
    	return view('user-dashboard.forums');
    }

    public function showMyAccountPage(){
        return view('user-dashboard.my-account');
    }
}
