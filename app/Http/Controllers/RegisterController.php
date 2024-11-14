<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LoginRegister;
use File;

class RegisterController extends Controller
{
            function getdata_reg(){
                return view('register');
            }

            function postdata_reg(Request $req){
                $result=$req->all();
                $email=$result['email'];
                $password=$result['password'];
                if(LoginRegister::where("email","=",$email)->where("password","=",$password)->exists())
                {
                    return redirect()->route("home")->with('jsAlert','User are already exist please try to login');
                }
                else
                {   if($req->hobby==null)
                    {
                        $filename=time().".".$req->file('profile')->getClientOriginalExtension();
                        $path=$req->file('profile')->storeAs('images',$filename,'public');
                        $result["profile"]='/storage/'.$path;
                        $result['hobby']='no any hobby selected';
                        LoginRegister::create($result);
                        return redirect()->route("home")->with('jsAlert','Register Sucessfully try to login');

                    }
                    else
                    {
                        $filename=time().".".$req->file('profile')->getClientOriginalExtension();
                        $path=$req->file('profile')->storeAs('images',$filename,'public');
                        $result["profile"]='/storage/'.$path;
                        $result['hobby']=implode(',',$result['hobby']);
                        LoginRegister::create($result);
                        return redirect()->route("home")->with('jsAlert','Register Sucessfully try to login');
                    }

                }
            }

            function update_post_data_reg($id,$email){
                $result=LoginRegister::where("id","=",$id)->where("email","=",$email)->first();
                return view('update',['result'=>$result]);
            }
            function update_get_data_reg(Request $req){
                if($req->profile==null && $req->hobby!=null){
                    LoginRegister::where("id","=",$req->id)->update([
                        'name'=>$req->name,
                        'email'=>$req->email,
                        'phone'=>$req->phone,
                        'password'=>$req->password,
                        'gender'=>$req->gender,
                        'birthday'=>$req->birthday,
                        'city'=>$req->city,
                        'hobby'=>implode(",",$req->hobby),
                        'adress'=>$req->adress,
                    ]);
                    return redirect()->route("home")->with('jsAlert','profile updated Sucessfully try to login');
                }
                elseif($req->profile!=null && $req->hobby==null){
                    $imgpath=LoginRegister::where("id","=",$req->id)->first()->profile;
                    File::delete(public_path($imgpath));

                    $filename=time().".".$req->file('profile')->getClientOriginalExtension();
                    $path=$req->file('profile')->storeAs('images',$filename,'public');

                    LoginRegister::where("id","=",$req->id)->update([
                        'name'=>$req->name,
                        'email'=>$req->email,
                        'phone'=>$req->phone,
                        'password'=>$req->password,
                        'gender'=>$req->gender,
                        'birthday'=>$req->birthday,
                        'city'=>$req->city,
                        'adress'=>$req->adress,
                        'profile'=>'/storage/'.$path,
                    ]);
                    return redirect()->route("home")->with('jsAlert','profile updated Sucessfully try to login');
                }
                elseif($req->profile==null && $req->hobby==null){
                    LoginRegister::where("id","=",$req->id)->update([
                        'name'=>$req->name,
                        'email'=>$req->email,
                        'phone'=>$req->phone,
                        'password'=>$req->password,
                        'gender'=>$req->gender,
                        'birthday'=>$req->birthday,
                        'city'=>$req->city,
                        'adress'=>$req->adress,
                    ]);
                    return redirect()->route("home")->with('jsAlert','profile updated Sucessfully try to login');
                }
                elseif($req->profile!=null && $req->hobby!=null){

                    $imgpath=LoginRegister::where("id","=",$req->id)->first()->profile;
                    File::delete(public_path($imgpath));

                    $filename=time().".".$req->file('profile')->getClientOriginalExtension();
                    $path=$req->file('profile')->storeAs('images',$filename,'public');


                    LoginRegister::where("id","=",$req->id)->update([
                        'name'=>$req->name,
                        'email'=>$req->email,
                        'phone'=>$req->phone,
                        'password'=>$req->password,
                        'gender'=>$req->gender,
                        'birthday'=>$req->birthday,
                        'city'=>$req->city,
                        'hobby'=>implode(",",$req->hobby),
                        'adress'=>$req->adress,
                        'profile'=>'/storage/'.$path,
                    ]);
                    return redirect()->route("home")->with('jsAlert','profile updated Sucessfully try to login');
                }
                
                
            }

            function delete_post_data_reg($id,$email){

                $imgpath=LoginRegister::where("id","=",$id)->where("email","=",$email)->first()->profile;
                File::delete(public_path($imgpath));
                LoginRegister::where("id","=",$id)->where("email","=",$email)->delete();
                return redirect()->route("home")->with('jsAlert','profile delete Sucessfully');;
            }

}
