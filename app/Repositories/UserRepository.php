<?php

namespace App\Repositories;

use App\Models\Role;
use App\Models\User;
use App\Repositories\Interfaces\UserRepositoryInterface;
use Illuminate\Support\Facades\Auth;

class UserRepository implements UserRepositoryInterface
{
    public function attemptLogin(array $credentials)
    {
        if (Auth::attempt($credentials)) {
            request()->session()->regenerate();
            return true;
        }
        return false;
    }

    public function logout()
    {
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
    }

    public function createUser(array $credentials)
    {
        $user = User::create($credentials);
        if ($user) {
            $role = Role::where('name', $credentials['role'])->firstOrFail();
            $user->roles()->attach($role->id);

            return $user;
        }
        return null;
    }
}
