@extends('front.layouts.master')

@section('title')
    Home
@endsection

@section('css')
@endsection


@section('content')
    <div class=" py-16 ">
            <section class="-form h-full  dark:bg-neutral-700">
            <div class="container h-full p-10">
                <div
                    class="flex h-full flex-wrap items-center justify-center text-neutral-800 dark:text-neutral-200">
                    <div class="w-full">
                        <div
                            class="block rounded-lg bg-white shadow-lg dark:bg-neutral-800">
                            <div class="g-0 lg:flex lg:flex-wrap">
                                <!-- Left column container-->
                                <div class="px-4 md:px-0 lg:w-6/12">
                                    <div class="md:mx-6 md:p-12">
                                        <!--Logo-->
                                        <div class="text-center">
                                            <img
                                                class="mx-auto w-48"
                                                src="https://tecdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/lotus.webp"
                                                alt="logo"/>
                                            <h4 class="mb-12 mt-1 pb-1 text-xl font-semibold">
                                                We are The Lotus Team
                                            </h4>
                                        </div>
                                        @if ($errors->any())
                                            <div class=" border text-center border-red-400 text-red-500 px-4 py-3 rounded relative"
                                                 role="alert">
                                                <ul>
                                                    @foreach ($errors->all() as $error)
                                                        <li>{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endif
                                        <form action="{{ Route('login') }}" method="POST">
                                            @csrf
                                            @method('POST')
                                            <p class="mb-4">Please login to your account</p>
                                            <!--Username input-->
                                            <div class="relative mb-4" data-twe-input-wrapper-init>
                                                <input
                                                    name="email"
                                                    type="email"
                                                    class="peer block min-h-[auto] w-full rounded border-0 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-primary data-[twe-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-white dark:placeholder:text-neutral-300 dark:autofill:shadow-autofill dark:peer-focus:text-primary [&:not([data-twe-input-placeholder-active])]:placeholder:opacity-0"
                                                    id="exampleFormControlInput1"
                                                    placeholder="Email"/>
                                                <label
                                                    for="exampleFormControlInput1"
                                                    class="pointer-events-none absolute left-3 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[twe-input-state-active]:-translate-y-[0.9rem] peer-data-[twe-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-400 dark:peer-focus:text-primary"
                                                >email
                                                </label>
                                            </div>

                                            <!--Password input-->
                                            <div class="relative mb-4" data-twe-input-wrapper-init>
                                                <input
                                                    type="password"
                                                    name="password"
                                                    class="peer block min-h-[auto] w-full rounded border-0 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-primary data-[twe-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-white dark:placeholder:text-neutral-300 dark:autofill:shadow-autofill dark:peer-focus:text-primary [&:not([data-twe-input-placeholder-active])]:placeholder:opacity-0"
                                                    id="exampleFormControlInput11"
                                                    placeholder=""/>
                                                <label
                                                    for="exampleFormControlInput11"
                                                    class="pointer-events-none absolute left-3 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[twe-input-state-active]:-translate-y-[0.9rem] peer-data-[twe-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-400 dark:peer-focus:text-primary"
                                                >Password
                                                </label>
                                            </div>

                                            <!--Submit button-->
                                            <div class="mb-12 pb-1 pt-1 text-center">
                                                <button
                                                    type="submit"
                                                    class="mb-3 inline-block w-full rounded px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-dark-3 transition duration-150 ease-in-out hover:shadow-dark-2 focus:shadow-dark-2 focus:outline-none focus:ring-0 active:shadow-dark-2 dark:shadow-black/30 dark:hover:shadow-dark-strong dark:focus:shadow-dark-strong dark:active:shadow-dark-strong"
                                                    data-twe-ripple-init
                                                    data-twe-ripple-color="light"
                                                    style="
                        background: linear-gradient(to right, #ee7724, #d8363a, #dd3675, #b44593);
                      ">
                                                    Log in
                                                </button>

                                                <!--Forgot password link-->
                                                <a href="{{ route('forget.passwordform') }}">Forgot password?</a>
                                            </div>

                                            <!--Register button-->
                                            <div class="flex items-center justify-between pb-6">
                                                <p class="mb-0 me-2">Don't have an account?</p>
                                                <a
                                                    href="{{ Route('register') }}"
                                                    type="button"
                                                    class="inline-block rounded border-2 border-danger px-6 pb-[6px] pt-2 text-xs font-medium uppercase leading-normal text-danger transition duration-150 ease-in-out hover:border-danger-600 hover:bg-danger-50/50 hover:text-danger-600 focus:border-danger-600 focus:bg-danger-50/50 focus:text-danger-600 focus:outline-none focus:ring-0 active:border-danger-700 active:text-danger-700 dark:hover:bg-rose-950 dark:focus:bg-rose-950"
                                                    data-twe-ripple-init
                                                    data-twe-ripple-color="light">
                                                    Register
                                                </a>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                                <!-- Right column container with background and description-->
                                <div
                                    class="flex items-center rounded-b-lg lg:w-6/12 lg:rounded-e-lg lg:rounded-bl-none"
                                    style="background: linear-gradient(to right, #ee7724, #d8363a, #dd3675, #b44593)">
                                    <div class="px-4 py-6 text-white md:mx-6 md:p-12">
                                        <h4 class="mb-6 text-xl font-semibold">
                                            We are more than just a company
                                        </h4>
                                        <p class="text-sm">
                                            une plateforme de gestion et réservation des places d'événements avec laravel.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@section('scripts')
@endsection
