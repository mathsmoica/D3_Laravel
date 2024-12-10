<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index(){
        return view('welcome');
    }

    public function stage1(){
        return view('stage1');
    }
}
