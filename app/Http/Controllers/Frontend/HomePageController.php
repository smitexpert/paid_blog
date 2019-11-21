<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function index(){
        return view('Frontend.index');
    }

    public function single(){
        return view('Frontend.single');
    }
}
