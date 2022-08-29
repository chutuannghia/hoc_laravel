<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class buoi04Controller extends Controller
{
    public function thome(){
        return view('buoi04.thome');
    }
    public function doctruyen(){
        return view('buoi04.doctruyen');
    }
    public function binhluan(){
        return view('buoi04.binhluan');
    }
}
