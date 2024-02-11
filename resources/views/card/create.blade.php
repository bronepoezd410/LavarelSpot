@extends('layouts.main')
    @section('content')

        <form class="max-w-sm mx-auto" action="{{route('card.store')}}" method="post">
            @csrf
            <div class="mb-5">
                <label for="text" class="block mb-2 text-sm font-medium text-gray-900 light:text-white">Название</label>
                <input id="name" name="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 light:bg-gray-700 light:border-gray-600 light:placeholder-gray-400 light:text-white light:focus:ring-blue-500 light:focus:border-blue-500" required>
            </div>
            <div class="mb-5">
                <label for="text" class="block mb-2 text-sm font-medium text-gray-900 light:text-white">Артист</label>
                <input id="2" name="artist_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 light:bg-gray-700 light:border-gray-600 light:placeholder-gray-400 light:text-white light:focus:ring-blue-500 light:focus:border-blue-500" required>
            </div>

            <div class="mb-5">
                <label for="text" class="block mb-2 text-sm font-medium text-gray-900 light:text-white">Категория</label>
                <input id="category" name="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 light:bg-gray-700 light:border-gray-600 light:placeholder-gray-400 light:text-white light:focus:ring-blue-500 light:focus:border-blue-500" required>
            </div>
            <div class="mb-5">
                <label for="text" class="block mb-2 text-sm font-medium text-gray-900 light:text-white">Изображение</label>
                <input id="3" name="image" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 light:bg-gray-700 light:border-gray-600 light:placeholder-gray-400 light:text-white light:focus:ring-blue-500 light:focus:border-blue-500" required>
            </div>
            <div class="mb-5">
                <label for="text" class="block mb-2 text-sm font-medium text-gray-900 light:text-white">Фейм</label>
                <input id="4" name="fame" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 light:bg-gray-700 light:border-gray-600 light:placeholder-gray-400 light:text-white light:focus:ring-blue-500 light:focus:border-blue-500" required>
            </div>
            <div class="mb-5">
                <input id="5" type="hidden" name="id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 light:bg-gray-700 light:border-gray-600 light:placeholder-gray-400 light:text-white light:focus:ring-blue-500 light:focus:border-blue-500" hidden>
            </div>
            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center light:bg-blue-600 light:hover:bg-blue-700 light:focus:ring-blue-800">Create</button>
        </form>


    @endsection
