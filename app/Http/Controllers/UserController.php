<?php

namespace App\Http\Controllers;

use App\Repository\UserRepositoryInterface;
use Illuminate\Http\Request;
use App\Http\Resources\UserCollection;

class UserController extends Controller
{
    private $userRepository;

    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function index()
    {
        return new UserCollection($this->userRepository->paginate(2));
        #dd($this->userRepository->paginate());
        #return response()->json(['data'=>UserCollection::Collection($this->userRepository->paginate())], 200);
    }
}
