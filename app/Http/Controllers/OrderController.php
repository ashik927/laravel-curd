<?php

namespace App\Http\Controllers;
use App\order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function order(){
        $order = order:: all();
        return view('adminpanel.order.order',compact('order'));
    }
    public function delete(request $r){
        $id = $r->id;
        $order = order::find($id);
        $order -> delete();
        return redirect('/order')->withSuccess('post delete');
    }
    public function single($id){
        $order = order::find($id);
        return view('adminpanel.order.orderview',compact('order'));
    }
}
