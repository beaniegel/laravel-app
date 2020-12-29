@extends('layout')
@section('content')
<x-header title="Dashboard"/>
<main>
    <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
        <div class="px-4 py-6 sm:px-0">
            <p>Hi {{ $name }}, this is what's new</p>
        </div>
    </div>
</main>
@endsection
