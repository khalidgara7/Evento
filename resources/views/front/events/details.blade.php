@extends('front.layouts.master')

@section('title')
    Home
@endsection

@section('css')
@endsection

@section('content')
    <div class="text-center ">
        <h2
            class="text-3xl mb-4  mt-8 font-extrabold text-white inline-block relative after:absolute after:w-4/6 after:h-1 after:left-0 after:right-0 after:-bottom-4 after:mx-auto after:bg-orange-500 after:rounded-full">
            Event Detail
        </h2>


    </div>
    <div class=" m-8  font-[sans-serif]">

        <!-- Section: Design Block -->
        <section class="mb-32">

            <div class="container mx-auto text-center lg:text-left xl:px-26">

                <div class="flex grid items-center lg:grid-cols-2">

                    <div class="mb-12 lg:mb-0">
                        <!-- Container for demo purpose -->
                        @if (session('error'))
                            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
                                <strong class="font-bold">Error!</strong>
                                <span class="block sm:inline">{{ session('error') }}</span>
                            </div>
                        @endif

                        @if (session('success'))
                            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                                <strong class="font-bold">Success!</strong>
                                <span class="block sm:inline">{{ session('success') }}</span>
                            </div>
                        @endif

                        <div
                            class="relative z-[1] block rounded-lg navbargradient px-6 py-12 shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] backdrop-blur-[30px] dark:bg-[hsla(0,0%,5%,0.55)] dark:shadow-black/20 md:px-12 lg:-mr-14">
                            <h2 class="mb-4 text-white text-3xl font-bold">{{ $event->title }}</h2>
                            <div
                                class="mx-auto mb-2 text-neutral-200 flex flex-col md:flex-row md:justify-around lg:justify-between">
                                <p class="mx-auto mb-4 text-sm flex items-center md:mx-0 md:mb-2 lg:mb-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="12" width="10.5"
                                        viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                        <path fill="#ffffff"
                                            d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z" />
                                    </svg>
                                    <span class="mx-2">
                                        {{ $event->organizer->user->firstname . ' ' . $event->organizer->user->lastname }}
                                    </span>
                                </p>

                            </div>

                            <p class="mb-8 text-neutral-200 dark:text-neutral-300 lg:pb-0">
                                {{ $event->description }}
                            </p>

                            <div
                                class="mx-auto text-neutral-200 mb-8 flex flex-col md:flex-row md:justify-around lg:justify-between">

                                <p class="mx-auto mb-4 flex items-center md:mx-0 md:mb-2 lg:mb-0 ">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="14" width="11"
                                        viewBox="0 0 384 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                        <path fill="#ffffff"
                                            d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z" />
                                    </svg>
                                    <span class="mx-2">
                                        {{ $event->location }}

                                    </span>
                                </p>

                                <p class="mx-auto mb-4 text-sm flex items-center md:mx-0 md:mb-2 lg:mb-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="2" stroke="currentColor" class="mr-2 h-5 w-5">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    Avalible Seates :
                                    <span class="mx-2">
                                        {{ $event->availableSeats }}
                                    </span>
                                </p>


                                <p class="mx-auto mb-2 flex items-center md:mx-0 lg:mb-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="16" width="14.5"
                                        viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                        <path fill="#ffffff"
                                            d="M128 0c17.7 0 32 14.3 32 32V64H288V32c0-17.7 14.3-32 32-32s32 14.3 32 32V64h48c26.5 0 48 21.5 48 48v48H0V112C0 85.5 21.5 64 48 64H96V32c0-17.7 14.3-32 32-32zM0 192H448V464c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V192zM329 305c9.4-9.4 9.4-24.6 0-33.9s-24.6-9.4-33.9 0l-95 95-47-47c-9.4-9.4-24.6-9.4-33.9 0s-9.4 24.6 0 33.9l64 64c9.4 9.4 24.6 9.4 33.9 0L329 305z" />
                                    </svg>
                                    <span class="mx-2">
                                        {{ $event->date }}

                                    </span>
                                </p>
                            </div>

                            <p class="mb-0 text-neutral-200 dark:text-neutral-300">
                                In ac turpis justo. Vivamus auctor quam vitae odio feugiat
                                pulvinar. Sed semper ligula sed lorem tincidunt dignissim. Nam
                                sed cursus lectus. Proin non rutrum magna. Proin gravida,
                                justo et imperdiet tristique, turpis nisi viverra est, nec
                                posuere ex arcu sit amet erat. Sed a dictum sem. Duis pretium
                                condimentum nulla, ut aliquet erat auctor sed. Aenean
                                facilisis neque id ligula maximus scelerisque. Nunc sed velit
                                rhoncus, interdum dolor at, lacinia lacus. Proin eleifend
                                viverra posuere. Ut commodo risus lacus, ac scelerisque quam
                                aliquam dictum. Etiam dignissim pulvinar eros eget auctor.
                                Quisque congue turpis quis libero ullamcorper imperdiet.
                                Vivamus a orci maximus, dignissim ligula a, congue dui. Morbi
                                et lectus sit amet neque luctus viverra.
                            </p>
                            <div class="mt-4 flex items-center gap-x-2">
                                <img class="object-cover w-8 h-8 rounded-lg"
                                    src="{{ asset('storage/images/' . $event->category->image) }}" alt="">

                                <div>
                                    <h1 class="text-base font-semibold text-gray-100 capitalize dark:text-white">
                                        {{ $event->category->name }}
                                    </h1>
                                </div>
                            </div>

                            <div class="mt-12 flex justify-end">
                                <a href="{{ Route('booking.event', $event->id) }}"
                                    class="bg-[#55F5A3] hover:bg-green-400 transition-all text-[#333] font-bold text-sm rounded-full px-12 py-3">
                                    Book Now
                                </a>
                            </div>

                        </div>

                    </div>

                    <div>
                        <img src="{{ asset('storage/images/' . $event->image) }}"
                            class="w-full  rounded-lg shadow-lg dark:shadow-black/20" alt="image" />
                    </div>
                </div>
            </div>
            <!-- Jumbotron -->
        </section>
        <!-- Section: Design Block -->
    </div>
    <!-- Container for demo purpose -->
    </div>
@endsection

@section('scripts')
@endsection
