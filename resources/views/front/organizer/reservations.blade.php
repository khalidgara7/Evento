@extends('front.layouts.master')

@section('title')
    Home
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/profile.css') }}">
@endsection

@section('content')
    <main class="mt-16 bg-opacity-25">
        <div class="lg:w-10/12 rounded-3xl navbargradient lg:mx-auto mb-8">

            <header class="flex flex-wrap items-center p-4 md:py-8">

                <div class="md:w-3/12 md:ml-16">
                    <!-- profile image -->
                    <img class="w-20 h-20 md:w-40 md:h-40 object-cover rounded-full
                       border-2 border-pink-600 p-1"
                        src="{{ asset('/images/uploads/' . auth()->user()->organizer->profile_picture) }}" alt="profile">
                </div>

                <!-- profile meta -->
                <div class="w-8/12 md:w-7/12 ml-4">
                    <div class="md:flex flex justify-between md:flex-wrap md:items-center mb-4">
                        <h2 class="text-3xl text-gray-100 inline-block font-light md:mr-2 mb-2 sm:mb-0">
                            {{ auth()->user()->firstname . '_' . auth()->user()->lastname }}
                        </h2>

                        <!-- badge -->
                        <span
                            class="inline-block fas text-gray-100 fa-certificate fa-lg 
                                 relative mr-6 text-xl transform -translate-y-2"
                            aria-hidden="true">
                            <i
                                class="fas fa-check text-white text-xs absolute inset-x-0
                                 ml-1 mt-px"></i>
                        </span>

                        <!-- follow button -->
                        <a href="{{ route('create.event') }}"
                            class='w-11 h-11 mt-3 flex justify-end  bg-orange-500 rounded-full flex items-center  justify-center cursor-pointer transition-all duration-500  hover:bg-indigo-700'>
                            <svg width='10' height='10' viewBox='0 0 10 10' fill='none'
                                xmlns='http://www.w3.org/2000/svg'>
                                <path d='M1.22229 5.00019H8.77785M5.00007 8.77797V1.22241' stroke='white' stroke-width='1.6'
                                    stroke-linecap='round' stroke-linejoin='round'></path>
                            </svg>
                        </a>

                    </div>

                    <!-- post, following, followers list for medium screens -->
                    <ul class="hidden md:flex space-x-8 mb-4">
                        <li class="text-gray-200 font-semibold">
                            <span class="text-gray-200 font-semibold">
                                {{ auth()->user()->email }}
                            </span>

                        </li>


                    </ul>

                    <!-- user meta form medium screens -->
                    <div class="hidden md:block">

                        <span class="text-gray-200">Travel, Nature and Music</span>
                        <p class="text-gray-200"> {{ auth()->user()->organizer->bio }}</p>
                    </div>

                </div>

                <!-- user meta form small screens -->
                <div class="md:hidden text-sm my-2">
                    <h1 class="text-gray-200 font-semibold">Mr Travlerrr...</h1>
                    <span class="text-gray-200">Travel, Nature and Music</span>
                    <p class="text-gray-200">{{ auth()->user()->organizer->bio }}</p>
                </div>

            </header>
            <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
                <div class="grid gap-8 sm:grid-cols-2 lg:grid-cols-4">
                    <div class="text-center">
                        <div
                            class="flex items-center justify-center w-10 h-10 mx-auto mb-3 rounded-full bg-indigo-50 sm:w-12 sm:h-12">
                            <svg class="w-8 h-8 text-deep-purple-accent-400 sm:w-10 sm:h-10" stroke="currentColor"
                                viewBox="0 0 52 52">
                                <polygon stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="none"
                                    points="29 13 14 29 25 29 23 39 38 23 27 23"></polygon>
                            </svg>
                        </div>
                        <h6 class="text-4xl text-gray-100 font-bold text-deep-purple-accent-400"></h6>
                        <p class="mb-2 text-gray-200 font-bold text-md">Total Events</p>
                        <p class="text-gray-400">
                            Total published Events :
                        </p>
                    </div>

                </div>
            </div>


            <!-- posts -->
            <div class="px-px md:px-3">

                <!-- user following for mobile only -->
                <ul
                    class="flex md:hidden justify-around space-x-8 border-t 
                  text-center p-2 text-gray-600 leading-snug text-sm">
                    <li>
                        <span class="font-semibold text-gray-200 block">136</span>
                        posts
                    </li>

                    <li>
                        <span class="font-semibold text-gray-200 block">40.5k</span>
                        followers
                    </li>
                    <li>
                        <span class="font-semibold text-gray-200 block">302</span>
                        following
                    </li>
                </ul>

                <!-- insta freatures -->
                <ul
                    class="flex items-center text-gray-200 justify-around md:justify-center space-x-12  
                      uppercase tracking-widest font-semibold text-xs
                      border-t">
                    <!-- posts tab is active -->
                    <li class="md:border-t md:border-gray-700 md:-mt-px md:text-gray-400">
                        <a class="inline-block p-3" href="#">
                            <i class="fas fa-th-text-gray-200 large text-xl md:text-xs"></i>
                            <span class="hidden text-gray-200 md:inline">Pending</span>
                        </a>
                    </li>
                    <li>
                        <a class="inline-block p-3" href="#">
                            <i class="far fa-square text-white text-xl md:text-xs"></i>
                            <span class="hidden text-green-500 md:inline">accepted</span>
                        </a>
                    </li>

                </ul>
                <h4 class="flex justify-center  relative font-bold text-2xl text-white  pt-5 z-50"> Requested Reservations
                </h4>
                <div class="w-full flex justify-center">
                    <span class="  text-center w-1/2 relative font-bold text-xs text-gray-400  py-2 z-50"> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sint assumenda nisi ducimus facilis enim nostrum ab vero debitis pariatur odit, labore expedita optio, quas, dolore suscipit molestias incidunt perferendis voluptates.
                    </span>
                </div>

                <div class="flex py-8 flex-col">
                    <div class=" overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                            <div class="overflow-hidden border border-gray-200 dark:border-gray-700 md:rounded-lg">
                                <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                                    <thead class="bg-gray-50 bg-gray-700  dark:bg-gray-800">
                                        <tr>
                                            <th scope="col"
                                                class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-200 dark:text-gray-400">
                                                <div class="flex items-center gap-x-3">
                                                    <input type="checkbox"
                                                        class="text-blue-500 border-gray-300 rounded dark:bg-gray-900 dark:ring-offset-gray-900 dark:border-gray-700">
                                                    <button class="flex items-center gap-x-2">
                                                        <span>Spectator name</span>

                                                        <svg class="h-3" viewBox="0 0 10 11" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M2.13347 0.0999756H2.98516L5.01902 4.79058H3.86226L3.45549 3.79907H1.63772L1.24366 4.79058H0.0996094L2.13347 0.0999756ZM2.54025 1.46012L1.96822 2.92196H3.11227L2.54025 1.46012Z"
                                                                fill="currentColor" stroke="currentColor"
                                                                stroke-width="0.1" />
                                                            <path
                                                                d="M0.722656 9.60832L3.09974 6.78633H0.811638V5.87109H4.35819V6.78633L2.01925 9.60832H4.43446V10.5617H0.722656V9.60832Z"
                                                                fill="currentColor" stroke="currentColor"
                                                                stroke-width="0.1" />
                                                            <path
                                                                d="M8.45558 7.25664V7.40664H8.60558H9.66065C9.72481 7.40664 9.74667 7.42274 9.75141 7.42691C9.75148 7.42808 9.75146 7.42993 9.75116 7.43262C9.75001 7.44265 9.74458 7.46304 9.72525 7.49314C9.72522 7.4932 9.72518 7.49326 9.72514 7.49332L7.86959 10.3529L7.86924 10.3534C7.83227 10.4109 7.79863 10.418 7.78568 10.418C7.77272 10.418 7.73908 10.4109 7.70211 10.3534L7.70177 10.3529L5.84621 7.49332C5.84617 7.49325 5.84612 7.49318 5.84608 7.49311C5.82677 7.46302 5.82135 7.44264 5.8202 7.43262C5.81989 7.42993 5.81987 7.42808 5.81994 7.42691C5.82469 7.42274 5.84655 7.40664 5.91071 7.40664H6.96578H7.11578V7.25664V0.633865C7.11578 0.42434 7.29014 0.249976 7.49967 0.249976H8.07169C8.28121 0.249976 8.45558 0.42434 8.45558 0.633865V7.25664Z"
                                                                fill="currentColor" stroke="currentColor"
                                                                stroke-width="0.3" />
                                                        </svg>
                                                    </button>
                                                </div>
                                            </th>

                                            <th scope="col"
                                                class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-200 dark:text-gray-400">
                                                EMAIL
                                            </th>
                                            <th scope="col"
                                                class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-200 dark:text-gray-400">
                                                DATE
                                            </th>

                                            <th scope="col"
                                                class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-200 dark:text-gray-400">
                                                Status
                                            </th>

                                            <th scope="col"
                                                class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-200 dark:text-gray-400">
                                                status actions
                                            </th>

                                        </tr>
                                    </thead>
                                    <tbody
                                        class="bg-transparent divide-y divide-gray-200 dark:divide-gray-700 dark:bg-gray-900">
                                        @foreach ($reservations as $reservation)
                                            <tr>
                                                <td
                                                    class="px-4 py-4 text-sm font-medium text-gray-700 dark:text-gray-200 whitespace-nowrap">
                                                    <div class="inline-flex items-center gap-x-3">
                                                        <input type="checkbox"
                                                            class="text-blue-500 border-gray-300 rounded dark:bg-gray-900 dark:ring-offset-gray-900 dark:border-gray-700">

                                                        <div class="flex items-center gap-x-2">

                                                            <h2 class="text-sm font-medium text-gray-200 dark:text-white ">
                                                                {{ $reservation->user->firstname . ' ' . $reservation->user->lastname }}
                                                            </h2>
                                                        </div>
                                                    </div>
                            </div>
                            </td>
                            <td class="px-4 py-4 text-sm text-gray-200 dark:text-gray-300 whitespace-nowrap">
                                {{ $reservation->user->email }}
                            </td>
                            <td class="px-4 py-4 text-sm text-gray-200 dark:text-gray-300 whitespace-nowrap">
                                {{ $reservation->created_at }} </td>

                            <td class="px-4 py-4 text-sm text-gray-200  dark:text-gray-300 whitespace-nowrap">
                                {{ $reservation->status }}
                            </td>
                            <td class="px-4 py-3">
                                @if ($reservation->status == "pending")
                                    <div class="flex items-center space-x-4 text-sm">

                                        <a href="{{ route('reservation.activate', $reservation->id) }}" onclick="return confirm('Do you really want to Accept this event ?');">
                                            <div
                                                class="inline-flex items-center px-1 py-1 rounded-full gap-x-2 text-emerald-500 bg-emerald-100/60 dark:bg-gray-800">
                                                <button
                                                    class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-green-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                                                    aria-label="Edit">
                                                    <svg width="12" height="12" viewBox="0 0 12 12"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M10 3L4.5 8.5L2 6" stroke="currentColor"
                                                            stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg>
                                                </button>
                                            </div>
                                        </a>
                                        <a href="{{ route('reservation.cancel', $reservation->id) }}">
                                            <div
                                                class="inline-flex items-center px-1 py-1 rounded-full gap-x-2 text-red-500 bg-red-100/60 dark:bg-gray-800">
                                                <button
                                                    class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-red-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                                                    aria-label="Edit">
                                                    <svg width="12" height="12" viewBox="0 0 12 12"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M9 3L3 9M3 3L9 9" stroke="currentColor"
                                                            stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg>
                                                </button>
                                            </div>
                                        </a>

                                    </div>
                                @endif
                            </td>

                            </tr>
                            @endforeach
                            </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>


            <h4 class="flex justify-center  relative font-bold text-2xl text-white  pt-5 z-50"> Historic Of Reservations
            </h4>
            <div class="w-full flex justify-center">
                <span class="  text-center w-1/2 relative font-bold text-xs text-gray-400  py-2 z-50"> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sint assumenda nisi ducimus facilis enim nostrum ab vero debitis pariatur odit, labore expedita optio, quas, dolore suscipit molestias incidunt perferendis voluptates.
                </span>
            </div>

            <div class="flex py-8 flex-col">
                <div class=" overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                        <div class="overflow-hidden border border-gray-200 dark:border-gray-700 md:rounded-lg">
                            <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                                <thead class="bg-gray-50 bg-gray-700  dark:bg-gray-800">
                                    <tr>
                                        <th scope="col"
                                            class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-200 dark:text-gray-400">
                                            <div class="flex items-center gap-x-3">
                                                <input type="checkbox"
                                                    class="text-blue-500 border-gray-300 rounded dark:bg-gray-900 dark:ring-offset-gray-900 dark:border-gray-700">
                                                <button class="flex items-center gap-x-2">
                                                    <span>Spectator name</span>

                                                    <svg class="h-3" viewBox="0 0 10 11" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M2.13347 0.0999756H2.98516L5.01902 4.79058H3.86226L3.45549 3.79907H1.63772L1.24366 4.79058H0.0996094L2.13347 0.0999756ZM2.54025 1.46012L1.96822 2.92196H3.11227L2.54025 1.46012Z"
                                                            fill="currentColor" stroke="currentColor"
                                                            stroke-width="0.1" />
                                                        <path
                                                            d="M0.722656 9.60832L3.09974 6.78633H0.811638V5.87109H4.35819V6.78633L2.01925 9.60832H4.43446V10.5617H0.722656V9.60832Z"
                                                            fill="currentColor" stroke="currentColor"
                                                            stroke-width="0.1" />
                                                        <path
                                                            d="M8.45558 7.25664V7.40664H8.60558H9.66065C9.72481 7.40664 9.74667 7.42274 9.75141 7.42691C9.75148 7.42808 9.75146 7.42993 9.75116 7.43262C9.75001 7.44265 9.74458 7.46304 9.72525 7.49314C9.72522 7.4932 9.72518 7.49326 9.72514 7.49332L7.86959 10.3529L7.86924 10.3534C7.83227 10.4109 7.79863 10.418 7.78568 10.418C7.77272 10.418 7.73908 10.4109 7.70211 10.3534L7.70177 10.3529L5.84621 7.49332C5.84617 7.49325 5.84612 7.49318 5.84608 7.49311C5.82677 7.46302 5.82135 7.44264 5.8202 7.43262C5.81989 7.42993 5.81987 7.42808 5.81994 7.42691C5.82469 7.42274 5.84655 7.40664 5.91071 7.40664H6.96578H7.11578V7.25664V0.633865C7.11578 0.42434 7.29014 0.249976 7.49967 0.249976H8.07169C8.28121 0.249976 8.45558 0.42434 8.45558 0.633865V7.25664Z"
                                                            fill="currentColor" stroke="currentColor"
                                                            stroke-width="0.3" />
                                                    </svg>
                                                </button>
                                            </div>
                                        </th>

                                        <th scope="col"
                                            class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-200 dark:text-gray-400">
                                            EMAIL
                                        </th>
                                        <th scope="col"
                                            class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-200 dark:text-gray-400">
                                            DATE
                                        </th>

                                        <th scope="col"
                                            class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-200 dark:text-gray-400">
                                            Status
                                        </th>

                                        <th scope="col"
                                            class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-200 dark:text-gray-400">
                                            status actions
                                        </th>

                                    </tr>
                                </thead>
                                <tbody
                                    class="bg-transparent divide-y divide-gray-200 dark:divide-gray-700 dark:bg-gray-900">
                                    @foreach ($HistoricReservations as $HistoricReservation)
                                        <tr>
                                            <td
                                                class="px-4 py-4 text-sm font-medium text-gray-700 dark:text-gray-200 whitespace-nowrap">
                                                <div class="inline-flex items-center gap-x-3">
                                                    <input type="checkbox"
                                                        class="text-blue-500 border-gray-300 rounded dark:bg-gray-900 dark:ring-offset-gray-900 dark:border-gray-700">

                                                    <div class="flex items-center gap-x-2">

                                                        <h2 class="text-sm font-medium text-gray-200 dark:text-white ">
                                                            {{ $HistoricReservation->user->firstname . ' ' . $HistoricReservation->user->lastname }}
                                                        </h2>
                                                    </div>
                                                </div>
                        </div>
                        </td>
                        <td class="px-4 py-4 text-sm text-gray-200 dark:text-gray-300 whitespace-nowrap">
                            {{ $HistoricReservation->user->email }}
                        </td>
                        <td class="px-4 py-4 text-sm text-gray-200 dark:text-gray-300 whitespace-nowrap">
                            {{ $HistoricReservation->created_at }} </td>

                        <td class="px-4 py-4 text-sm text-gray-200  dark:text-gray-300 whitespace-nowrap">
                            {{ $HistoricReservation->status }}
                        </td>
                        <td class="px-4 py-3">
                            @if ($HistoricReservation->status == "pending")
                                <div class="flex items-center space-x-4 text-sm">

                                    <a href="{{ route('HistoricReservation.activate', $HistoricReservation->id) }}" onclick="return confirm('Do you really want to Accept this event ?');">
                                        <div
                                            class="inline-flex items-center px-1 py-1 rounded-full gap-x-2 text-emerald-500 bg-emerald-100/60 dark:bg-gray-800">
                                            <button
                                                class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-green-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                                                aria-label="Edit">
                                                <svg width="12" height="12" viewBox="0 0 12 12"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M10 3L4.5 8.5L2 6" stroke="currentColor"
                                                        stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                            </button>
                                        </div>
                                    </a>
                                    <a href="{{ route('HistoricReservation.cancel', $HistoricReservation->id) }}">
                                        <div
                                            class="inline-flex items-center px-1 py-1 rounded-full gap-x-2 text-red-500 bg-red-100/60 dark:bg-gray-800">
                                            <button
                                                class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-red-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                                                aria-label="Edit">
                                                <svg width="12" height="12" viewBox="0 0 12 12"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M9 3L3 9M3 3L9 9" stroke="currentColor"
                                                        stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                            </button>
                                        </div>
                                    </a>

                                </div>
                            @endif
                        </td>

                        </tr>
                        @endforeach
                        </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>


        </div>

        </div>
    </main>
@endsection

@section('scripts')
@endsection
