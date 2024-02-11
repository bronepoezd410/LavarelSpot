<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Card;

class Main extends Controller
{

    public function index(){

        return view('main');
    }

}
