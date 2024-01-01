<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.css" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/css/test.css', 'resources/js/app.js'])

    <style>
        li.active {
            background-color: black !important
        }
    </style>
    <title>Dyah Kusuma</title>
    <link rel="icon" type="image/png" href="">

</head>

<body class="h-full bg-black ">
    <div class="p-2">
        <nav class="bg-gray-800 ">
            <div class="mx-auto xl:px-10 py-3 px-2 sm:px-6 lg:px-8 ">

                <nav class="bg-white border-gray-200 dark:bg-white 2xl:w-full outline outline-2 outline-offset-2">
                    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
                        <div class=" inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto">

                            <!-- Profile dropdown -->
                            <div class="relative ml-3">
                                <div>
                                    <button type="button" id="dropdownDefaultButton" data-dropdown-toggle="dropdown"
                                        class="relative flex rounded-full bg-gray-800 text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800"
                                        aria-expanded="false" aria-haspopup="false" aria-hidden="true">
                                        <span class="absolute -inset-1.5"></span>
                                        <span class="sr-only">Open user menu</span>
                                        <img class="h-8 w-8 rounded-full" src="{{ asset('img/me.png') }}"
                                            alt="">
                                    </button>
                                </div>
                                <div id="dropdown"
                                    class="hidden absolute z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none"
                                    role="menu" aria-orientation="vertical" tabindex="-1">
                                    <!-- Active: "bg-gray-100", Not Active: "" -->
                                    <ul aria-labelledby="dropdownDefaultButton"
                                        class="py-2 text-sm text-gray-700 dark:text-gray-200">
                                        <li>
                                            <a href="#" class="block px-4 py-2 text-sm text-gray-700"
                                                role="menuitem" tabindex="-1" id="user-menu-item-0">Your
                                                Profile</a>
                                        </li>
                                        {{-- <li>
                                            <a href="#" class="block px-4 py-2 text-sm text-gray-700"
                                                role="menuitem" tabindex="-1" id="user-menu-item-1">Settings</a>
                                        </li> --}}
                                        <li>
                                            <a href="{{ route('logout') }}" class="block px-4 py-2 text-sm text-gray-700"
                                                role="menuitem" tabindex="-1" id="user-menu-item-2">Sign out</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <button data-collapse-toggle="navbar-default" type="button"
                            class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                            aria-controls="navbar-default" aria-expanded="false">
                            <span class="sr-only">Open main menu</span>
                            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 17 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />
                            </svg>
                        </button>
                        <div class="hidden w-full md:block md:w-auto" id="navbar-default">
                            <ul
                                class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-800 rounded-lg bg-gray-850 md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-gray dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                                <li class=" text-gray-300 py-2 text-sm font-medium hover:bg-gray-700 hover:text-white rounded-md px-3 {{ Request()->is('/') ? 'active' : '' }}"
                                    aria-current="page">
                                    <a href="{{ url('/') }}">Home</a>
                                </li>
                                <li class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium {{ Request()->is('about') ? 'active' : '' }}"
                                    aria-current="page">
                                    <a href="{{ url('/about') }}">About</a>
                                </li>
                                <li
                                    class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium {{ Request()->is('portfolio') ? 'active' : '' }}">
                                    <a href="{{ url('/portfolio') }}">Portfolio</a>
                                </li>
                                {{-- <li
                                    class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium {{ Request()->is('portfolio') ? 'active' : '' }}">
                                    <a href="#">Pricing</a>
                                </li> --}}
                                <li
                                    class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium {{ Request()->is('contact') ? 'active' : '' }}">
                                    <a href="{{ url('/contact') }}">Contact</a>
                                </li>
                            </ul>
                        </div>
                        <div class="max-md:hidden"></div>
                    </div>
                </nav>


            </div>
            {{-- <div class="bg-white shadow">
                <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                    <h1 class="text-3xl font-bold tracking-tight text-gray-900">Dashboard</h1>
                </div>
            </div> --}}
            <main>
                <div class="mx-auto py-6 sm:px-6 lg:px-8">
                    <!--  content -->
                    <div class="relative overflow-hidden bg-white">
                        @yield('content')
                    </div>
                </div>
                @yield('tambahan')
            </main>
        </nav>
    </div>


    <footer class= "rounded-lg shadow dark:bg-black m-4">
        <span class=" block text-sm text-gray-200 sm:text-center dark:text-gray-300">
            © 2023 <a href="" class="hover:underline">Dyah Kusuma</a>. All Rights Reserved.
        </span>

    </footer>



    {{-- <main>
        <div class="mx-auto  py-6 sm:px-6 lg:px-8">

        </div>
    </main> --}}


    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>
</body>

</html>
