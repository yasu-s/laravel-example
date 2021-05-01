<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\User\UserRepository;

class UserController extends Controller
{
    /** @var UserRepository */
    private $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function all()
    {
        $users = $this->userRepository->getAll();
        return response()->json(['users' => $users]);
    }

    public function get(string $id)
    {
        $user = $this->userRepository->findById((int)$id);
        if ($user == null) {
            return response()->json(['message' => 'not found.'], 404);
        }
        return response()->json(['user' => $user]);
    }
}
