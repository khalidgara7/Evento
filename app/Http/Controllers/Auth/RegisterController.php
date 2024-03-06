<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use App\Repositories\Interfaces\UserRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    protected $userRepository;

    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    public function register(RegisterRequest $request)
    {
        $form = $request->validated();
        $form['password'] = Hash::make($form['password']);
        $user = $this->userRepository->createUser($form);

        if ($user) {
            auth()->login($user);

            if ($user->isOrganizer()) {
                return redirect()->route('organizer.form', $user->id);
            } elseif ($user->isSpectator()) {
                return redirect('/');
            }

        } else {
            return back()->with('error', 'Registration failed.');
        }


    }
}
