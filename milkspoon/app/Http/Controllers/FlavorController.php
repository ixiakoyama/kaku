<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class FlavorController extends Controller
{
    public function show(){
        return view("parts.syohin.flavor");
    }
}