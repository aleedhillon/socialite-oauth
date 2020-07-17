@extends('layouts.app')

@section('content')
<div class="flex items-center justify-center mt-8 mx-6">
    <div class="p-6 max-w-sm w-full bg-white shadow rounded-md">
        <h3 class="text-gray-700 text-xl text-center">{{ __('Register') }}</h3>

        <form class="mt-4" method="POST" action="{{ route('register') }}">
            @csrf

            <label class="block">
                <span class="text-gray-700 text-sm">{{ __('Name') }}</span>
                <input id="name" type="text" class="form-input mt-1 block w-full rounded-md" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                
                @error('name')
                    <span class="text-sm text-red-500" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </label>

            <label class="block mt-3">
                <span class="text-gray-700 text-sm">{{ __('E-Mail Address') }}</span>
                <input id="email" type="email" class="form-input mt-1 block w-full rounded-md" name="email" value="{{ old('email') }}" required autocomplete="email">
                
                @error('email')
                    <span class="text-sm text-red-500" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </label>

            <label class="block mt-3">
                <span class="text-gray-700 text-sm">{{ __('Password') }}</span>
                <input id="password" type="password" class="form-input mt-1 block w-full rounded-md" name="password" required autocomplete="new-password">
                
                @error('password')
                    <span class="text-sm text-red-500" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </label>

            <label class="block mt-3">
                <span class="text-gray-700 text-sm">{{ __('Confirm Password') }}</span>
                <input id="password-confirm" type="password" class="form-input mt-1 block w-full rounded-md" name="password_confirmation" required autocomplete="new-password">
            </label>

            <div class="mt-6">
                <button type="submit" class="w-full py-2 px-4 text-center bg-blue-600 rounded-md text-white text-sm hover:bg-blue-500 focus:outline-none">
                    {{ __('Register') }} with Email
                </button>
            </div>
            <div class="mt-6">
                <a href="{{ route('oauth.redirect', ['provider' => 'github']) }}" type="submit" class="block py-2 px-4 text-center bg-black hover:bg-gray-800 rounded-md text-white text-sm focus:outline-none">
                    Signup with <span class="font-bold">Github</span>
                </a>
                <a href="{{ route('oauth.redirect', ['provider' => 'google']) }}" type="submit" class="block mt-2 py-2 px-4 text-center bg-green-700 hover:bg-green-500 rounded-md text-white text-sm focus:outline-none">
                    Signup with <span class="font-bold">Google</span>
                </a>
                <a href="{{ route('oauth.redirect', ['provider' => 'facebook']) }}" type="submit" class="block mt-2 py-2 px-4 text-center bg-blue-700 hover:bg-blue-500 rounded-md text-white text-sm focus:outline-none">
                    Signup with <span class="font-bold">Facebook</span>
                </a>
            </div>
        </form>
    </div>
</div>
@endsection
