@extends('layouts.app')

@section('content')
    <header class="py-10 ">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 mt-3">
            <h1 class="text-3xl font-bold tracking-tight">Challenge</h1>
        </div>
    </header>


    <main>
        <div class="flex items-center justify-center">

            <form class="space-y-6" action="/challenges" method="POST">
                @csrf

                <input type="text" name="name" placeholder="name" required>
                <input type="number" name="budget" placeholder="1.00" step="1.00" min="100.00" required>
                <input type="text" name="platform" placeholder="SELECTplatform" required>
                <input type="text" name="platform_content_type" placeholder="SELECTplatform_content_type" required>
                <textarea name="creative_direction" placeholder="creative_direction" required></textarea>
                <textarea name="brand_description" placeholder="brand_description" required></textarea>
                <input type="text" name="geography" placeholder="SELECTgeography" required>
                <input type="text" name="audience" placeholder="SELECTaudience" required>

                <button type="submit"
                    class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Create Challenge
                </button>
            </form>

        </div>
    </main>
@endsection
