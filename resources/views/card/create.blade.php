@extends('layouts.main')
    @section('content')
        @foreach($cards as $card)
            <div>ID:{{$card->id}} Card name: {{$card->name}}</div>
        @endforeach
    @endsection
