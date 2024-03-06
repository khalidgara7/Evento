<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Models\User;
use App\Repositories\Interfaces\UserRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    protected $userRepository;

    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(LoginRequest $request)
    {
        $credentials = $request->validated();

        if ($this->userRepository->attemptLogin($credentials)) {

            if (auth()->user()->isAdmin() )
            {
                return redirect('/admin');
            }elseif (auth()->user()->isOrganizer())
            {
                return redirect('');
            }else
            {
                return redirect('/');

            }

        }

        return back()->withErrors([
            'email' => 'The provided email or password do not match',
        ])->onlyInput('email');
    }

    public function logout(Request $request)
    {
        $this->userRepository->logout();
        return redirect('login');
    }
}
