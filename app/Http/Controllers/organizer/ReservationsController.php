<?php

namespace App\Http\Controllers\organizer;

use App\Http\Controllers\Controller;
use App\Models\Event;
use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationsController extends Controller
{

    public function bookEvent(string $id)
    {
        $event = Event::find($id);
        $user = auth()->user();

        if (!$event) {
            return redirect()->back()->with("error", "The event is not exist");
        }

        if (!$event->CheckIfReservationExist($user, $event->id)) {
            return redirect()->back()->with("error", "Event already bookd ");
        }

        if (!$event->CheckIfAvaliableSeats($event, $user)) {
            return redirect()->back()->with("error", "Sorry ! There is no avaliable seats for this event  ");
        }


        $reservation = new Reservation;
        $reservation->user_id = $user->id;
        $reservation->event_id = $event->id;

        if ($event->reservation_type === "auto") {
            $reservation->status = "confirmed";
            $reservation->save();
            $this->updateAvaliableSeats($event);
            return redirect()->back()->with("success", "You are booked for this event.");

        } else {
            $reservation->status = "pending";
            $reservation->save();
            return redirect()->back()->with("success", "Your request for reservation has been sent to the organizer.");
        }
    }


    public function updateAvaliableSeats(Event $event)
    {
        $available_seats = $event->capacity - 1;
        $event->update([
            'availableSeats' => $available_seats
        ]);

    }
}
