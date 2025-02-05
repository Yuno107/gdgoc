@extends('test')

@section('title', 'Blog')

@section('content')
<h3 class="text-2xl font-semibold text-center">Menu Blog</h3>
<h1 class="text-lg font-bold mt-4">About Me</h1>
<div>
    <p>Name: {{ $name }}</p>
</div>
@endsection
