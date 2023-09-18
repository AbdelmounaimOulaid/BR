@extends('Layouts.app')
@section('title', 'Home')
@section('content')

<div class="flex items-center justify-center my-5 px-3">
    <form class="w-full max-w-lg px-5 py-5 bg-white shadow-md rounded" method="POST" action="{{ Route('register') }}"> @csrf
        <div class="flex flex-wrap -mx-3 mb-2">
            <div class="w-full px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                    UserName
                </label>
                <input value="{{ old('username') }}" class="appearance-none block w-full bg-gray-200 text-gray-700 border {{ $errors->has('username') ? 'border-red-500 mb-3' : 'border-gray-200' }} rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" name="username" type="text" placeholder="Jane">

                @error('username')
                <p class="text-red-500 text-xs italic">Please fill out this field.</p>
                @enderror
            </div>
            <div class="w-full px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                    Email
                </label>
                <input value="{{ old('email') }}" class="appearance-none block w-full bg-gray-200 text-gray-700 border {{ $errors->has('email') ? 'border-red-500 mb-3' : 'border-gray-200' }} rounded py-3 px-4  leading-tight focus:outline-none focus:bg-white" id="grid-first-name" name="email" type="email" placeholder="jane@gmail.com">
                @error('email')
                <p class="text-red-500 text-xs italic">Please fill out this field.</p>
                @enderror
            </div>
        </div>
        <div class="flex flex-wrap -mx-3 mb-2">
            <div class="w-full px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
                    Country
                </label>
                <div class="relative">
                    <select value="{{ old('country') }}" class="block appearance-none w-full bg-gray-200 border {{ $errors->has('country') ? 'border-red-500 mb-3' : 'border-gray-200' }} text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="country" id="grid-state">
                        <option value="" disabled selected>Choose Country ...</option>
                        <option value="AU">Australia</option>
                        <option value="CA">Canada</option>
                        <option value="DK">Denmark</option>
                        <option value="DE">Germany</option>
                        <option value="GB">United Kingdom</option>
                    </select>
                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                        </svg>
                    </div>
                </div>
                @error('country')
                <p class="text-red-500 text-xs italic">Please fill out this field.</p>
                @enderror
            </div>
        </div>
        <div class="flex flex-wrap -mx-3 mb-2">
            <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-city">
                    City
                </label>
                <input value="{{ old('city') }}" class="appearance-none block w-full bg-gray-200 text-gray-700 border {{ $errors->has('city') ? 'border-red-500 mb-3' : 'border-gray-200' }} rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-city" type="text" name="city" placeholder="Albuquerque">
                @error('city')
                <p class="text-red-500 text-xs italic">Please fill out this field.</p>
                @enderror
            </div>
            <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
                    State
                </label>
                <input value="{{ old('state') }}" class="appearance-none block w-full bg-gray-200 text-gray-700 border {{ $errors->has('state') ? 'border-red-500 mb-3' : 'border-gray-200' }} rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state" type="text" name="state" placeholder="Albuquerque">
                @error('state')
                <p class="text-red-500 text-xs italic">Please fill out this field.</p>
                @enderror
            </div>
            <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-zip">
                    Zip
                </label>
                <input value="{{ old('zip') }}" class="appearance-none block w-full bg-gray-200 text-gray-700 border {{ $errors->has('zip') ? 'border-red-500 mb-3' : 'border-gray-200' }} rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-zip" type="text" name="zip" placeholder="90210">
                @error('zip')
                <p class="text-red-500 text-xs italic">Please fill out this field.</p>
                @enderror
            </div>
        </div>
        <div class="flex flex-wrap -mx-3 mb-2">
            <div class="w-full px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-address">
                    Address
                </label>
                <input value="{{ old('address') }}" class="appearance-none block w-full bg-gray-200 text-gray-700 border {{ $errors->has('address') ? 'border-red-500 mb-3' : 'border-gray-200' }} rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-address" type="text" name="address" placeholder="Albuquerque">
                @error('address')
                <p class="text-red-500 text-xs italic">Please fill out this field.</p>
                @enderror
            </div>
        </div>
        <div class="flex flex-wrap my-5 mb-2">
            <div class="md:w-1/3">
                <button class="shadow bg-black hover:bg-gray-600 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="submit">
                    Buy Now
                </button>
            </div>
        </div>
    </form>
</div>
@endsection