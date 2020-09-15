<?php

namespace App\Http\Controllers;
use App\ProductModel;
use Illuminate\Http\Request;

class ProductModelController extends Controller
{
    public function product(){
        $product = ProductModel:: all();
        return view('adminpanel.product.product',compact('product'));
    }
    public function delete(request $r){
        $id = $r->id;
        $product = ProductModel::find($id);
        $product -> delete();
        return redirect('/order')->withSuccess('post delete');
    }
    public function single($id){
        $product = ProductModel::find($id);
        return view('adminpanel.product.productview',compact('product'));
    }
    public function edit(Request $r){
        $id = $r->id;
        $product = ProductModel::find($id);
        return view('adminpanel.product.productupdate',compact('product'));
    }
    public function productupdate(Request $r){
        $id = $r->id;
        $product = ProductModel::find($id);
        $product->name = $r->name;
        $product->stock = $r->stock;
        $product->price = $r->price;
        $product->available = $r->available;
        $product->save();
        return redirect('/product')->withSuccess('post success');
    }
}
