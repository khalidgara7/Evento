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
        $categoryId = $request->input("categoryId");

        $events = Event::where('title', 'like', '%' . $search . '%')
                        ->with('organizer.user:id,firstname,lastname');
        if ($categoryId != null)
            $events->where('category_id', '=', $categoryId);

        return response()->json([
            'events' => $events->get(),
        ]);
    }
}
