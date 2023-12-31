@extends('Layouts.app')
@section('title','Login')
@section('content')
<div class="mt-[100px]">

<div class="w-full lg:ml-[700px]  lg:max-w-xs flex justify-center items-center">
   
    <form class="bg-white w-full shadow-md rounded px-8 pt-6 pb-8" action="{{ Route('check-login') }}" method="POST"> @csrf
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
                Email
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="email" name="email" type="text" placeholder="john@gmail.com">
        </div>
        <div class="mb-6">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                Password
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="password" name="password" type="password" placeholder="******************">
        </div>
        <div class="flex items-center justify-between">
            <button class="bg-black hover:bg-gray-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                Sign In
            </button>
        </div>
    </form>
</div>
</div>
@endsection