<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller
{
    public function UserList(){
  
        $users = User::all(); 

    
     return view('user_list',compact('users'));
  
  
  }
}
