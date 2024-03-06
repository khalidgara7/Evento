@extends('back.layouts.master')

@section('title')
    edit Category
@endsection

@section('title_page')
    Categorie's
@endsection

@section('css')
@endsection

@section('content')
    <main id="main" class="pt-16 h-screen px-28">
        <h2 class="my-6 text-4xl font-semibold text-center font-poppins tracking-widest text-gray-700 dark:text-gray-200">
            <span class="text-primary-100 dark:text-orange">edit </span> category
        </h2>
        <div class="w-full overflow-hidden rounded-lg shadow-xs">

            @if ($errors->any())
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                    <strong class="font-bold">Whoops!</strong>
                    <span class="block sm:inline">There were some problems with your input.</span>
                    <ul class="list-disc mt-2 ml-4">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif


            <div class="w-full overflow-x-auto">

                <div class="bg-gray-100 dark:bg-gray-800 transition-colors duration-300">
                    <div class="container mx-auto p-4">
                        <div class="bg-white dark:bg-gray-700 shadow rounded-lg p-6">
                            <h1 class="text-xl font-semibold mb-4 text-gray-900 dark:text-gray-100">category Data</h1>
                            <p class="text-gray-600 dark:text-gray-300 mb-6">Here you can edit category's informations.</p>
                            <form action="{{ route('category.update', $category) }}" enctype="multipart/form-data" method="POST">
                                @csrf
                                @method('PATCH')
                                <div class="mb-4">
                                    <label for="message"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                                    <input type="text" value="{{ $category->name }}" name="name"
                                        class="border p-2 rounded w-full">
                                </div>
                                <div class=" mb-4">

                                    <label for="message"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                                    <textarea name="description" id="message" rows="4" class="block  w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-500 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="">{{ $category->description }}</textarea>

                                </div>
                                <div class="mb-4">
                                    <label for="message"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Image</label>
                                    <div
                                        class="flex-1 items-center max-w-screen-sm mx-auto mb-3 space-y-4 sm:flex sm:space-y-0">
                                        <div class="relative w-full">
                                            <div class="items-center justify-center max-w-xl mx-auto">
                                                <label
                                                    class="flex justify-center w-full h-32 px-4 transition bg-white border-2 border-gray-300 border-dashed rounded-md appearance-none cursor-pointer hover:border-gray-400 focus:outline-none"
                                                    id="drop"><span class="flex items-center space-x-2"><svg
                                                            xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-gray-600"
                                                            fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                                            stroke-width="2">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12">
                                                            </path>
                                                        </svg><span class="font-medium text-gray-600">Drop files to Attach,
                                                            or<span
                                                                class="text-blue-600 underline ml-[4px]">browse</span></span></span>
                                                    <input type="file" name="image" class="hidden" id="input"></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-4">

                                    <button type="submit"
                                        class="px-4 py-2 customgradient rounded  text-white hover:bg-blue-600 focus:outline-none transition-colors">
                                        Confirm And Submit
                                    </button>

                                    <button type="button"
                                        class="px-4 py-2 bg-orange rounded  text-white hover:bg-blue-600 focus:outline-none transition-colors">
                                        Cancel
                                    </button>
                                </div>


                            </form>
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </main>
@endsection

@section('scripts')
@endsection
