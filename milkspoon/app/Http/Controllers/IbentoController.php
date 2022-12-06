<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class IbentoController extends Controller
{
    public function show(){
        return view("parts.project.ibento");
    }
}