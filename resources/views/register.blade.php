@extends('layout')

@section('content')
    <div class="grid lg:grid-cols-2 h-screen">
        <div class="flex justify-center items-center bg-multi-gradient lg:bg-none bg-cover">
            <form class="w-3/5" method="POST" action="/users">
                <h1 class="text-2xl text-center lg:hidden">Join now</h1>
                <img class="w-32 h-32 mx-auto" src="{{ asset('img/user-circle.svg') }}">
                <h2 class="text-xl text-center mb-2">Fill out your details</h2>
                @csrf
                <x-forms.input label="Username:" name="name" type="text" />
                <x-forms.input label="Email:" name="email" type="text" />
                <x-forms.input label="Password:" name="password" type="password" />
                <x-forms.input label="Confirm password:" name="password_confirmation" type="password" />
                <x-forms.button label="Register" />
                <a href="/login" class="block underline w-full text-center text-sm">Already have an account?</a>
            </form>
        </div>
        <div class="hidden lg:flex flex-col bg-multi-gradient bg-cover px-12 py-12">
            <h1 class="text-8xl text-white">Join now</h1>
            <h2 class="text-4xl text-white">it's quick and easy</h2>
        </div>
    </div>
@endsection
