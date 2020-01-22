@extends('layouts.app')

@section('content')
    @guest
        <div class="container">
            <div class="row mt-4">
                <div class="col-4 text-center">
                    <img src="{{asset('images/img_user.png')}}" class="rounded-circle">
                </div>
                <div class="col-8">
                    <div class="d-flex">
                        <div class="h4 mr-3 pt-2">{{$user->username}}</div>
                    </div>
                    <div class="mt-3">
                        <div>Force : <strong>{{ $user->profile->force }}</strong></div>
                        <div>Vitesse : <strong>{{ $user->profile->vitesse }}</strong></div>
                        <div>Perception de la vitesse : <strong>{{ $user->profile->perception_vitesse }}</strong></div>
                        <div>Instinct : <strong>{{ $user->profile->instinct }}</strong></div>
                        <div>Niveau de clan : <strong>{{ $user->profile->lvl_clan }}</strong></div>
                        <div>Niveau d'art ninja : <strong>{{ $user->profile->lvl_art_ninja }}</strong></div>
                        <div>Niveau de combat : <strong>{{ $user->profile->lvl_combat }}</strong></div>
                    </div>
                    <div class="mt-3">
                        <div>Nom : {{ $user->profile->name }}</div>
                        <div>Éléments : {{ $user->profile->elements }}</div>
                        <div>Style de combat : {{ $user->profile->style_combat }}</div>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-4">
                    <p><b>Histoire du personnage :</b> @foreach($user->posts as $post) {{ $post->caption }} @endforeach</p>
                </div>
            </div>
        </div>
    @else
        <div class="container">
            <div class="row mt-4">
                <div class="col-4 text-center">
                    <img src="{{asset('images/img_user.png')}}" class="rounded-circle">
                </div>
                <div class="col-8">
                    <div class="d-flex">
                        <div class="h4 mr-3 pt-2">{{$user->username}}</div>
                        @role('admin')
                            <a href="{{ route('profiles.edit', ['user' => $user->username]) }}" class="btn btn-outline-secondary mt-3">Modifier les informations</a>
                        @endrole
                    </div>
                    <div class="mt-3">
                        <div>Force : <strong>{{ $user->profile->force }}</strong></div>
                        <div>Vitesse : <strong>{{ $user->profile->vitesse }}</strong></div>
                        <div>Perception de la vitesse : <strong>{{ $user->profile->perception_vitesse }}</strong></div>
                        <div>Instinct : <strong>{{ $user->profile->instinct }}</strong></div>
                        <div>Niveau de clan : <strong>{{ $user->profile->lvl_clan }}</strong></div>
                        <div>Niveau d'art ninja : <strong>{{ $user->profile->lvl_art_ninja }}</strong></div>
                        <div>Niveau de combat : <strong>{{ $user->profile->lvl_combat }}</strong></div>
                    </div>
                    <div class="mt-3">
                        <div>Nom : {{ $user->profile->name }}</div>
                        <div>Éléments : {{ $user->profile->elements }}</div>
                        <div>Style de combat : {{ $user->profile->style_combat }}</div>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-4">
                    <p><b>Histoire du personnage :</b> {{ $user->profile->histoire }}</p>
                    <p><b>Description physique :</b> {{ $user->profile->description_physique }}</p>
                </div>
            </div>
        </div>
        <div>
            <a href="{{ route('posts.edit', ['user' => $user->username]) }}" class="btn btn-outline-secondary mt-3">Modifier</a>
        </div>
    @endguest
@endsection
