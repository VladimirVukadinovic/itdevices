@extends('layout')
@section('content')
    <h1 class="title">List Device</h1>
    @foreach ($devices  as $device)
        <li><a href="/devices/{{ $device->id }}">{{ $device->name }}</a></li>
    @endforeach
@endsection
