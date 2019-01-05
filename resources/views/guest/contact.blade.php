@extends('layouts.app')

@section('content')
    <div class="title">
        <h1>Contact Us</h1>
    </div>
    {!! Form::open(['url' => 'contact/submit']) !!}
        <div class="form-group">
            {{Form::label('name', 'Name')}}<br>
            {{Form::text('name', '', ['class' => 'form-control', 'placeholder'=>"Enter Name"])}}
        </div>
        <br>
        <div class="form-group", >
            {{Form::label('email', 'E-Mail Address')}}<br>
            {{Form::email('email','', ['class' => 'form-control', 'placeholder'=>"Enter E-Mail"])}}
        </div>
        <br>
        <div class="form-group">
            {{Form::label('message', 'Message')}}<br>
            {{Form::textarea('message','', ['class' => 'form-control', 'placeholder'=>"Enter Message"])}}
        </div>
        <br>
        <div class="btn-submit">
            {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
        </div>
    {!! Form::close() !!}

@endsection