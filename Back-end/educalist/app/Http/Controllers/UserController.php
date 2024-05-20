<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function logout()
    {
        /** @disregard P1013 [tokens function exists and working] **/
        auth()->user()->tokens()->delete();

        return [
            'message' => 'logged out'
        ];
    }
}
