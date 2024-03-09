<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $search = $request->input("search");
        $events = Event::where('title', 'like', '%' . $search . '%')
                        ->with('organizer.user:id,firstname,lastname')
                        ->get();

        return response()->json([
            'events' => $events,
        ]);
    }
}
