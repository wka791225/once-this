<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShoppingCartController extends Controller
{
    public function index(){
        return view('front.index');
    }
    public function step01(){
        return view('front.shop');
    }
    public function step02(){
        return view('front.shop-02');
    }
    public function step03(){
        return view('front.shop-03');
    }
    public function step04(){
        return view('front.shop-04');
    }
}
