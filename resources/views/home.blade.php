@extends('layouts.app')

@section('title', 'Home')

@section('content')
<main class="container">
    <h1><a href="{{ route('trains.index')}}" class="link-dark link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Go to Train Overview</a></h1>
</main>

@endsection
