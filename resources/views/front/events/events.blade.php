@extends('front.layouts.master')

@section('title')
    Home
@endsection

@section('css')
@endsection

@section('content')
    <div class="customgradient font-[sans-serif]">
        <div class="max-w-7xl mx-auto">
            <div class="text-center ">
                <h2
                    class="text-3xl mb-12  mt-8 font-extrabold text-white inline-block relative after:absolute after:w-4/6 after:h-1 after:left-0 after:right-0 after:-bottom-4 after:mx-auto after:bg-orange-500 after:rounded-full">
                    UPCOMING EVENTS
                </h2>


            </div>

            <div
                class=" flex px-1 py-1 rounded-full border border-gray-100 overflow-hidden max-w-md mx-auto font-[sans-serif]">
                <input type='email'
                    class="w-full border-none bg-transparent text-white outline-none hover:select-none  pl-4 text-sm"
                    placeholder='Search Something...' />
                <button type='button'
                    class="bg-orange-600 hover:bg-blue-700 transition-all text-white text-sm rounded-full px-5 py-2.5">Search</button>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mt-8 max-md:max-w-lg mx-auto">
                @foreach ($events as $event)
                    <div
                        class="bg-gray-500 mb-6  cursor-pointer rounded overflow-hidden shadow-[0_2px_10px_-3px_rgba(6,81,237,0.3)] relative group">
                        <a href="{{ route('event.details', $event->id) }}">
                            <img src="{{ asset('storage/images/' . $event->image) }}" alt="Blog Post 1"
                                class="w-full h-96 object-cover" />
                        </a>

                        <div class="p-6 absolute bottom-0 left-0 right-0 bg-white opacity-90">
                            <span
                                class="text-sm block text-gray-600 mb-2">{{ \Carbon\Carbon::parse($event->date)->diffForHumans() }}
                                | BY
                                {{ $event->organizer->user->firstname . ' ' . $event->organizer->user->lastname }}</span>
                            <h3 class="text-xl font-bold text-[#333]">{{ $event->title }}</h3>
                            <div class="h-0 overflow-hidden group-hover:h-16 group-hover:mt-4 transition-all duration-300">
                                <p class="text-gray-600 text-sm">{{ $event->description }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
@endsection

@section('scripts')
@endsection
