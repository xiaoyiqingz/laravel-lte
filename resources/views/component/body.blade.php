@extends('layouts.dashboard')

@section('content')
    @foreach ($content as $c)
        {{ $c }}
    @endforeach
@endsection
