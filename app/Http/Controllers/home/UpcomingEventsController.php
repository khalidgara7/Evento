<?php

namespace App\Http\Controllers\home;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;

class UpcomingEventsController extends Controller
{
    public function index()
    {
        $events = Event::where('status','active')->latest()->take(3)->get();  
        return view("welcome",compact("events"));
    }
}
