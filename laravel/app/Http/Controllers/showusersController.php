<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class showusersController extends Controller
{
    public function show(User $user){
        return view('users', compact('user'));
    }
}
