<?php

namespace App\Http\Controllers;
use  App\Models\am;
use Illuminate\Http\Request;

class Companies extends Controller
{
    function save(Request $req)
    {
   $user=new am;
   $user->name=$req->name;
   $user->address=$req->address;
   $user->mobile=$req->mobile;
   echo $user->save();
    }
    public function index(){
        return view('update');
    }
    public function ma(){
        return view('up');
    }
    public function update(Request $req,$id){
        $user= am::find($req->id);
        $user->name=$req->name;
        $user->address=$req->address;
        $user->mobile=$req->mobile;
        echo $user->save();
    }
    public function edit($id)
    {
      $user = am::find($id);
      $users= am::all() ;
      return view('ak',['users'=>$users,'user'=>$user,'layout'=>'edit']);

    }
    
}
