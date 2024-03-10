<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Reservation;
use Codedge\Fpdf\Fpdf\Fpdf;
use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Symfony\Component\Uid\Factory\RandomBasedUuidFactory;


class TicketController extends Controller
{
    public function createTicket(Reservation $reservation)
    {
       if( $this->CheckReservation($reservation))
        {
            return redirect()->back()->with('error', 'wait until your reservation is confirmed');
        }

        $event = $reservation->event;
        $user = $reservation->user;

        $uuid = time() . '-' . $event->id . '-' . $user->firstname;
        $encryptedUUID = encrypt($uuid);

        $pdf = new Fpdf('L', 'mm', [200, 100]);
        $pdf->AddPage();

        $ticketImagePath = storage_path('app/public/tickets/ticket.png');
        $pdf = new Fpdf('L', 'mm', [200, 100]);
        $pdf->AddPage();

        $pdf->Image($ticketImagePath, 0, 0, 200, 100);

        $pdf->SetFont('Helvetica', 'B', 20);
        $pdf->SetTextColor(5, 0, 2);

        $titleWidth = $pdf->GetStringWidth($event->title) + 6;

        $pdf->SetXY((0 ) / 2, 20);
        $pdf->Cell($titleWidth, 10, utf8_decode($event->title), 0, 1, 'C');

        $pdf->SetFont('Arial', '', 14);
        $pdf->SetTextColor(0, 0, 0);

        $pdf->SetXY(5, 38);
        $pdf->Cell(0, 10,  $event->date, 0, 1);
        $pdf->SetXY(5, 45);
        $pdf->Cell(0, 10, "Location: " . $event->location, 0, 1);

        $pdf->SetXY(5, 37);
        $pdf->Cell(10, 40,  $reservation->number_of_seats, 0, 1);


        $pdf->Output('I', 'event_ticket_' . $encryptedUUID . '.pdf');
    }

    public function CheckReservation($reservation)
    {
        if(!$reservation->status == 'confirmed')
        {
            return true;
        }

    }
}
