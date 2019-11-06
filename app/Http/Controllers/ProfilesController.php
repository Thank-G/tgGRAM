<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class ProfilesController extends Controller
{
    public function index($user)
    {
        $user = User::findOrFail($user);
        //dd($user->username);
        return view('profiles.index', [ 'user' => $user, ]);
    }
}
