<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ProfileController extends Controller
{
    public function show(User $user){
        return view('profiles.show', compact('user'));
    }

    public function edit(User $user){
        return view('profiles.edit', compact('user'));
    }

    public function update(User $user){
        $data = request()->validate([
           'name' => 'required',
           'elements' => 'required',
           'style_combat' => 'required',
           'force' => 'required',
           'vitesse' => 'required',
           'perception_vitesse' => 'required',
           'instinct' => 'required',
           'lvl_clan' => 'required',
           'lvl_art_ninja' => 'required',
           'lvl_combat' => 'required'
        ]);

        $user->profile->update($data);

        return redirect()->route('profiles.show', ['user' => $user]);
    }

}
