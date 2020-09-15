<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReviewstableController extends Controller
{
    public function review(){
        return view('adminpanel.reviewstable.reviews');
    }
}
