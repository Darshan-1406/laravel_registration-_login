<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LoginRegister;

class LoginController extends Controller
{
  
    function postdata_login(Request $req){
        $result=$req->all();
        $email=$result['email'];
        $password=$result['password'];
       if(LoginRegister::where("email","=",$email)->exists())
        {
            if(LoginRegister::where("email","=",$email)->where("password","=",$password)->exists())
            {   
                $result=LoginRegister::where("email","=",$email)->where("password","=",$password)->first();
                 return view('login',['result'=>$result]);
            }
      
            else
            {  
                
               return redirect()->route('home')->with('jsAlert','password is wrong');
            }
        }
       else
       {
            return redirect()->route("home")->with('jsAlert','email is wrong or your are not Registered User');
       }
    }

    
}
