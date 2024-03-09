<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;

class StoreFiltersController extends Controller
{
    public function filterByCategorie(Request $request)
    {
        $categorieId = $request->input('categorie');
        
        $events = Event::where('category_id', $categorieId)->get();
        return response()->json(['events' => $events]);

    }
}
