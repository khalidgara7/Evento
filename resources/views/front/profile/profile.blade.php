@extends('front.layouts.master')

@section('title')
    Home
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/profile.css') }}">
@endsection

@section('content')
    <main class="mt-16 bg-opacity-25">

        <div class="mb-8 lg:w-10/12 rounded-3xl navbargradient lg:mx-auto">
            @if (auth()->user()->isOrganizer())
            @include('front.profile.organizerProfile', ['events' => $events])
            @else
            @include('front.profile.SpectatorProfile', ['reservations' => $reservations])
            @endif
        </div>

    </main>
@endsection

@section('scripts')
@endsection
