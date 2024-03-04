<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\CustomAuth;


class CustomAuthController extends Controller
{
    function index()
    {
        return view('auth.login');
    }

    function registration()
    {
        return view('auth.registration');
    }



    function dashboard()
    {
        return view('auth.dashboard');
    }




    function RegisterCustom(Request $request)
    {  
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);
           
     

        $user              =            new CustomAuth ();
        $user->name        =            $request->name;
        $user->email       =            $request->email;
        $user->password    =            Hash::make($request->password);
        $user->type        =            'customer';

         $result           =             $user->save();

         if ($result){
            return back()->with('success_message','Congratulations ! Your registration has been successfully processed.');
        }
         else{
        return back()->with('error_message','Please try again');
         }



         
        return redirect("dashboard")->withSuccess('You have signed-in');
    }

}
