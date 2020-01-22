@extends('layouts.app')

    @section('content')
<!DOCTYPE html>
<html>

    <head>
        <meta charset="UTF-8">
        <title> Contact </title>

        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>

    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-6 ml-auto mr-auto mt-5">

                    @if (Session::has('flash_message'))
                        <div class="alert alert-success">{{ Session::get('flash_message') }}</div>
                    @endif

                    <h1 class="text-center"> Contactez nous</h1>
                    <form method="post" action="{{route('contact.store')}}">

                        {{csrf_field()}}

                        <div class="form-group">
                            <label>Full name :</label>
                            <input type="text" class="form-control" name="name">

                            @if ($errors->has('name'))
                            <small class="form-text invalid-feedback" style="display: block">{{$errors->first('name')}}</small>
                            @endif

                        </div>

                        <div class="form-group">
                            <label>Email :</label>
                            <input type="text" class="form-control" name="email">

                            @if ($errors->has('email'))
                                <small class="form-text invalid-feedback " style="display: block">{{$errors->first('email')}}</small>
                            @endif

                        </div>

                        <div class="form-group">
                            <label>Message :</label>
                            <textarea name="message" class="form-control" rows="5"></textarea>

                            @if ($errors->has('message'))
                                <small class="form-text invalid-feedback"  style="display: block">{{$errors->first('message')}}</small>
                            @endif

                        </div>


                        <button class="btn btn-primary">Envoyer</button>

                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
@endsection
