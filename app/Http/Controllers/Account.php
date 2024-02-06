<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Card;

class Account extends Controller
{

    public function index(){

        return view('account');

    }

}
