<?php

namespace App\Http\Controllers\organizer;

use App\Http\Controllers\Controller;
use App\Http\Requests\organizer\StoreOrganizerInfosRequest;
use App\Models\Organizer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrganizerController extends Controller
{

    public function showOrganizerForm($userId)
    {
        return view('auth.organizer_info',compact('userId'));
    }

    public function storeOrganizerInfo(StoreOrganizerInfosRequest $request)
    {
        $data = $request->validated();
        $userId = Auth::id();
        $data['user_id'] = $userId;

        $imageName = '';
        if ($image = $request->file('profile_picture')) {
            $imageName = time() . '-' . $data['phone_number'] . '.' . $image->getClientOriginalExtension();
            $data['profile_picture'] = $imageName;
            $organizer = Organizer::create($data);
            if ($organizer) {
                $image->move('images/uploads', $imageName);
            }
        }


        return redirect('/')->with('success', '');
    }
}
