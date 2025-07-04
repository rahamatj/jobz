@extends('layouts.app')

@section('title', 'Job')

@section('content')

    <x-frontend.navbar />

    <section class="max-w-screen-xl flex flex-col items-stretch mx-auto p-4">


        <div class="relative overflow-x-auto">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500">
                <tbody>

                    <tr class="bg-white border-b border-gray-200">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                            Title
                        </th>
                        <td class="px-6 py-4">
                            {{ $job->title }}
                        </td>
                    </tr>
                    
                    <tr class="bg-white border-b border-gray-200">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                            Company
                        </th>
                        <td class="px-6 py-4">
                            {{ $job->company }}
                        </td>
                    </tr>

                    <tr class="bg-white border-b border-gray-200">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                            Email
                        </th>
                        <td class="px-6 py-4">
                            {{ $job->email }}
                        </td>
                    </tr>

                    <tr class="bg-white border-b border-gray-200">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                            Phone Number
                        </th>
                        <td class="px-6 py-4">
                            {{ $job->phone_number }}
                        </td>
                    </tr>

                    <tr class="bg-white border-b border-gray-200">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                            Website
                        </th>
                        <td class="px-6 py-4">
                            {{ $job->website }}
                        </td>
                    </tr>

                    <tr class="bg-white border-b border-gray-200">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                            Application Deadline
                        </th>
                        <td class="px-6 py-4">
                            {{ $job->application_deadline }}
                        </td>
                    </tr>

                    <tr class="bg-white border-b border-gray-200">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                            Vacancy
                        </th>
                        <td class="px-6 py-4">
                            {{ $job->vacancy }}
                        </td>
                    </tr>

                    <tr class="bg-white border-b border-gray-200">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                            Experience
                        </th>
                        <td class="px-6 py-4">
                            {{ $job->experience }}
                        </td>
                    </tr>

                    <tr class="bg-white border-b border-gray-200">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                            Published
                        </th>
                        <td class="px-6 py-4">
                            {{ $job->published }}
                        </td>
                    </tr>

                    <tr class="bg-white border-b border-gray-200">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                            Salary
                        </th>
                        <td class="px-6 py-4">
                            {{ $job->salary }}
                        </td>
                    </tr>

                    <tr class="bg-white border-b border-gray-200">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                            Requirements
                        </th>
                        <td class="px-6 py-4">
                            {!! $job->requirements !!}
                        </td>
                    </tr>

                    <tr class="bg-white border-b border-gray-200">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                            Responsibilities
                        </th>
                        <td class="px-6 py-4">
                            {!! $job->responsibilities !!}
                        </td>
                    </tr>

                    <tr class="bg-white border-b border-gray-200">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                            Skills
                        </th>
                        <td class="px-6 py-4">
                            {!! $job->skills !!}
                        </td>
                    </tr>

                    <tr class="bg-white border-b border-gray-200">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                            Benefits
                        </th>
                        <td class="px-6 py-4">
                            {!! $job->benefits !!}
                        </td>
                    </tr>

                    <tr class="bg-white border-b border-gray-200">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                            Skills
                        </th>
                        <td class="px-6 py-4">
                            {!! $job->skills !!}
                        </td>
                    </tr>

                    <tr class="bg-white border-b border-gray-200">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                            Work Place
                        </th>
                        <td class="px-6 py-4">
                            {{ $job->work_place }}
                        </td>
                    </tr>

                    <tr class="bg-white border-b border-gray-200">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                            Employment Status
                        </th>
                        <td class="px-6 py-4">
                            {{ $job->employment_status }}
                        </td>
                    </tr>

                    <tr class="bg-white border-b border-gray-200">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                            Company Address
                        </th>
                        <td class="px-6 py-4">
                            {!! $job->company_address !!}
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>

    </section>

    <x-frontend.footer />
    
@endsection