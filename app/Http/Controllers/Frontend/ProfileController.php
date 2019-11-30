<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index(){
        return view("Frontend.profile.profile");
    }

    public function claps(){
        return view("Frontend.profile.claps");
    }

    public function responses(){
        return view("Frontend.profile.responses");
    }
}
