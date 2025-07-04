@extends('layouts.app')

@section('title', 'Jobs')

@section('content')

    <x-frontend.navbar />

    <section class="max-w-screen-xl flex flex-col items-stretch mx-auto p-4">

        @foreach ($jobs as $job)
            <div class="w-full my-3">
                <a href="{{ route('jobs', ['job' => $job->id]) }}" class="block p-6 bg-white border border-gray-200 rounded-lg shadow-sm hover:bg-gray-100">

                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">{{ $job->title }}</h5>

                    <p class="font-normal text-gray-700">{{ $job->company }}</p>
                </a>
            </div>
        @endforeach
        <div class="mt-5">
            {!! $jobs->links() !!}
        </div>
    </section>

    <x-frontend.footer />

@endsection