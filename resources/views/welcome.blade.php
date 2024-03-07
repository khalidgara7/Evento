@extends('front.layouts.master')

@section('title')
    Home
@endsection

@section('css')
@endsection

@section('content')
    <main class="  relative overflow-hidden  w-full h-full ">
        <img class="absolute inset-0  object-cover w-full h-full" src="{{ asset('assets/images/section4.jpg') }}"
            alt="" srcset="">
        <div class="px-4 sm:px-6 customgradient lg:px-8  dark:bg-gray-800 flex relative z-20 items-center overflow-hidden">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8 pt-12 sm:flex relative">
                <div class="sm:w-2/3 lg:w-1/2 sm:flex flex-col sm:relative z-50">
                    <span class="w-16 h-2 bg-orange-100 dark:bg-white mb-4 sm:mb-6"></span>
                    <h1
                        class="font-bebas-neue uppercase text-4xl sm:text-5xl md:text-6xl lg:text-7xl font-black flex flex-col leading-tight dark:text-white text-white mb-4 sm:mb-6">
                        Elevate Your Fitness Journey WITH events
                        <span class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl text-orange-100">
                            EasyEVENT
                        </span>
                    </h1>
                    <p class="text-sm sm:text-base text-white dark:text-white mb-6 sm:mb-8">
                        Unleash the best version of yourself at EasyEVENT events. Our state-of-the-art facilities, expert
                        trainers, and vibrant community are here to inspire and guide you on your fitness journey.
                    </p>
                    <div class="flex flex-col sm:flex-row items-start sm:items-center">
                        <a href="#"
                            class="uppercase py-2 px-4 rounded-lg bg-orange-100 border-2 border-transparent text-white text-md mr-0 sm:mr-4 mb-2 sm:mb-0 hover:bg-pink-400">
                            Get started
                        </a>
                        <a href="#"
                            class="uppercase py-2 px-4 rounded-lg bg-transparent border-2 border-orange-100 text-orange-100 dark:text-white hover:bg-pink-500 hover:text-white text-md">
                            Read more
                        </a>
                    </div>
                </div>
                <div class="hidden lg:block  lg:w-3/5 relative">
                    <img src="{{ asset('assets/images/gara.png') }}" class="w-full  m-auto" />
                </div>
            </div>
        </div>
    </main>


    <section class="relative overflow-hidden w-full h-full">
        <img class="absolute top-0 left-0 object-cover w-full h-full" src="{{ asset('assets/images/section3.jpg') }}"
            alt="Background Image">
        <div class="flex relative z-50 h-full items-center justify-center customgradient  px-8 dark:bg-gray-800">
            <div class="container mx-auto flex flex-wrap items-start">
                <div class="w-full lg:w-2/5">
                    <img src="{{ asset('assets/images/aboutimg.png') }}" alt="Violinist" class="w-full inset-0 lg:max-w-lg"
                        style="transform: translateY(0%);">
                </div>
                <div class="w-full lg:w-3/5 px-6 text-center lg:text-left">
                    <div class="py-12">
                        <span class="w-20 h-2 bg-orange-100 dark:bg-white mb-12 inline-block"></span>
                        <h2
                            class="font-bebas-neue uppercase text-4xl sm:text-4xl font-black leading-none dark:text-white text-white">
                            About EasyEVENT events
                            <span class="text-4xl sm:text-4xl text-orange-100">
                                EasyEVENT
                            </span>
                        </h2>
                        <p class="text-sm sm:text-base text-white dark:text-white py-4">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore necessitatibus ut odit
                            corrupti sint optio neque dolorum itaque quasi nisi ipsam incidunt at voluptates, possimus,
                            repellat nihil provident! Ut, officia. Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Odit quia consequuntur incidunt praesentium velit neque rerum voluptatem vitae, veritatis
                            cumqueatis cumque
                            distinctio totam a iusto. Aliquam fugit eligendi nisi officia possimus?
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore necessitatibus ut odit
                            corrupti sint optio neque dolorum itaque quasi nisi ipsam incidunt at voluptates, possimus,
                            repellat nihil provident! Ut, officia. Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Odit quia consequuntur incidunt praesentium velit neque rerum voluptatem vitae, veritatis cumque
                            distinctio totam a iusto. Aliquam fugit eligendi nisi officia possimus?
                            distinctio totam a iusto. Aliquam fugit eligendi nisi officia possimus?
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore necessitatibus ut odit
                            corrupti sint optio neque dolorum itaque quasi nisi ipsam incidunt at voluptates, possimus,
                            repellat nihil provident! Ut, officia. Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Odit quia consequuntur incidunt praesentium velit neque rerum voluptatem vitae, veritatis cumque
                            distinctio totam a iusto. Aliquam fugit eligendi nisi officia possimus?

                        </p>
                        <div class="mt-8">
                            <a href="#"
                                class="uppercase py-2 px-4 rounded-lg bg-transparent border-2 border-orange-100 text-orange-100 dark:text-white hover:bg-pink-500 hover:text-white text-md">
                                About us
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class=" customgradient w-full h-full  relative overflow-hidden ">

        <img class="absolute inset-0  object-cover w-full h-full" src="{{ asset('assets/images/section3.jpg') }}"
            alt="" srcset="">
        <h2 class="flex justify-center customgradient relative font-bold text-4xl text-white  py-5 z-50"> UpComing Events
        </h2>
        <div class="flex relative z-50 customgradient items-center w-full h-full justify-center overflow-hidden">

            <div class="grid grid-cols-1 z-50 lg:w-3/4 gap-5 lg:grid-cols-3 lg:gap-10  ">
                @foreach ($events as $event)
                    <div class="">
                        <div class="max-w-sm  shadow-lg rounded-lg overflow-hidden my-4">
                            <img class="w-full h-56 object-cover object-center"
                                src="{{ asset('storage/images/' . $event->image) }}" alt="avatar">

                            <div class="py-4  px-6">
                                <h3 class="text-2xl font-semibold text-gray-100">{{ $event->title }}</h3>
                                <h3 class="text-1xl font-semibold text-gray-300">Organizer : <span
                                        class="py-2 font-semibold text-primary-300">{{ $event->organizer->user->firstname . ' ' . $event->organizer->user->lastname }}</span>
                                </h3>

                                <div class="flex items-center mt-4 text-gray-100">
                                    <svg class="h-6 w-6 fill-current" viewBox="0 0 512 512">
                                        <path
                                            d="M239.208 343.937c-17.78 10.103-38.342 15.876-60.255 15.876-21.909 0-42.467-5.771-60.246-15.87C71.544 358.331 42.643 406 32 448h293.912c-10.639-42-39.537-89.683-86.704-104.063zM178.953 120.035c-58.479 0-105.886 47.394-105.886 105.858 0 58.464 47.407 105.857 105.886 105.857s105.886-47.394 105.886-105.857c0-58.464-47.408-105.858-105.886-105.858zm0 186.488c-33.671 0-62.445-22.513-73.997-50.523H252.95c-11.554 28.011-40.326 50.523-73.997 50.523z" />
                                        <g>
                                            <path
                                                d="M322.602 384H480c-10.638-42-39.537-81.691-86.703-96.072-17.781 10.104-38.343 15.873-60.256 15.873-14.823 0-29.024-2.654-42.168-7.49-7.445 12.47-16.927 25.592-27.974 34.906C289.245 341.354 309.146 364 322.602 384zM306.545 200h100.493c-11.554 28-40.327 50.293-73.997 50.293-8.875 0-17.404-1.692-25.375-4.51a128.411 128.411 0 0 1-6.52 25.118c10.066 3.174 20.779 4.862 31.895 4.862 58.479 0 105.886-47.41 105.886-105.872 0-58.465-47.407-105.866-105.886-105.866-37.49 0-70.427 19.703-89.243 49.09C275.607 131.383 298.961 163 306.545 200z" />
                                        </g>
                                    </svg>
                                    <h4 class="px-2 text-sm">{{ $event->availableSeats }} available Seats</h4>
                                </div>
                                <div class="flex items-center mt-4 text-gray-100">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="14" width="14"
                                        viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                        <path fill="#d9dce3"
                                            d="M464 256A208 208 0 1 1 48 256a208 208 0 1 1 416 0zM0 256a256 256 0 1 0 512 0A256 256 0 1 0 0 256zM232 120V256c0 8 4 15.5 10.7 20l96 64c11 7.4 25.9 4.4 33.3-6.7s4.4-25.9-6.7-33.3L280 243.2V120c0-13.3-10.7-24-24-24s-24 10.7-24 24z" />
                                    </svg>
                                    <h4 class="px-2 text-sm">{{ \Carbon\Carbon::parse($event->date)->diffForHumans() }}</h4>
                                </div>
                                <div class="flex items-center mt-4 text-gray-100">
                                    <span class="w-2 py-3 bg-orange-100">
                                    </span>
                                    <span class="px-3 font-semibold text-gray-100">{{ $event->category->name }}</span>

                                </div>
                                <div class="flex items-center mt-4 justify-between text-gray-100">
                                    <a href="{{ route('event.details',$event->id) }}" class="relative px-6 py-2 font-medium text-white group">
                                        <span
                                            class="absolute inset-0 w-full h-full transition-all duration-300 ease-out transform translate-x-0 -skew-x-12 bg-gray-500 group-hover:bg-primary-100 group-hover:skew-x-12"></span>
                                        <span
                                            class="absolute inset-0 w-full h-full transition-all duration-300 ease-out transform skew-x-12 bg-gray-800 group-hover:bg-primary-300 group-hover:-skew-x-12"></span>
                                        <span
                                            class="absolute bottom-0 left-0 hidden w-10 h-20 transition-all duration-100 ease-out transform -translate-x-8 translate-y-10 bg-primary-400 -rotate-12"></span>
                                        <span
                                            class="absolute bottom-0 right-0 hidden w-10 h-20 transition-all duration-100 ease-out transform translate-x-10 translate-y-8 bg-orange-200 -rotate-12"></span>
                                        <span class="relative">View More</span>
                                    </a>
                                    <a href="{{ Route('booking.event',$event->id) }}" class="relative px-6 py-2 font-medium text-white group">
                                        <span
                                            class="absolute inset-0 w-full h-full transition-all duration-300 ease-out transform translate-x-0 -skew-x-12 bg-primary-300 group-hover:bg-primary-100 group-hover:skew-x-12"></span>
                                        <span
                                            class="absolute inset-0 w-full h-full transition-all duration-300 ease-out transform skew-x-12 bg-primary-100 group-hover:bg-primary-300 group-hover:-skew-x-12"></span>
                                        <span
                                            class="absolute bottom-0 left-0 hidden w-10 h-20 transition-all duration-100 ease-out transform -translate-x-8 translate-y-10 bg-primary-400 -rotate-12"></span>
                                        <span
                                            class="absolute bottom-0 right-0 hidden w-10 h-20 transition-all duration-100 ease-out transform translate-x-10 translate-y-8 bg-orange-200 -rotate-12"></span>
                                        <span class="relative">Get Ticket</span>
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                @endforeach


            </div>
        </div>
        <div class="relative customgradient z-50 flex justify-center py-8 items-center">
            <div>
                <a href="{{ route('event.all') }}" class="relative px-8 py-2 font-medium text-white group">
                    <span
                        class="absolute inset-0 w-full h-full transition-all duration-300 ease-out transform translate-x-0 -skew-x-12 bg-orange-500 group-hover:bg-primary-100 group-hover:skew-x-12"></span>
                    <span
                        class="absolute inset-0 w-full h-full transition-all duration-300 ease-out transform skew-x-12 bg-orange-800 group-hover:bg-primary-300 group-hover:-skew-x-12"></span>
                    <span
                        class="absolute bottom-0 left-0 hidden w-10 h-20 transition-all duration-100 ease-out transform -translate-x-8 translate-y-10 bg-primary-400 -rotate-12"></span>
                    <span
                        class="absolute bottom-0 right-0 hidden w-10 h-20 transition-all duration-100 ease-out transform translate-x-10 translate-y-8 bg-orange-200 -rotate-12"></span>
                    <span class="relative">View all</span>
                </a>
            </div>
        </div>

    </section>
@endsection

@section('scripts')
@endsection
