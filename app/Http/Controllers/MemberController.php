<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class MemberController extends Controller
{
    //

    public function show(){
        $users = User::all();
        return view('users.index',["users"=>$users]);

    }
}
