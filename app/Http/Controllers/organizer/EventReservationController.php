<?php

namespace App\Http\Controllers\Organizer;

use App\Http\Controllers\Controller;
use App\Models\Event;
use App\Models\Reservation;
use Illuminate\Http\Request;

class EventReservationController extends Controller
{
    public function index(string $id)
    {
        $event = Event::findOrFail($id);
        $reservations = $event->reservations()->where('status', 'pending')->paginate(10);
        $HistoricReservations = $event->reservations()->whereIn('status', ['confirmed', 'cancelled'])->paginate(10);

        return view("front.organizer.reservations", compact("event", "reservations","HistoricReservations"));
    }

    public function activateReservation($id)
    {
        $reservation = Reservation::findOrfail($id);
        
        $reservation->update([
            "status" => "confirmed",
        ]);
        return redirect()->back()->with("success","Reservation  confirmed successfully");
    }

    public function cancelReservation($id)
    {
        $reservation = Reservation::findOrfail($id);
        
        $reservation->update([
            "status" => "cancelled",
        ]);
        return redirect()->back()->with("success","Reservation  Cancelled successfully");
    }
}
