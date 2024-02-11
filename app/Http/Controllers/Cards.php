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

    public function store()
    {
        $data = request()->validate([
            'id'=>'',
            'name'=>'string',
            'artist_name'=>'string',
            'category'=>'string',
            'image'=>'string',
            'fame'=>'integer',
        ]);
        Cards::create($data);
        return redirect()->route('cards.index');
    }

}
