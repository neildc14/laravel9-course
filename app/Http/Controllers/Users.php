<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Users extends Controller
{
    //

    function index(){
        // echo $name;
        // echo 'Hello Worlds from controller';
        
        $data = ["neil", "camille", "edward", "joy"];

        $person = [
            'name' => 'John Doe',
            'age' => 30,
            'email' => 'john.doe@example.com',
           ];
     
        return view('users', ["users"=> $data, "persons"=>$person]);
    }


    function getData(Request $req){

        $req->validate([
            'username'=>'required | max:10',
            'password'=>'required |min:10'
        ]);
        return $req->input();
    }
}
