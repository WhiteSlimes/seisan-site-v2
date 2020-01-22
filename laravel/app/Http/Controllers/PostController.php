<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }


    public function edit(User $user){
        $this->authorize('update', $user->post);

        return view('posts.edit', compact('user'));
    }

    public function update(User $user){
        $this->authorize('update', $user->post);

        $data = request()->validate([
            'histoire' => 'required',
            'description_physique' => 'required'
        ]);

        auth()->user()->profile->update($data);

        return redirect()->route('profiles.show', ['user' => $user]);
    }

}
