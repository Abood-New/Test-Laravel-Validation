<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateUserRequest;
use App\Models\User;

class UserController extends Controller
{
    public function update(User $user, UpdateUserRequest $request)
    {
        // dd($request->all());
        // TASK: change this line to not allow is_admin field to be updated
        // Update only the fields that are validated in UpdateUserRequest
        $user->update($request->validated());

        return 'Success';
    }
}
