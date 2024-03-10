@extends('back.layouts.master')

@section('title')
    events management
@endsection

@section('title_page')
    Events
@endsection

@section('css')
@endsection

@section('content')


    <section class="container px-24 pt-16 mx-auto">
        <h2 class="my-8 text-4xl font-semibold tracking-widest text-center text-gray-700 font-poppins dark:text-gray-200">
            <span class="text-primary-100 dark:text-orange">@yield('title_page') </span> - Managment
        </h2>

        <div class="flex items-center bg-gray-100 dark:bg-gray-900">
            <div class="container max-w-6xl px-5 mx-auto my-8">
                <div class="grid gap-7 sm:grid-cols-2 lg:grid-cols-4">
                    <div class="flex items-center justify-between p-5 bg-white rounded shadow-sm">
                        <div>
                            <div class="text-sm text-gray-400 ">Total Events</div>
                            <div class="flex items-center pt-1">
                                <div class="text-xl font-medium text-indigo-400 ">{{ $status_statistics['total_events'] }}</div>
                            </div>
                        </div>
                        <div class="text-gray-300">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="none" viewBox="0 0 51 51">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M48.875 12.75L28.687 32.938 18.063 22.312 2.126 38.25"></path>
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M36.125 12.75h12.75V25.5"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="flex items-center justify-between p-5 bg-white rounded shadow-sm">
                        <div>
                            <div class="text-sm text-gray-400 ">Publiched Events</div>
                            <div class="flex items-center pt-1">
                                <div class="text-xl font-medium text-indigo-400 ">{{ $status_statistics['total_accepted_events'] }}</div>
                            </div>
                        </div>
                        <div class="text-gray-300">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="none" viewBox="0 0 47 46">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M41.536 30.456a19.21 19.21 0 01-5.675 7.4 19.771 19.771 0 01-8.557 3.937c-3.138.608-6.38.455-9.444-.447a19.673 19.673 0 01-8.129-4.725 19.1 19.1 0 01-4.92-7.902 18.775 18.775 0 01-.564-9.237 18.98 18.98 0 013.923-8.419 19.538 19.538 0 017.497-5.639"></path>
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M43.083 23c0-2.517-.506-5.01-1.49-7.335a19.142 19.142 0 00-4.246-6.218 19.617 19.617 0 00-6.353-4.155A19.953 19.953 0 0023.5 3.833V23h19.583z"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="flex items-center justify-between p-5 bg-white rounded shadow-sm">
                        <div>
                            <div class="text-sm text-gray-400 ">Total Cancelled Events</div>
                            <div class="flex items-center pt-1">
                                <div class="text-xl font-medium text-indigo-400">{{ $status_statistics['total_cancelled_events'] }}</div>
                            </div>
                        </div>
                        <div class="text-gray-400">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="none" viewBox="0 0 47 46">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M41.536 30.456a19.21 19.21 0 01-5.675 7.4 19.771 19.771 0 01-8.557 3.937c-3.138.608-6.38.455-9.444-.447a19.673 19.673 0 01-8.129-4.725 19.1 19.1 0 01-4.92-7.902 18.775 18.775 0 01-.564-9.237 18.98 18.98 0 013.923-8.419 19.538 19.538 0 017.497-5.639"></path>
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M43.083 23c0-2.517-.506-5.01-1.49-7.335a19.142 19.142 0 00-4.246-6.218 19.617 19.617 0 00-6.353-4.155A19.953 19.953 0 0023.5 3.833V23h19.583z"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="flex items-center justify-between p-5 bg-white rounded shadow-sm">
                        <div>
                            <div class="text-sm text-gray-400 ">Events with pending status</div>
                            <div class="flex items-center pt-1">
                                <div class="text-xl font-medium text-indigo-400 ">{{ $status_statistics['total_pending_events'] }}</div>
                            </div>
                        </div>
                        <div class="text-gray-300">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="none" viewBox="0 0 47 46">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M41.536 30.456a19.21 19.21 0 01-5.675 7.4 19.771 19.771 0 01-8.557 3.937c-3.138.608-6.38.455-9.444-.447a19.673 19.673 0 01-8.129-4.725 19.1 19.1 0 01-4.92-7.902 18.775 18.775 0 01-.564-9.237 18.98 18.98 0 013.923-8.419 19.538 19.538 0 017.497-5.639"></path>
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M43.083 23c0-2.517-.506-5.01-1.49-7.335a19.142 19.142 0 00-4.246-6.218 19.617 19.617 0 00-6.353-4.155A19.953 19.953 0 0023.5 3.833V23h19.583z"></path>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a href="{{ route('event.create') }}"
            class="px-8 py-2 my-8 text-gray-100 transition-colors rounded bg-orange customgradient hover:bg-orange-100 focus:outline-none">
            Add an event
        </a>

        <div class="flex flex-col py-8">
            <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                    <div class="overflow-hidden border border-gray-200 dark:border-gray-700 md:rounded-lg">
                        <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                            <thead class="bg-gray-50 dark:bg-gray-800">
                                <tr>
                                    <th scope="col"
                                        class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                        <div class="flex items-center gap-x-3">
                                            <input type="checkbox"
                                                class="text-blue-500 border-gray-300 rounded dark:bg-gray-900 dark:ring-offset-gray-900 dark:border-gray-700">
                                            <button class="flex items-center gap-x-2">
                                                <span>event</span>

                                                <svg class="h-3" viewBox="0 0 10 11" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M2.13347 0.0999756H2.98516L5.01902 4.79058H3.86226L3.45549 3.79907H1.63772L1.24366 4.79058H0.0996094L2.13347 0.0999756ZM2.54025 1.46012L1.96822 2.92196H3.11227L2.54025 1.46012Z"
                                                        fill="currentColor" stroke="currentColor" stroke-width="0.1" />
                                                    <path
                                                        d="M0.722656 9.60832L3.09974 6.78633H0.811638V5.87109H4.35819V6.78633L2.01925 9.60832H4.43446V10.5617H0.722656V9.60832Z"
                                                        fill="currentColor" stroke="currentColor" stroke-width="0.1" />
                                                    <path
                                                        d="M8.45558 7.25664V7.40664H8.60558H9.66065C9.72481 7.40664 9.74667 7.42274 9.75141 7.42691C9.75148 7.42808 9.75146 7.42993 9.75116 7.43262C9.75001 7.44265 9.74458 7.46304 9.72525 7.49314C9.72522 7.4932 9.72518 7.49326 9.72514 7.49332L7.86959 10.3529L7.86924 10.3534C7.83227 10.4109 7.79863 10.418 7.78568 10.418C7.77272 10.418 7.73908 10.4109 7.70211 10.3534L7.70177 10.3529L5.84621 7.49332C5.84617 7.49325 5.84612 7.49318 5.84608 7.49311C5.82677 7.46302 5.82135 7.44264 5.8202 7.43262C5.81989 7.42993 5.81987 7.42808 5.81994 7.42691C5.82469 7.42274 5.84655 7.40664 5.91071 7.40664H6.96578H7.11578V7.25664V0.633865C7.11578 0.42434 7.29014 0.249976 7.49967 0.249976H8.07169C8.28121 0.249976 8.45558 0.42434 8.45558 0.633865V7.25664Z"
                                                        fill="currentColor" stroke="currentColor" stroke-width="0.3" />
                                                </svg>
                                            </button>
                                        </div>
                                    </th>

                                    <th scope="col"
                                        class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                        Date
                                    </th>
                                    <th scope="col"
                                        class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                        Capacity
                                    </th>

                                    <th scope="col"
                                        class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                        Avaliable seats
                                    </th>

                                    <th scope="col"
                                        class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                        Status
                                    </th>

                                    <th scope="col"
                                        class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                        Organizer
                                    </th>

                                    <th scope="col"
                                        class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                        location
                                    </th>
                                    <th scope="col"
                                        class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                        status actions
                                    </th>
                                    <th scope="col"
                                        class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                        Actions
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200 dark:divide-gray-700 dark:bg-gray-900">
                                @foreach ($events as $event)
                                    <tr>
                                        <td
                                            class="px-4 py-4 text-sm font-medium text-gray-700 dark:text-gray-200 whitespace-nowrap">
                                            <div class="inline-flex items-center gap-x-3">
                                                <input type="checkbox"
                                                    class="text-blue-500 border-gray-300 rounded dark:bg-gray-900 dark:ring-offset-gray-900 dark:border-gray-700">

                                                <div class="flex items-center gap-x-2">
                                                    <img class="object-cover w-8 h-8 rounded-full"
                                                        src="{{ asset('storage/images/' . $event->image) }}" alt="">
                                                        <div>
                                                            <h2 class="text-sm font-medium text-gray-800 dark:text-white ">
                                                                {{ \Illuminate\Support\Str::words($event->title, 3, '...') }}
                                                            </h2>
                                                        </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                            {{ $event->date }}
                                        </td>
                                        <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                            {{ $event->capacity }}
                                        </td>
                                        <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                            @if ($event->availableSeats == null)
                                            {{ $event->capacity  }}
                                            @else
                                            {{ $event->availableSeats  }}
                                            @endif
                                        </td>
                                        <td class="px-4 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                                            @if ($event->status == 'cancelled')
                                                <div
                                                    class="inline-flex items-center px-3 py-1 text-red-500 rounded-full gap-x-2 bg-red-100/60 dark:bg-gray-800">
                                                    <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M9 3L3 9M3 3L9 9" stroke="currentColor" stroke-width="1.5"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>

                                                    <h2 class="text-sm font-normal">{{ $event->status }}</h2>
                                                </div>
                                            @elseif ($event->status == 'active')
                                                <div
                                                    class="inline-flex items-center px-3 py-1 rounded-full gap-x-2 text-emerald-500 bg-emerald-100/60 dark:bg-gray-800">
                                                    <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M10 3L4.5 8.5L2 6" stroke="currentColor" stroke-width="1.5"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>

                                                    <h2 class="text-sm font-normal">{{ $event->status }}</h2>
                                                </div>
                                            @elseif ($event->status == 'pending')
                                                <div
                                                    class="inline-flex items-center px-3 py-1 text-black bg-gray-200 rounded-full gap-x-2 dark:bg-gray-800">
                                                    <h2 class="text-sm font-normal">{{ $event->status }}</h2>
                                                </div>
                                            @endif

                                        </td>
                                        <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                            <div class="flex items-center gap-x-2">
                                                <img class="object-cover w-8 h-8 rounded-full"
                                                    src="{{ asset('images/uploads/' . $event->organizer->profile_picture) }}"
                                                    alt="">
                                                <div>
                                                    <h2 class="text-sm font-medium text-gray-800 dark:text-white ">
                                                        {{ $event->organizer->user->firstname . ' ' . $event->organizer->user->lastname }}
                                                    </h2>
                                                    <p class="text-xs font-normal text-gray-600 dark:text-gray-400">
                                                        {{ $event->organizer->user->email }} </p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                            {{ $event->location }}
                                        </td>
                                        <td class="px-4 py-3">
                                            <div class="flex items-center space-x-4 text-sm">

                                                <a href="{{ route('events.activate',$event->id) }}">
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
                                                <a href="{{ route('events.cancel',$event->id) }}">
                                                    <div
                                                        class="inline-flex items-center px-1 py-1 text-red-500 rounded-full gap-x-2 bg-red-100/60 dark:bg-gray-800">
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
                                        </td>

                                        <td class="px-4 py-3">
                                            <div class="flex items-center space-x-4 text-sm">
                                                <a href="">
                                                    <button
                                                        class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                                                        aria-label="Edit">
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                            class="w-5 h-5">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                                        </svg>
                                                    </button>
                                                </a>

                                                <form action="{{ route('event.destroy',$event->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit"
                                                        onclick="return confirm('Do you really want to Delete ?');"
                                                        class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                                                        aria-label="Delete">
                                                        <svg class="w-5 h-5" aria-hidden="true" fill="currentColor"
                                                            viewBox="0 0 20 20">
                                                            <path fill-rule="evenodd"
                                                                d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                                                clip-rule="evenodd">
                                                            </path>
                                                        </svg>
                                                    </button>
                                                </form>


                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-4">
            {{ $events->links() }}
        </div>

    </section>
@endsection

@section('scripts')
@endsection
