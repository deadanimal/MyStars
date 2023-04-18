@extends('layouts.app')

@section('content')
    <header class="py-10 ">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 mt-3">
            <h1 class="text-3xl font-bold tracking-tight">List of Brands</h1>
        </div>
    </header>


    <main>
        <div class="px-4 sm:px-6 lg:px-8">
            <div class="sm:flex sm:items-center">
                <div class="sm:flex-auto">
                    <h1 class="text-base font-semibold leading-6 text-gray-900">Users</h1>
                    <p class="mt-2 text-sm text-gray-700">A list of all the users in your account including their name,
                        title, email and role.</p>
                </div>
                <div class="mt-4 sm:ml-16 sm:mt-0 sm:flex-none">
                    <button type="button"
                        class="block rounded-md bg-indigo-600 px-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Add
                        user</button>
                </div>
            </div>
            <div class="mt-8 flow-root">
                <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                        <div class="overflow-hidden shadow ring-1 ring-black ring-opacity-5 sm:rounded-lg">
                            <table class="min-w-full divide-y divide-gray-300">
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th scope="col"
                                            class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-6">
                                            Name</th>
                                        <th scope="col"
                                            class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Email</th>
                                        <th scope="col"
                                            class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Manager</th>
                                        <th scope="col"
                                            class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">-</th>
                                        <th scope="col" class="relative py-3.5 pl-3 pr-4 sm:pr-6">
                                            <span class="sr-only">Edit</span>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-200 bg-white">

                                    @forelse($brands as $brand)
                                        <tr>
                                            <td
                                                class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6">
                                                {{ $brand->name }}
                                            </td>
                                            <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                                {{ $brand->user->email }}
                                            </td>
                                            <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                                @if($brand->manager)
                                                    {{ $brand->manager->user->name }}
                                                @else
                                                    -
                                                @endif                                                
                                            </td>
                                            <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                                -
                                            </td>
                                            <td
                                                class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-6">
                                                <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit<span
                                                        class="sr-only">, {{ $brand->user->name }}</span></a>
                                            </td>
                                        </tr>
                                    @empty
                                    @endforelse

                                    <!-- More people... -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
