@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Écrire l'histoire de votre personnage</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('posts.update', ['user' => $user]) }}">
                            @csrf
                            @method('PATCH')
                            <div class="form-group">
                                <label for="histoire">Histoire</label>
                                <textarea id="histoire" type="string" class="form-control @error('histoire') is-invalid @enderror" name="histoire" value="{{ old('histoire') ?? $user->profile->histoire }}" autocomplete="histoire" autofocus rows="10" cols="10">{{ $user->profile->histoire }}</textarea>

                                @error('histoire')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong></span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="description_physique">Description physique</label>
                                <textarea id="description_physique" type="string" class="form-control @error('description_physique') is-invalid @enderror" name="description_physique" value="{{ old('description_physique') ?? $user->profile->description_physique }}" autocomplete="description_physique" autofocus rows="10" cols="10">{{ $user->profile->description_physique }}</textarea>

                                @error('description_physique')
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
