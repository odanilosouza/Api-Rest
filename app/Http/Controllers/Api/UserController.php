<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUpdateUserRequest;
use App\Models\User;
use App\Http\Resources\UserResource;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
       $users = User::paginate();

       return UserResource ::collection($users);

    }

    public function store(StoreUpdateUserRequest $request)
    {
    
        $data = $request->validated();
        $data['password'] = bcrypt($request->password);  //criptografa a senha do usuário

        $user = User::create($data);

        return new UserResource($user);

    }
    public function show(string $id) 
    {
        //Várias maneiras de ser feito
       // $user = User::find($id);
    //    $user = User::where('id', '=', $id)->first();
    //    if(!$user) {
    //     return response()->json(['mensage' => 'user not found'], 404);
    //    }

        $user = User::findOrFail($id);
        return new UserResource($user);
    }

    public function update(Request $request, string $id)
    {
        $user = User::findOrFail($id);

        $data = $request->all();
        $data['password'] = bcrypt($request->password);
        $user->update($data);

        return new UserResource($user);
    }
}
