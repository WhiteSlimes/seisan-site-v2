@extends('layouts.app')
@section('content')

    <h1>Les utilisateurs inscrits</h1>

    <ul>
        @foreach($user as $users)

            <li>{{ $users['username'] }}</li>

        @endforeach
    </ul>
@endsection
