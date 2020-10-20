<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
class User extends Controller
{
    function save(Request $req)
    {
   $user=new User;
   $user->name=$req->name;
   $user->address=$req->address;
   $user->mobile=$req->mobile;
   echo $user->save();
    }
}
