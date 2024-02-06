<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Card;

class Main extends Controller
{

    public function index(){

        return view('main');
    }

    // public function MySpotFunction(){

    //     $cards = Card::all();
    //         foreach ($cards as $card){
    //             dump($card->name);
    //         }
    // }

    // public function create (){

    //     $cardsArr = [

    //         [
    //             'id'=> '',
    //             'name'=> '',
    //             'artist_name'=> '',
    //             'category'=> '',
    //             'image'=> '',
    //         ]
    //     ];


    // }
}
