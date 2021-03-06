@extends('layouts.default')

@section('content')
    <h1>Need to reset your password</h1>

    {{ Form::open() }}

    {{ Form::hidden('token', $token) }}
    <div class="form-group">
        {{ Form::label('email','Email:') }}
        {{ Form::email('email',null,['class' => 'form-control', 'required']) }}
    </div>

    <div class="form-group">
        {{ Form::label('password','Password:') }}
        {{ Form::password('password',['class' => 'form-control', 'required']) }}
    </div>

    <div class="form-group">
        {{ Form::label('password_confirmation','Password Confirmation:') }}
        {{ Form::password('password_confirmation',['class' => 'form-control', 'required']) }}
    </div>

    <div class=" form-group">
        {{ Form::submit('Submit', ['class' => 'btn btn-primary form-control'])}}
    </div>

    {{ Form::close()  }}

@stop