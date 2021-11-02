<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repository\PermissionRepositoryInterface;
use App\Http\Resources\PermissionCollection;

class PermissionController extends Controller
{
    //
    private $permissionRepository;

    public function __construct(PermissionRepositoryInterface $permissionRepository)
    {
        $this->permissionRepository = $permissionRepository;
    }

    public function index()
    {
        return new PermissionCollection($this->permissionRepository->paginate());
        #dd($this->permissionRepository->paginate(10));
        #return response()->json(['data'=>UserCollection::Collection($this->userRepository->paginate())], 200);
    }
}