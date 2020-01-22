@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Modifier les informations</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('profiles.update', ['user' => $user]) }}">
                            @csrf
                            @method('PATCH')

                            <div class="form-group">
                                <label for="name">Nom</label>
                                <input id="name" type="string" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') ?? $user->profile->name }}" autocomplete="name" autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong></span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="elements">Elements</label>
                                <input id="elements" type="string" class="form-control @error('elements') is-invalid @enderror" name="elements" value="{{ old('elements') ?? $user->profile->elements }}" autocomplete="elements" autofocus>

                                @error('elements')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong></span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="style_combat">Style de combat</label>
                                <input id="style_combat" type="string" class="form-control @error('style_combat') is-invalid @enderror" name="style_combat" value="{{ old('style_combat') ??$user->profile->style_combat }}" autocomplete="style_combat" autofocus>

                                @error('style_combat')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong></span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="force">Force</label>
                                <input id="force" type="string" class="form-control @error('force') is-invalid @enderror" name="force" value="{{ old('force') ?? $user->profile->force }}" autocomplete="force" autofocus>

                                @error('force')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong></span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="vitesse">Vitesse</label>
                                <input id="vitesse" type="string" class="form-control @error('vitesse') is-invalid @enderror" name="vitesse" value="{{ old('vitesse') ?? $user->profile->vitesse }}" autocomplete="vitesse" autofocus>

                                @error('vitesse')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong></span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="perception_vitesse">Perception de la vitesse</label>
                                <input id="perception_vitesse" type="string" class="form-control @error('perception_vitesse') is-invalid @enderror" name="perception_vitesse" value="{{ old('perception_vitesse') ?? $user->profile->perception_vitesse }}" autocomplete="perception_vitesse" autofocus>

                                @error('perception_vitesse')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong></span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="instinct">Instinct</label>
                                <input id="instinct" type="string" class="form-control @error('instinct') is-invalid @enderror" name="instinct" value="{{ old('instinct') ?? $user->profile->instinct }}" autocomplete="instinct" autofocus>

                                @error('instinct')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong></span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="lvl_clan">Niveau de clan</label>
                                <input id="lvl_clan" type="string" class="form-control @error('lvl_clan') is-invalid @enderror" name="lvl_clan" value="{{ old('lvl_clan') ?? $user->profile->lvl_clan }}" autocomplete="lvl_clan" autofocus>

                                @error('lvl_clan')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong></span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="lvl_art_ninja">Niveau d'art ninja</label>
                                <input id="lvl_art_ninja" type="string" class="form-control @error('lvl_art_ninja') is-invalid @enderror" name="lvl_art_ninja" value="{{ old('lvl_art_ninja') ?? $user->profile->lvl_art_ninja }}" autocomplete="lvl_art_ninja" autofocus>

                                @error('lvl_art_ninja')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong></span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="lvl_combat">Niveau de combat</label>
                                <input id="lvl_combat" type="string" class="form-control @error('lvl_combat') is-invalid @enderror" name="lvl_combat" value="{{ old('lvl_combat') ?? $user->profile->lvl_combat }}" autocomplete="lvl_combat" autofocus>

                                @error('lvl_combat')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong></span>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-primary">
                                Modifier
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
