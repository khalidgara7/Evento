<?php

namespace App\Http\Controllers\organizer;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreEventRequest;
use App\Models\Category;
use App\Models\Event;
use Illuminate\Http\Request;

class OrganizerProfile extends Controller
{
    public function index()
    {
        $organizer = auth()->user()->organizer;
        $events = $organizer->events()->whereIn('status', ['active', 'pending'])
        ->orderByRaw("FIELD(status, 'active') DESC")
        ->withCount('reservations')->paginate(8);

        $total_reservations = 0;
        $totalCapacity = 0;
        $PercentageOfReservations = 0;



        foreach ($events as $event) {
            $totalCapacity = $totalCapacity + $event->capacity;
            $total_reservations = $total_reservations +  $event->reservations_count;
            $available_seats = $event->capacity - $event->reservations_count;

            $event->update([
                'availableSeats' => $available_seats
            ]); 
        }

        if ($totalCapacity > 0) {
            $PercentageOfReservations = ($total_reservations / $totalCapacity) * 100;
        }
        
        $PercentageOfReservations = round($PercentageOfReservations, 2); // ciel 0.1 -> 1  0.5 
        $total_events = $organizer->events->count();
        $total_approved_events = $organizer->events->where('status','active')->count();
        return view("front.profile.profile",compact("events","total_events","total_approved_events","total_reservations","PercentageOfReservations"));
    }

    public function create()
    {
        $categories = Category::all();
        return view("front.profile.create",compact("categories"));
    }
    public function store(StoreEventRequest $request)
    {
        $data = $request->validated();

        $data['availableSeats'] = $data['capacity'];
        $fileName = time() . $request->name . '.' . $request->image->extension();
        $request->image->storeAs('public/images', $fileName);
        $data['image'] = $fileName;
        // dd($data);

        $event = Event::create($data);

        if ($event) {
            return redirect()->route('profile.index')->with('success', 'Event created successfully.');
        } else {
            return back()->withInput()->with('error', 'Failed to create the category.');
        }
    }
    
    
}
