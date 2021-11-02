<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Repository\RoleRepositoryInterface;
use App\Http\Resources\RoleCollection;
class RoleController extends Controller
{
    //
    private $roleRepository;

    public function __construct(RoleRepositoryInterface $roleRepository)
    {
        $this->roleRepository = $roleRepository;
    }

    public function index()
    {
        return new RoleCollection($this->roleRepository->paginate());
        #dd($this->roleRepository->paginate(10));
        #return response()->json(['data'=>UserCollection::Collection($this->userRepository->paginate())], 200);
    }
}
