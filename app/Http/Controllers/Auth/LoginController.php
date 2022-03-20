<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

        public function login(Request $request){
          $this->validate(request(),[
                'username'=>'required',
                'password'=>'required',
             ]
           );

        /*authentication*/
        if(auth()->attempt(['phone'=>request('username'),'password'=>request('password'),
            'user_type'=>'student','access'=>1])){
                 return view('user-dashboard.welcome'); 
           }
        else if(auth()->attempt(['email'=>request('username'),'password'=>request('password'),
             'user_type'=>'student','access'=>1])){
                return view('user-dashboard.welcome');     
           }
        else if(auth()->attempt(['phone'=>request('username'),'password'=>request('password'),
            'user_type'=>'admin','access'=>1])){
                  return view('admin-dashboard.admin-main');   
           }
       else if(auth()->attempt(['email'=>request('username'),'password'=>request('password'),
            'user_type'=>'admin','access'=>1])){
                  return view('admin-dashboard.admin-main');   
           }
       else{
             session()->flash('message',"set");
             return view('/login');
           }

     }

     public function logout(){
        auth()->logout();
        return redirect('login');
     }
}
