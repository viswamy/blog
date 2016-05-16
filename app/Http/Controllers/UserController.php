<?php

namespace blog\Http\Controllers;

use Illuminate\Http\Request;

use blog\Http\Requests;

class UserController extends Controller
{
    public function getProfile(Request $request)
    {
        return 'User Controller: vswamy';
    }
}
