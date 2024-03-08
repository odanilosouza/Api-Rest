<?php

namespace App\Http\Controllers\Api;
use App\http\Resources\UserResource;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers;

class UserController extends Controller
{
    public function index()
    {
        $users = User::paginate();
        return $users;
    }

    public function story(Request $request)
    {
        $data = $request->all();

        $user = User::create($data);

        return new UserResource($user);

    }
}
