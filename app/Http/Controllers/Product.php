<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Blade;

class Product extends Controller
{
    //

    function productList(){
        $totalProduct = 30;

        return Blade::render('<h1>Total Product: {{$total}}<h1/>', ['total'=> $totalProduct]);
    }
}
