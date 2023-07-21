<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class VisitorController extends Controller
{
    public function visitorPage()
    {
        $products = Product::get()->all();
        return view('/visitor/visitor', [
            'products' => $products,
        ]);
    }

    public function get_cart_data($id,$name,$unit_price){
        dd($id,$name,$unit_price);
    }
}
