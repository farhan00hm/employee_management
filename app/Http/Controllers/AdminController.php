<?php

namespace App\Http\Controllers;

use App\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
//use App\Admin;

class AdminController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
    }

    public function dashboard(Request $request){

        $ema = $request->email;
        $pas = $request->password;
////
//        $admin = new Admin();
//        $admin->name = "test";
//        $admin->user_id = "ETL-001";
//        $admin->email= $ema;
//        $admin->password = bcrypt($pas);
//
//////        Admin::create($admin);
////
////
//////
//        $admin->save();


//        Admin::find($ema);

//        Admin::create($request->all());

//        $user = Admin::where('Email', \request('email'))->firstOrFail();

        if(Auth::attempt(['Email'=> $ema, 'password'=>$pas])){
//            return view('admin');

            return redirect("/admin");
        }

//        if($user->Email == $ema and $user->password == $pas){
////            return "Login is Successful";
//            return redirect("/admin");
//        }
//
//
//        dd($ema2);


//        if(Auth::attempt(['email'=>$ema, 'password'=>$pas])){
//            return "Login Successful";
//        }

        else{
//            return "Something is Wrong";
//            return view('auth.login');
            return redirect("/login");
        }

        if($request == null){
            return view('auth.login');
        }

//        return "email is: ".$ema. "password is: ".$pas;
    }

    public function viewadmin(){
        return view('admin');
    }
}
