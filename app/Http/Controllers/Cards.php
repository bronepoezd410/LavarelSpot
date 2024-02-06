<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Card;

class Cards extends Controller
{

    public function index(){
        $cards = Card::all();
        return view('card.index', compact('cards'));
    }

    public function create()
    {
        return view('card.create');
    }

}
