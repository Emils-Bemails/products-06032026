<?php

namespace App\Http\Controllers;
use App\Models\Product;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    function all () {
       $products = Controller::all();
        return view('/all', ["products" => $products]);
    }
}
