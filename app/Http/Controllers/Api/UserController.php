<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers;
class UserController extends Controller
{
    public function index()
    {
        return User::all();
    }
}
