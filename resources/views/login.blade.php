@extends('layout')

@section('content')
    <div class="grid lg:grid-cols-2 h-screen">
        <div class="hidden lg:flex flex-col bg-multi-gradient bg-cover px-12 py-12">
            <h1 class="text-8xl text-white">Groopz</h1>
            <h2 class="text-4xl text-white">beep boop</h2>
        </div>
        <div class="flex justify-center items-center bg-multi-gradient lg:bg-none bg-cover">
            <form class="w-3/5" method="POST" action="/login">
                <h1 class="text-2xl text-center lg:hidden">My basic Laravel App</h1>
                <img class="w-32 h-32 mx-auto" src="{{ asset('img/user-circle.svg') }}">
                <h2 class="text-xl text-center mb-2">Login to continue</h2>
                @csrf
                @if (session('new-account'))
                    <p class="text-success text-center"> {{ session('new-account') }}</p>
                @endif
                @if (session('no-account'))
                    <p class="text-alert text-center"> {{ session('no-account') }}</p>
                @endif
                <x-forms.input label="Email:" name="email" type="text" />
                <x-forms.input label="Password:" name="password" type="password" />
                <x-forms.checkbox label="Remember me" name="remember" />
                <x-forms.button label="Sign in"/>
                <a href="/users/create" class="block underline w-full text-center text-sm">Create a new account instead?</a>
            </form>
        </div>
    </div>
@endsection
