<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\User;
use Illuminate\Support\Facades\Http;

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

    function getDataFromDB(){
        return User::all();
    }

    // function getDataFromAPI(){

    //         $collections = Http::get('https://reqres.in/api/users/1');
            
    //         return view('users', ["collections"=>$collections]);
    // }

    function loginUser(Request $req){
        
        $data = $req->input();
        $req->session()->put('username', $data['username']);

        return redirect('profile');
    }
}
