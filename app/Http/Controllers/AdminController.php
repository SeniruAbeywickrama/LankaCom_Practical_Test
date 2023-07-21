<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;


class AdminController extends Controller
{

    public function add_product(Request $request)
    {
//        dd(gettype($request['name']),gettype($request['unit_price']),gettype($request['description']));
        Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            'unit_price' => ['required', 'string',  'max:255'],

        ])->validate();

        Product::create([
            'name' => $request['name'],
            'unit_price' => $request['unit_price'],
            'description' => $request['description']
        ]);
        return redirect('/admin/new-product')->with('status', 'Product added successfully!');
    }

    public function update_product(Request $request)
    {
//        dd($request['id']);
        Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            'unit_price' => ['required', 'string',  'max:255'],

        ])->validate();

        $product = Product::find($request['id']);

        $product->name = $request['name'];
        $product->unit_price = $request['unit_price'];
        $product->description = $request['description'];

        $product->save();

        return redirect('/admin')->with('status', 'Product added successfully!');
    }

    public function new_product_page()
    {
        return view('/admin/new_product');
    }
    public function edit_product_page($id)
    {
        $product = DB::table('product')->where('id',$id)->first();

        return view('/admin/edit_product', [
            'product' => $product,
        ]);
    }


    public function get_product_data(){
        $adviser = Product::get()->all();
        dd($adviser);
    }
}
