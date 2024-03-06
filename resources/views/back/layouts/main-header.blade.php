<header class="z-40 fixed w-screen top-0 py-4 flex customgradient shadow-md">
    <div id="logo" class="flex items-center ml-auto z-40">

        <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar"
            type="button" id="sidebar-toggle-button"
            class="inline-flex items-center p-2 text-sm text-white rounded-lg smXl:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200">
            <span class="sr-only">Open sidebar</span>
            <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg">
                <path clip-rule="evenodd" fill-rule="evenodd"
                    d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
                </path>
            </svg>
        </button>

        <a href="" class="flex items-center space-x-3 rtl:space-x-reverse px-5">
            {{-- <img src="{{ URL::asset('assets/images/logo2.png') }}" class="h-8" alt="wikis Logo" /> --}}
            <span class="self-center text-2xl font-semibold whitespace-nowrap text-white">Evento</span>
        </a>
    </div>

    <div class="container flex items-center h-full px-6 ml-auto text-gray-600">

        <ul class="flex items-center ml-auto lg:mr-24 flex-shrink-0 space-x-6">
            <!-- Theme toggler -->
            <li class="flex">
                <div id="theme-toggler">
                    <button aria-label="theme-toggle" id="theme-toggle" type="button"
                        class="text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-4 focus:ring-gray-200 rounded-lg text-sm p-2.5">
                        <svg id="theme-toggle-dark-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
                        </svg>
                        <svg id="theme-toggle-light-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
                                fill-rule="evenodd" clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </div>
            </li>
            @auth
                <!-- user menu -->
                <li class="relative">
                    <button type="button"
                        class="flex text-sm py-2 px-2 dark:customgradient rounded-full md:me-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600"
                        id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown"
                        data-dropdown-placement="bottom">
                        <span class="sr-only">Open user menu</span>
                        <i class="fa-solid fa-user"></i>
                    </button>
                    <ul class="hidden absolute right-0 w-56 p-2 mt-2 space-y-2 text-gray-600 bg-white border border-gray-100 rounded-md shadow-md"
                        id="user-dropdown">
                        <li class="flex">

                            <a class="inline-flex items-center justify-between w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800"
                                href="#">
                                <span></span>

                            </a>
                        </li>
                        <li class=" flex">

                            <a class="inline-flex items-center justify-between w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800"
                                href="">
                                <span>Profile</span>
                            </a>

                        </li>
                        <li class=" flex">

                            <a class="inline-flex items-center justify-between w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800"
                                href="#">
                                <span>dashboard</span>
                                {{-- <span
                                class="inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-red-600 bg-red-100 rounded-full">
                                13
                            </span> --}}
                            </a>

                        </li>
                        <li class=" flex">
                            <form action="" method="POST">
                                @csrf
                                @method('POST')
                                <button type="submit"
                                    class="inline-flex items-center justify-between w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800">
                                    <span>logout</span>
                                </button>
                            </form>


                        </li>
                    </ul>

                </li>
            @endauth



            <!-- Notifications menu -->
            <li class="relative">
                <button id="notification-button"
                    class="relative align-middle rounded-md focus:outline-none focus:shadow-outline-purple">
                    <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z">
                        </path>
                    </svg>
                    <!-- Notification badge -->
                    <span aria-hidden="true"
                        class="absolute top-0 right-0 inline-block w-3 h-3 transform translate-x-1 -translate-y-1 bg-red-600 border-2 border-white rounded-full"></span>
                </button>
                <ul id="notifications"
                    class="hidden absolute right-0 w-56 p-2 mt-2 space-y-2 text-gray-600 bg-white border border-gray-100 rounded-md shadow-md">
                    <li class="flex">
                        <a class="inline-flex items-center justify-between w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800"
                            href="#">
                            <span>Messages</span>
                            <span
                                class="inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-red-600 bg-red-100 rounded-full">
                                13
                            </span>
                        </a>
                    </li>
                    <li class="flex">
                        <a class="inline-flex items-center justify-between w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800"
                            href="#">
                            <span>Sales</span>
                            <span
                                class="inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-red-600 bg-red-100 rounded-full">
                                2
                            </span>
                        </a>
                    </li>
                    <li class="flex">
                        <a class="inline-flex items-center justify-between w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800"
                            href="#">
                            <span>Alerts</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li>
                <a href=""
                    class="text-white bg-transparent focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-2xl text-sm px-4 py-2 text-center   border border-white-900 hover:bg-green-800  dark:focus:ring-blue-800 mx-2">Login</a>
            </li>
        </ul>
    </div>

</header>
