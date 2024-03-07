<?php

namespace App\Http\Controllers\Organizer;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;

class EventReservationController extends Controller
{
    public function index(string $id)
    {
        $events = Event::where("id", $id)->get();
        return view("front.organizer.reservations",compact("events"));
    }
}
