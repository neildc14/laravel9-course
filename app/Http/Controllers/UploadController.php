<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    //

    public function uploadFile(Request $req){
        $name = $req->file('file')->getClientOriginalName();
        return $req->file('file')->storeAs('public', $name);
    }
}