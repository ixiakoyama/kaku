<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class JigyoController extends Controller
{
    public function show(){
        return view("parts.company.jigyounaiyou");
    }
}