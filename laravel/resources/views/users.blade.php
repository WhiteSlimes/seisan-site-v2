@extends('layouts.app')
@section('content')

    <h1>Les utilisateurs inscrits</h1>
    <th scope="col">Pseudo</th>

        @foreach($user as $users)


            <ul>
                <li>{{$users->name}}</li>
            </ul>
        @endforeach

@endsection
