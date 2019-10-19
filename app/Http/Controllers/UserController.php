<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Interfaces\UserRepository;

class UserController extends Controller
{

    protected $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function profile($id)
    {
        $user = $this->userRepository->find($id);

        return view('user.profile', compact('user'));
    }
}
