@extends('layouts.app')

@section('title', 'Categories')

@section('content')

    <x-backend.sidenav />

    <div class="p-4 sm:ml-64">

        <table id="pagination-table">
            <thead>
                <tr>
                    <th>
                        <span class="flex items-center">
                            Category Name
                        </span>
                    </th>
                    <th>
                        <span class="flex items-center">
                            Display Order
                        </span>
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                    <tr>
                        <td class="font-medium text-gray-900 whitespace-nowrap">{{ $category->name }}</td>
                        <td>{{ $category->display_order }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>

@endsection

@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@9.0.3"></script>
    <script src="{{ asset('js/script.js') }}"></script>
@endpush