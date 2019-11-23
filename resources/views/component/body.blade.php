@extends('layouts.dashboard')

@section('content')
    @foreach ($content as $c)
        {!! $c !!}
    @endforeach
@endsection

@section('js')
    @foreach ($jsdata as $jd)
        {!! $jd !!}
    @endforeach
@endsection
