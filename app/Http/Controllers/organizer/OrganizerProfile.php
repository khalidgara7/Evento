<?php

namespace App\Http\Controllers\organizer;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreEventRequest;
use App\Models\Category;
use App\Models\Event;
use App\Models\Organizer;
use Illuminate\Http\Request;

class OrganizerProfile extends Controller
{
    public function index()
    {
        $organizer = auth()->user()->organizer;

        $events = $this->getOrganizerEvents($organizer);
        $statistics = $this->calculateStatistics($events, $organizer);

        return view("front.profile.profile",compact("events","statistics"));
    }


    public function getOrganizerEvents(Organizer $organizer)
    {
        return $organizer->events()->whereIn('status', ['active', 'pending'])
        ->orderByRaw("FIELD(status, 'active') DESC")
        ->withCount('reservations')->paginate(8);
    }


    public function calculateStatistics($events,$organizer)
    {
        $PercentageOfReservations = 0;

        $total_reservations = $events->sum('reservations_count');
        $totalCapacity = $events->sum('capacity');
        $total_events = $organizer->events->count();
        $total_approved_events = $organizer->events->where('status','active')->count();

        if ($totalCapacity > 0) {
            $PercentageOfReservations = ($total_reservations / $totalCapacity) * 100;
        }
        
        $PercentageOfReservations = round($PercentageOfReservations, 2); 

        $statistics['total_events'] = $total_events;
        $statistics['total_approved_events'] = $total_approved_events;
        $statistics['total_reservations'] = $total_reservations;
        $statistics['PercentageOfReservations'] = $PercentageOfReservations;
    
        return $statistics;
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
