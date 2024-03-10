<?php

namespace App\Http\Controllers\event;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreEventRequest;
use App\Models\Category;
use App\Models\Event;
use App\Models\User;
use Illuminate\Http\Request;

class EventController extends Controller
{


    public function AdminStatistics()
    {
        $status_statistics = [
            'total_events' => 0,
            'total_accepted_events' => 0,
            'total_cancelled_events' => 0,
            'total_pending_events' => 0,
        ];

        $total_events = Event::count();
        $total_accepted_events = Event::where('status','active')->count();
        $total_cancelled_events = Event::where('status','cancelled')->count();
        $total_pending_events = Event::where('status','pending')->count();

        $status_statistics['total_events'] = $total_events  ;
        $status_statistics['total_accepted_events'] = $total_accepted_events  ;
        $status_statistics['total_cancelled_events'] = $total_cancelled_events  ;
        $status_statistics['total_pending_events'] = $total_pending_events  ;

        return $status_statistics;
    }


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $events = Event::paginate(10);
        $status_statistics = $this->AdminStatistics();
        return view('back.events.index', compact('events', 'status_statistics'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();

        $organizers = User::whereHas('roles', function ($query) {
            $query->where('name', 'organizer');
        })->get();
        return view('back.events.create',compact('categories','organizers'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEventRequest $request)
    {
        $data = $request->validated();
        $data['availableSeats'] = $data['capacity'];
        $fileName = time() . $request->name . '.' . $request->image->extension();
        $request->image->storeAs('public/images', $fileName);
        $data['image'] = $fileName;

        $event = Event::create($data);

        if ($event) {
            return redirect()->route('event.index')->with('success', 'Event created successfully.');
        } else {
            return back()->withInput()->with('error', 'Failed to create the category.');
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $event = Event::find($id);
        return view('back.events.show', compact('event'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $event = Event::findOrFail($id);
        $event->delete();
        return redirect()->route('event.index')->with('success', 'Event activated successfully.');

    }

    public function activateEvent($eventId)
    {
        $event = Event::findOrFail($eventId);
        $event->update(['status' => 'active']);

        return redirect()->route('event.index')->with('success', 'Event activated successfully.');
    }


    public function cancelEvent($eventId)
    {
        $event = Event::findOrFail($eventId);
        $event->update(['status'=> 'cancelled']);

        return redirect()->route('event.index')->with('success', 'Event activated successfully.');

    }

    public function fetchEvents()
    {
        $events = Event::where('status', 'active')->paginate(8);
        $categories = Category::all();
        return view('front.events.events', compact('events','categories'));
    }

    public function ShowEvent($eventId)
    {
        $event = Event::findOrFail($eventId);
        $user = auth()->user();
        $alreadyReserved = $event->CheckIfReservationExist($user, $event->id);

        return view('front.events.details', compact('event','alreadyReserved'));
    }



}
