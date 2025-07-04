@extends('layouts.app')

@section('title', 'Home')

@section('content')

<div>
    <x-frontend.navbar />
    <x-frontend.hero />
    <x-frontend.categories />
    <x-frontend.footer />
</div>

@endsection

