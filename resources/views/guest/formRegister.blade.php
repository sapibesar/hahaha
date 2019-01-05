@extends('layouts.app')

@section('content')
    <div class="title">
        <h1>Become Our Member</h1>
    </div>

    {!! Form::open(['url' => '/register']) !!}

    <div class="form-group", >
        {{Form::label('name', 'Full Name')}}<br>
        {{Form::text('name','', ['class' => 'form-control', 'placeholder'=>"Enter Full Name"])}}
    </div>

    <div class="form-group", >
        {{Form::label('email', 'E-Mail Address')}}<br>
        {{Form::email('email','', ['class' => 'form-control', 'placeholder'=>"Enter E-Mail"])}}
    </div>

    <div class="form-group", >
        {{Form::label('dob', 'Date of Birth')}}<br>
        {{Form::date('dob','', ['class' => 'form-control',])}}
    </div>

    <div class="form-group", >
        {{Form::label('address', 'Address')}}<br>
        {{Form::text('address','', ['class' => 'form-control', 'placeholder'=>"Enter Address"])}}
    </div>

    <div class="form-group">
    {{Form::label('password', 'Password')}}<br>
    {{Form::password('password', ['class' => 'form-control', 'placeholder'=>"Enter Password"])}}
    </div>

    <div class="form-group">
        {{Form::label('confirmpassword', 'Confirm Password')}}<br>
        {{Form::password('confirmpassword', ['class' => 'form-control', 'placeholder'=>"Confirm Password"])}}
    </div>

    <div class="form-group", >
        {{Form::label('cardnum', 'Credit/Debit Card Number (10 Digits)')}}<br>
        {{Form::text('cardnum','', ['class' => 'form-control', 'placeholder'=>"Enter Card Number"])}}
    </div>



    <div class="form-group", >
        {{Form::label('Membership fee : Rp. 50.000/Month')}}<br>
        {{Form::checkbox('terms&conditions',1,null)}}
        <a href="/terms&condition">I Agree to Terms & Conditions</a>
    </div>

    <div class="btn-submit">
        {{Form::submit('JOIN US !', ['class' => 'btn btn-primary'])}}
    </div>

    {!! Form::close() !!}

@endsection