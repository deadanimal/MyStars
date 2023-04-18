<nav class="bg-white shadow">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex h-16 justify-between">
            <div class="flex">
                <div class="-ml-2 mr-2 flex items-center md:hidden">
                    <!-- Mobile menu button -->
                    <button type="button"
                        class="inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-100 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500"
                        aria-controls="mobile-menu" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>

                        <svg class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                        </svg>

                        <svg class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                <div class="flex flex-shrink-0 items-center">
                    <a href="/dashboard">
                        <img class="block h-8 w-auto lg:hidden"
                            src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="Your Company">
                        <img class="hidden h-8 w-auto lg:block"
                            src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="Your Company">
                    </a>
                </div>
                <div class="hidden md:ml-6 md:flex md:space-x-8">

                    @if (Auth::user()->profile->profile_type == 'admin')
                    @elseif (Auth::user()->profile->profile_type == 'brand')

                    @elseif (Auth::user()->profile->profile_type == 'creator')

                    @elseif (Auth::user()->profile->profile_type == 'manager')
                    @endif




                    <a href="/campaigns"
                        class="inline-flex items-center border-b-2 border-transparent px-1 pt-1 text-sm font-medium text-gray-500 hover:border-gray-300 hover:text-gray-700">Campaign</a>
                    <a href="/contents"
                        class="inline-flex items-center border-b-2 border-transparent px-1 pt-1 text-sm font-medium text-gray-500 hover:border-gray-300 hover:text-gray-700">Content</a>
                </div>
            </div>
            <div class="flex items-center">
                <div class="flex-shrink-0">


                    @if (Auth::user()->profile->profile_type == 'admin')
                    @elseif (Auth::user()->profile->profile_type == 'brand')

                    @elseif (Auth::user()->profile->profile_type == 'creator')

                    @elseif (Auth::user()->profile->profile_type == 'manager')
                    @endif

                    <button type="button"
                        class="relative inline-flex items-center gap-x-1.5 rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                        New Campaign
                    </button>
                    <button type="button"
                        class="relative inline-flex items-center gap-x-1.5 rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                        Explore
                    </button>
                </div>
                <div class="hidden md:ml-4 md:flex md:flex-shrink-0 md:items-center">

                    <div class="relative ml-3" x-data="{ profileOpen: false }">
                        <div>
                            <button type="button" x-on:click="profileOpen = ! profileOpen"
                                class="flex rounded-full bg-white text-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2"
                                id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                                <span class="sr-only">Open user menu</span>
                                <img class="h-8 w-8 rounded-full"
                                    src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                    alt="">
                            </button>
                        </div>

                        <div x-show="profileOpen"
                            class="absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none"
                            role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button"
                            tabindex="-1">
                            <div class="py-3 px-3">
                                <div class="text-base font-medium text-gray-800">{{ Auth::user()->name }}</div>
                                <div class="text-sm font-medium text-gray-500">{{ Auth::user()->email }}</div>
                            </div>

                            <a href="/profile" class="block px-4 py-2 text-sm text-gray-700" role="menuitem"
                                tabindex="-1" id="user-menu-item-0">Profile</a>
                            @if (Auth::user()->profile->profile_type == 'brand')
                                <a href="/billing" class="block px-4 py-2 text-sm text-gray-700" role="menuitem"
                                    tabindex="-1" id="user-menu-item-1">Billing</a>
                            @elseif (Auth::user()->profile->profile_type == 'creator')
                                <a href="/wallet" class="block px-4 py-2 text-sm text-gray-700" role="menuitem"
                                    tabindex="-1" id="user-menu-item-1">Wallet</a>
                            @endif
                            <form action="/logout" method="POST">
                                @csrf
                                <button class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1"
                                    id="user-menu-item-2">Sign out</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Mobile menu, show/hide based on menu state. -->
    <div class="md:hidden" id="mobile-menu">
        <div class="space-y-1 pb-3 pt-2">


            @if (Auth::user()->profile->profile_type == 'admin')
            @elseif (Auth::user()->profile->profile_type == 'brand')

            @elseif (Auth::user()->profile->profile_type == 'creator')

            @elseif (Auth::user()->profile->profile_type == 'manager')
            @endif
            <!-- Current: "bg-indigo-50 border-indigo-500 text-indigo-700", Default: "border-transparent text-gray-500 hover:bg-gray-50 hover:border-gray-300 hover:text-gray-700" -->
            {{-- <a href="#"
                class="block border-l-4 border-transparent py-2 pl-3 pr-4 text-base font-medium text-gray-500 hover:border-gray-300 hover:bg-gray-50 hover:text-gray-700 sm:pl-5 sm:pr-6">Dashboard</a>
            <a href="#"
                class="block border-l-4 border-transparent py-2 pl-3 pr-4 text-base font-medium text-gray-500 hover:border-gray-300 hover:bg-gray-50 hover:text-gray-700 sm:pl-5 sm:pr-6">Team</a>
            <a href="#"
                class="block border-l-4 border-transparent py-2 pl-3 pr-4 text-base font-medium text-gray-500 hover:border-gray-300 hover:bg-gray-50 hover:text-gray-700 sm:pl-5 sm:pr-6">Projects</a>
            <a href="#"
                class="block border-l-4 border-transparent py-2 pl-3 pr-4 text-base font-medium text-gray-500 hover:border-gray-300 hover:bg-gray-50 hover:text-gray-700 sm:pl-5 sm:pr-6">Calendar</a> --}}
        </div>
        <div class="border-t border-gray-200 pb-3 pt-4">
            <div class="flex items-center px-4 sm:px-6">
                <div class="flex-shrink-0">
                    <img class="h-10 w-10 rounded-full"
                        src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                        alt="">
                </div>
                <div class="ml-3">
                    <div class="text-base font-medium text-gray-800">{{ Auth::user()->name }}</div>
                    <div class="text-sm font-medium text-gray-500">{{ Auth::user()->email }}</div>
                </div>
                <button type="button"
                    class="ml-auto flex-shrink-0 rounded-full bg-white p-1 text-gray-400 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                    <span class="sr-only">View notifications</span>
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
                    </svg>
                </button>
            </div>
            <div class="mt-3 space-y-1">
                <a href="/profile"
                    class="block px-4 py-2 text-base font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-800 sm:px-6">
                    Profile</a>


                @if (Auth::user()->profile->profile_type == 'admin')
                @elseif (Auth::user()->profile->profile_type == 'brand')

                @elseif (Auth::user()->profile->profile_type == 'creator')

                @elseif (Auth::user()->profile->profile_type == 'manager')
                @endif

                <a href="/billing"
                    class="block px-4 py-2 text-base font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-800 sm:px-6">Billing</a>
                <a href="/wallet"
                    class="block px-4 py-2 text-base font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-800 sm:px-6">Wallet</a>
                <form action="/logout" method="POST">
                    @csrf
                    <button
                        class="block px-4 py-2 text-base font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-800 sm:px-6">Sign
                        out</button>
                </form>
            </div>
        </div>
    </div>
</nav>


<script></script>
