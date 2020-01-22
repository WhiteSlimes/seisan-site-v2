<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PresentationController extends Controller
{
    public function show(){
        return view('presentation');
    }
    public function showRegles(){
        return view('presentation/regles');
    }
    public function showHistoire(){
        return view('presentation/histoire');
    }
    public function showPresentation(){
        return view('presentation/presentation_serveur');
    }
}
