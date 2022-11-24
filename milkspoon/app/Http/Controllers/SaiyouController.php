<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class SaiyouController extends Controller
{
    public function show(){
        return view("parts.company.saiyou");
    }
}