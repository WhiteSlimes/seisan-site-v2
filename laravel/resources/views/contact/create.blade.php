@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
                <h2>Contactez nous :</h2>
                <p class="text-muted">N'hésitez pas nous vous répondrons !</p>

                <form action="{{route('contact_path')}}" method="post">
                    {{ csrf_field() }}

                    <div class="form-group{{ $errors->has('name') ? 'has-error' : '' }}">
                        <label for="name" class="control-label">Name</label>
                        <input type="text" name="name" id="name" class="form-control" required="required">
                        {!! $errors->first('name', '<span class="help-block">:message</span>') !!}
                    </div>

                    <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                        <label for="email" class="control-label">Email</label>
                        <input type="text" name="email" id="email" class="form-control" required="required">
                        {!! $errors->first('email', '<span class="help-block">:message</span>') !!}
                    </div>

                    <div class="form-group">
                        <label for="msg" class="control-label">Message</label>
                        <textarea type="text" rows="10" cols="10" name="msg" id="msg" class="form-control" ></textarea>
                    </div>

                    <div class="form-group">
                        <button class="btn btn-primary btn-block">Envoyez </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
