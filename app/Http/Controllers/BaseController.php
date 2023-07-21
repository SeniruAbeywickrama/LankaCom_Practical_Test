<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class BaseController extends Controller
{
    public function adminPage()
    {
        $products = Product::get()->all();
        return view('/admin/admin', [
            'products' => $products,
        ]);
    }
}
