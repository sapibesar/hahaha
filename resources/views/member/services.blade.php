@extends('layouts.appMember')

@section('content')
    <div class="title">
        <h1>Services</h1>
    </div>

    {!! Form::open(['url' => '/search']) !!}
    {{csrf_field()}}
    <div class="form-group">
        {{Form::label('provinsi', 'Province :')}}<br>
        {{Form::select('provinsi', array(
            'Sumatera' => array('sumut' => 'North Sumatera', 'sumbar' => 'West Sumatera', 'aceh' => 'Aceh',
                'riau' => 'Riau', 'bengkulu' => 'Bengkulu', 'lampung' => 'Lampung'),
            'Java' => array('jakarta' => 'Jakarta', 'jabar' => 'West Java', 'jateng'=>'Central Java',
                'jatim'=>'East Java', 'banten' => 'Banten'),
            'Bali' => array('bali' => 'Bali'),
            'Sulawesi' => array('sulut'=>'North Sulawesi', 'sulteng'=>'Central Sulawesi', 'sulsel'=>'South Sulawesi',
                'sultenggara'=>'South East Sulawesi', 'ntb'=>'West Nusa Tenggara', 'ntt'=>'East Nusa Tenggara'),
            'Kalimantan' => array('kalbar'=>'West Kalimantan', 'kalsel'=>'South Kalimantan'),
            'Papua' => array('papua'=>'Papua', 'papuabar'=>'West Papua')

        ),null, ['class' => 'form-control'])}}
    </div>
    <br>
    <div class="form-group", >
        {{Form::label('tahun', 'Year:')}}<br>
        {{Form::select('tahun',array(
            '2013'=>'2013',
            '2014'=>'2014',
            '2015'=>'2015',
        ), ['class' => 'form-control'])}}
    </div>
    <br>
    <div class="btn-submit">
        {{Form::submit('Search', ['class' => 'btn btn-primary'])}}
    </div>
    {!! Form::close() !!}

    {{--@if(!count($fishdata))--}}
        {{--@foreach($fishdata as $data)--}}

            {{--<p>{{$data->kolam}}</p>--}}

        {{--@endforeach--}}
        {{--@else--}}
        {{--<p>no data</p>--}}
    {{--@endif--}}


@endsection


