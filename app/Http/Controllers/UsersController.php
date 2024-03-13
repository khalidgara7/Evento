<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::with('roles')->paginate(10);
        $roles = Role::whereIn('name', ['organizer', 'admin', 'spectator'])->get();
//        dd($roles,$users);
        // dd($users);
        return view('back.users.index', compact('users','roles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
//        dd($data);
//        $data = $request->validated();
//        $user = User::create($data);
//        if ($user){
//            return redirect()->route('user.create')->with('success','User created successfully');
//        }else{
//            return back()->withInput()->with('error', 'Failed to create the user.');
//        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
        try {
            $user = User::findOrFail($id);
            $user->delete();

            return redirect()->route('user.index')->with('success', 'User deleted successfully');
        } catch (\Exception $e) {
            return redirect()->route('user.index')->with('error', 'Failed to delete user');
        }
    }


    public function addRemoveRole(Request $request)
    {
        $userId = $request->input('user_id');
        $roleId = $request->input('role_id');
        $checked = filter_var($request->input('checked'), FILTER_VALIDATE_BOOLEAN);

        $user = User::findOrFail($userId);

        if ($checked) {


            if (!$user->roles()->where('role_id', $roleId)->exists()) {
                $user->roles()->attach($roleId);
                return response()->json(['message' => 'Role attached successfully']);
            } else {
                return response()->json(['message' => 'Role already attached to user']);
            }


        } else {
            if ($user->roles()->where('role_id', $roleId)->exists()) {
                $user->roles()->detach($roleId);
                return response()->json(['message' => 'Role detached successfully']);
            } else {
                return response()->json(['message' => 'Role was not attached to the user']);
            }
        }
    }

}
