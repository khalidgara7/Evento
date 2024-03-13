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


            <div id='search-form'>
                <label
                    class="mx-auto mt-8 relative bg-white min-w-sm max-w-4xl flex flex-col md:flex-row items-center justify-center border py-2 px-2 rounded-2xl gap-2 shadow-2xl focus-within:border-gray-300"
                    for="search-bar">
                    <input id="search-bar" placeholder="your keyword here" name="search"
                        class="px-6 py-2 w-2/3 max-w-2xl rounded-md flex-1 outline-none bg-white" required="">
                    <button type="submit"
                        class="w-1/3 md:w-auto px-6 py-3 bg-primary-300 border-primary-100 text-white fill-white active:scale-95 duration-100 border will-change-transform overflow-hidden relative rounded-xl transition-all">
                        <div class="flex items-center transition-all opacity-1">
                            <span class="text-sm font-semibold whitespace-nowrap truncate mx-auto">
                                Search
                            </span>
                        </div>
                    </button>

                    <select id="categories" name="categorie"
                        class="w-1/3 md:w-auto px-6 py-2 text-primary-300 border-primary-100 fill-white active:scale-95 duration-100 border will-change-transform overflow-hidden relative rounded-xl transition-all">
                        @foreach ($categories as $categorie)
                            <option value="{{ $categorie->id }}">{{ $categorie->name }}</option>
                        @endforeach
                    </select>

                </label>
            </div>

            <div id="event_container" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mt-8 max-md:max-w-lg mx-auto">
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
            <div class="m-4">
                {{ $events->links() }}
            </div>
        </div>
    </div>
@endsection

@section('scripts')
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

<script src="{{ URL::asset('assets/js/livesearch.js') }}"></script>
<script src="{{ URL::asset('assets/js/filters.js') }}"></script>


@endsection
