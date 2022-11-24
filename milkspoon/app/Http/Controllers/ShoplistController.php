<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class ShoplistController extends Controller
{
    public function show(){
        return view("parts.shoplist.tempo");
    }
}