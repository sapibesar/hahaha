@extends('layouts.app')

@section('content')
    <div class="title">
        <h1>Log In</h1>
    </div>

    {!! Form::open(['url' => '/login']) !!}

    <div class="form-group", >
        {{Form::label('email', 'E-Mail Address')}}<br>
        {{Form::email('email','', ['class' => 'form-control', 'placeholder'=>"Enter E-Mail"])}}
    </div>
    <br>
    <div class="form-group">
        {{Form::label('password', 'Password')}}<br>
        {{Form::password('password', ['class' => 'form-control', 'placeholder'=>"Enter Password"])}}
    </div>
    <div class="btn-submit">
        {{Form::submit('Login', ['class' => 'btn btn-primary'])}}
    </div>

    {!! Form::close() !!}

@endsection