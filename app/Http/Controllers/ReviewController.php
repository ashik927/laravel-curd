<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function seo(){
        return view('adminpanel.seo.seo');
    }
}
