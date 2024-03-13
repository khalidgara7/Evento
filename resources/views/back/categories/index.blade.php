@extends('back.layouts.master')

@section('title')
    Categories management
@endsection

@section('title_page')
    Categories
@endsection

@section('css')
@endsection

@section('content')
    <main id="main" class="pt-16 px-28">
        <h2 class="my-6 text-4xl font-semibold tracking-widest text-center text-gray-700 font-poppins dark:text-gray-200">
            <span class="text-primary-100 dark:text-orange">@yield('title_page') </span> - Management
        </h2>

        <div class="flex items-center bg-gray-100 dark:bg-gray-900">
            <div class="container max-w-6xl px-5 mx-auto my-8">
                <div class="grid gap-7 sm:grid-cols-2 lg:grid-cols-4">

                    <div class="flex items-center justify-between p-5 bg-white rounded shadow-sm">
                        <div>
                            <div class="text-sm text-gray-400 ">Total Categories</div>
                            <div class="flex items-center  pt-1">
                                <div class="text-xl font-medium text-indigo-400 ">
                                    {{ $total_categories }}</div>
                            </div>
                        </div>
                        <div class="text-gray-300">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="none" viewBox="0 0 47 46">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M41.536 30.456a19.21 19.21 0 01-5.675 7.4 19.771 19.771 0 01-8.557 3.937c-3.138.608-6.38.455-9.444-.447a19.673 19.673 0 01-8.129-4.725 19.1 19.1 0 01-4.92-7.902 18.775 18.775 0 01-.564-9.237 18.98 18.98 0 013.923-8.419 19.538 19.538 0 017.497-5.639">
                                </path>
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M43.083 23c0-2.517-.506-5.01-1.49-7.335a19.142 19.142 0 00-4.246-6.218 19.617 19.617 0 00-6.353-4.155A19.953 19.953 0 0023.5 3.833V23h19.583z">
                                </path>
                            </svg>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <a href="{{ route('category.create') }}"
            class="px-4 py-2 my-4 text-gray-100 transition-colors rounded bg-orange customgradient hover:bg-orange-100 focus:outline-none">
            Add a Category
        </a>


        <div class="w-full py-2 overflow-hidden rounded-lg shadow-xs">
            <div class="w-full overflow-x-auto">
                <table class="w-full my-4 whitespace-no-wrap">
                    <thead>
                        <tr
                            class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                            <th class="px-4 py-3">Category</th>
                            <th class="px-4 py-3">Description</th>
                            <th class="px-4 py-3"></th>

                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">

                        @foreach ($categories as $category)
                            <tr class="text-gray-700 dark:text-gray-400">
                                <td class="px-4 py-3 text-sm">
                                    <div class="flex items-center gap-x-2">
                                        <img class="object-cover w-8 h-8 rounded-full"
                                            src="{{ asset('storage/images/' . $category->image) }}" alt="">
                                        <div>
                                            <h2 class="text-sm font-medium text-gray-800 dark:text-white ">
                                                {{ $category->name }}
                                            </h2>

                                        </div>
                                    </div>
                                </td>
                                <td class="px-4 py-3 text-xs">

                                    <span class="px-2 py-1 font-semibold leading-tight rounded-full">
                                        {{ $category->description }}

                                    </span>

                                </td>


                                <td class="px-4 py-3">
                                    <div class="flex items-center space-x-4 text-sm">
                                        <a href="{{ route('category.edit', [$category->id]) }}">
                                            <button
                                                class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                                                aria-label="Edit">
                                                <svg class="w-5 h-5" aria-hidden="true" fill="currentColor"
                                                    viewBox="0 0 20 20">
                                                    <path
                                                        d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z">
                                                    </path>
                                                </svg>
                                            </button>
                                        </a>

                                        <form action="{{ Route('category.destroy', $category) }}" method="POST">
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
        <div class="mt-4">
            {{ $categories->links() }}
        </div>
    </main>
@endsection

@section('scripts')
@endsection
