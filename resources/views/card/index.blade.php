@extends('layouts.main')
@section('content')


    <div class="flex justify-start gap-4" style="overflow-x: auto;">
        @foreach($cards as $card)
            <div class="relative flex flex-col text-gray-700 bg-white shadow-md bg-clip-border rounded-xl" style="width: 300px; margin-bottom: 20px;">
                <div class="relative mx-4 mt-4 overflow-hidden text-gray-700 bg-white bg-clip-border rounded-xl" style="height: 300px;">
                    <img src="https://images.unsplash.com/photo-1629367494173-c78a56567877?ixlib=rb-4.0.3&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=927&amp;q=80" alt="card-image" class="object-cover w-full h-full" />
                </div>
                <div class="p-6 flex-grow">
                    <div class="flex flex-col justify-between h-full">
                        <div>
                            <p class="block font-sans text-base antialiased font-medium leading-relaxed text-blue-gray-900">
                                {{$card->artist_name}} — {{$card->name}}
                            </p>
                            <p class="block font-sans text-base antialiased font-medium leading-relaxed text-blue-gray-900">
                                Fame: +{{$card->fame}}
                            </p>
                        </div>
                        <div class="p-6 pt-0 mt-auto">
                            <button class="align-middle select-none font-sans font-bold text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 px-6 rounded-lg shadow-gray-900/10 hover:shadow-gray-900/20 focus:opacity-[0.85] active:opacity-[0.85] active:shadow-none block w-full bg-blue-gray-900/10 text-blue-gray-900 shadow-none hover:scale-105 hover:shadow-none focus:scale-105 focus:shadow-none active:scale-100" type="button">
                                {{$card->category}}
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

@endsection
