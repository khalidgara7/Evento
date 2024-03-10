<header class="flex flex-wrap items-center p-4 md:py-8">

    <div class="md:w-3/12 md:ml-16">
        <!-- profile image -->
        <img class="object-cover w-20 h-20 p-1 border-2 border-pink-600 rounded-full md:w-40 md:h-40"
            src="{{ asset('assets/images/profileuser.png') }}" alt="profile">
    </div>

    <!-- profile meta -->
    <div class="w-8/12 ml-4 md:w-7/12">
        <div class="flex justify-between mb-4 md:flex md:flex-wrap md:items-center">
            <h2 class="inline-block mb-2 text-3xl font-light text-gray-100 md:mr-2 sm:mb-0">
                {{ auth()->user()->firstname . '_' . auth()->user()->lastname }}
            </h2>

            <!-- badge -->
            <span
                class="relative inline-block mr-6 text-xl text-gray-100 transform -translate-y-2 fas fa-certificate fa-lg"
                aria-hidden="true">
                <i class="absolute inset-x-0 mt-px ml-1 text-xs text-white fas fa-check"></i>
            </span>


        </div>

        <!-- post, following, followers list for medium screens -->
        <ul class="hidden mb-4 space-x-8 md:flex">
            <li class="font-semibold text-gray-200">
                <span class="font-semibold text-gray-200">
                    {{ auth()->user()->email }}
                </span>

            </li>


        </ul>

        <!-- user meta form medium screens -->
        <div class="hidden md:block">

            <span class="text-gray-200">Travel, Nature and Music</span>
            <p class="text-gray-200">

                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ratione saepe molestiae eligendi vero corporis temporibus doloremque doloribus aut quos fuga! Assumenda in inventore excepturi. Nesciunt iusto asperiores dolore voluptatem odit!
            </p>
        </div>

    </div>

    <!-- user meta form small screens -->
    <div class="my-2 text-sm md:hidden">
        <h1 class="font-semibold text-gray-200">Mr Travlerrr...</h1>
        <span class="text-gray-200">Travel, Nature and Music</span>
        <p class="text-gray-200">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur accusamus voluptatibus eligendi assumenda sapiente illo quas tempora quia officiis quaerat quibusdam exercitationem ullam quasi, officia eius voluptatem, dolorum ipsam temporibus!</p>
    </div>

</header>

<!-- posts -->
<div class="px-px md:px-3">

    <!-- user following for mobile only -->
    <ul class="flex justify-around p-2 space-x-8 text-sm leading-snug text-center text-gray-600 border-t md:hidden">
        <li>
            <span class="block font-semibold text-gray-200">136</span>
            posts
        </li>

        <li>
            <span class="block font-semibold text-gray-200">40.5k</span>
            followers
        </li>
        <li>
            <span class="block font-semibold text-gray-200">302</span>
            following
        </li>
    </ul>

    <!-- insta freatures -->
    <ul
        class="flex items-center justify-around space-x-12 text-xs font-semibold tracking-widest text-gray-200 uppercase border-t md:justify-center">
        <!-- posts tab is active -->
        <li class="md:border-t md:border-gray-700 md:-mt-px md:text-gray-400">
            <a class="inline-block p-3" href="#">
                <i class="text-xl fas fa-th-text-gray-200 large md:text-xs"></i>
                <span class="hidden text-gray-200 md:inline">Pending</span>
            </a>
        </li>
        <li>
            <a class="inline-block p-3" href="#">
                <i class="text-xl text-white far fa-square md:text-xs"></i>
                <span class="hidden text-green-500 md:inline">accepted</span>
            </a>
        </li>

    </ul>

    <!-- column -->
    <div class="grid grid-cols-1 gap-6 mx-auto mt-8 md:grid-cols-2 lg:grid-cols-4 max-md:max-w-lg">

        @foreach ($reservations as $reservation)

            <div
                class="bg-gray-500 mb-6 mx-2 cursor-pointer rounded overflow-hidden shadow-[0_2px_10px_-3px_rgba(6,81,237,0.3)] relative group">
                <a href="">
                    <img src="{{ asset('assets/images/getticket.jpg') }}" alt="Blog Post 1"
                        class="object-cover w-full h-96" />
                </a>
                @if ($reservation->status=='pending')

                    <div class="absolute bottom-0 left-0 right-0 p-6 bg-white opacity-90">
                        <span
                            class="block mb-2 text-sm text-gray-600">{{ \Carbon\Carbon::parse($reservation->date)->diffForHumans() }}
                            | BY
                            {{ $reservation->user->firstname . ' ' . $reservation->user->lastname }}</span>
                        <h3 class="text-xl font-bold text-[#333]">{{ $reservation->title }}</h3>
                        <div class="h-0 overflow-hidden transition-all duration-300 group-hover:h-16 group-hover:mt-4">
                            <p class="text-sm text-gray-600">{{ $reservation->description }}</p>
                        </div>

                    </div>
                @elseif ($reservation->status == 'confirmed')
                    <div class="absolute bottom-0 left-0 right-0 p-6 bg-green-600 opacity-90">
                        <span
                            class="block mb-2 text-sm text-gray-100">{{ \Carbon\Carbon::parse($reservation->date)->diffForHumans() }}
                            | BY
                            {{ $reservation->user->firstname . ' ' . $reservation->user->lastname }}</span>
                        <h3 class="text-xl font-bold text-gray-100">{{ $reservation->event->title }}</h3>
                        <div class="h-0 overflow-hidden transition-all duration-300 group-hover:h-16 group-hover:mt-4">
                            <p class="text-sm text-gray-300">{{ $reservation->event->description }}</p>
                        </div>

                        <span class="block mb-2 text-sm text-gray-300">
                            | Avaliable Seats :
                        </span>
                        <a href="{{ route('generate.ticket', $reservation->id) }}"
                            class="inline-flex items-center px-1 py-1 mt-2 text-gray-200 border border-indigo-100 rounded">
                            Ticket
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" viewBox="0 0 24 24" class="w-2 h-2 ml-2">
                                <path d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                            </svg>
                        </a>
                    </div>
                @endif
            </div>
        @endforeach

    </div>


</div>
<div class="p-4 m-4">
    {{ $reservations->links() }}
</div>
