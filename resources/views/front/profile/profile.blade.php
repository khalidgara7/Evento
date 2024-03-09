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
                        <h6 class="text-4xl text-gray-100 font-bold text-deep-purple-accent-400">{{ $statistics['total_events'] }}</h6>
                        <p class="mb-2 text-gray-200 font-bold text-md">Total Events</p>
                        <p class="text-gray-400">
                            Total published Events : {{ $statistics['total_approved_events'] }}
                        </p>
                    </div>
                    <div class="text-center">
                        <div
                            class="flex items-center justify-center w-10 h-10 mx-auto mb-3 rounded-full bg-indigo-50 sm:w-12 sm:h-12">
                            <svg class="w-8 h-8 text-deep-purple-accent-400 sm:w-10 sm:h-10" stroke="currentColor"
                                viewBox="0 0 52 52">
                                <polygon stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="none"
                                    points="29 13 14 29 25 29 23 39 38 23 27 23"></polygon>
                            </svg>
                        </div>
                        <h6 class="text-4xl text-gray-100 font-bold text-deep-purple-accent-400">{{ $statistics['total_reservations'] }}
                        </h6>
                        <p class="mb-2 text-gray-200 font-bold text-md">All time reservations</p>
                        <p class="text-gray-400">
                            the Percentage Of reservation Is <br> {{ $statistics['PercentageOfReservations'] . '%' }}
                        </p>
                    </div>
                    <div class="text-center">
                        <div
                            class="flex items-center justify-center w-10 h-10 mx-auto mb-3 rounded-full bg-indigo-50 sm:w-12 sm:h-12">
                            <svg class="w-8 h-8 text-deep-purple-accent-400 sm:w-10 sm:h-10" stroke="currentColor"
                                viewBox="0 0 52 52">
                                <polygon stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="none"
                                    points="29 13 14 29 25 29 23 39 38 23 27 23"></polygon>
                            </svg>
                        </div>
                        <h6 class="text-4xl text-gray-100 font-bold text-deep-purple-accent-400">91</h6>
                        <p class="mb-2 text-gray-200 font-bold text-md">Subscribers</p>
                        <p class="text-gray-400">
                            It's a helluva start, being able to recognize what makes you happy today, in this moment.
                        </p>
                    </div>
                    <div class="text-center">
                        <div
                            class="flex items-center justify-center w-10 h-10 mx-auto mb-3 rounded-full bg-indigo-50 sm:w-12 sm:h-12">
                            <svg class="w-8 h-8 text-deep-purple-accent-400 sm:w-10 sm:h-10" stroke="currentColor"
                                viewBox="0 0 52 52">
                                <polygon stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="none"
                                    points="29 13 14 29 25 29 23 39 38 23 27 23"></polygon>
                            </svg>
                        </div>
                        <h6 class="text-4xl  text-gray-100 font-bold text-deep-purple-accent-400">52</h6>
                        <p class="mb-2 text-gray-200 font-bold text-md">Products</p>
                        <p class="text-gray-400">
                            Happiness is when what you think, what you say, and what you do are in harmony.
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

                <!-- column -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mt-8 max-md:max-w-lg mx-auto">

                    @foreach ($events as $event)
                        <div
                            class="bg-gray-500 mb-6 mx-2 cursor-pointer rounded overflow-hidden shadow-[0_2px_10px_-3px_rgba(6,81,237,0.3)] relative group">
                            <a href="{{ route('event.details', $event->id) }}">
                                <img src="{{ asset('storage/images/' . $event->image) }}" alt="Blog Post 1"
                                    class="w-full h-96 object-cover" />
                            </a>
                            @if ($event->status == 'pending')
                                <div class="p-6 absolute bottom-0 left-0 right-0 bg-white opacity-90">
                                    <span
                                        class="text-sm block text-gray-600 mb-2">{{ \Carbon\Carbon::parse($event->date)->diffForHumans() }}
                                        | BY
                                        {{ $event->organizer->user->firstname . ' ' . $event->organizer->user->lastname }}</span>
                                    <h3 class="text-xl font-bold text-[#333]">{{ $event->title }}</h3>
                                    <div
                                        class="h-0 overflow-hidden group-hover:h-16 group-hover:mt-4 transition-all duration-300">
                                        <p class="text-gray-600 text-sm">{{ $event->description }}</p>
                                    </div>

                                </div>
                            @elseif ($event->status == 'active')
                                <div class="p-6 absolute bottom-0 left-0 right-0 bg-green-600 opacity-90">
                                    <span
                                        class="text-sm block text-gray-100 mb-2">{{ \Carbon\Carbon::parse($event->date)->diffForHumans() }}
                                        | BY
                                        {{ $event->organizer->user->firstname . ' ' . $event->organizer->user->lastname }}</span>
                                    <h3 class="text-xl font-bold text-gray-100">{{ $event->title }}</h3>
                                    <div
                                        class="h-0 overflow-hidden group-hover:h-16 group-hover:mt-4 transition-all duration-300">
                                        <p class="text-gray-300 text-sm">{{ $event->description }}</p>
                                    </div>
                                    <span class="text-sm block text-gray-300 mb-2"> | Total Reservations :
                                        {{ $event->reservations_count }}
                                    </span>
                                    <span class="text-sm block text-gray-300 mb-2">
                                        | Avaliable Seats :
                                        {{ $event->availableSeats }}
                                    </span>
                                    <a href="{{ route('orangizer.reservations',$event->id) }}"
                                        class="text-gray-200 mt-2 border border-indigo-100 py-1 px-1 rounded inline-flex items-center">
                                        reservation
                                        <svg fill="none" stroke="currentColor" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24"
                                            class="w-2 h-2 ml-2">
                                            <path d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                        </svg>
                                    </a>
                                </div>
                            @endif
                        </div>
                    @endforeach

                </div>


            </div>
{{--            pagination--}}
            <div class="m-4 p-4">
                {{ $events->links() }}
            </div>
        </div>
    </main>
@endsection

@section('scripts')
@endsection
