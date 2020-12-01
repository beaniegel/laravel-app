@extends('layout')

@section('content')
    <p>hello {{ $name }}</p>
    <form method="POST" action="/logout">
        @csrf
        <button type="submit" class="button bg-yellow-500 w-full my-4 py-2">Logout</button>
    </form>
@endsection
