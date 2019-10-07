@extends('layout')
@section('content')
    <h1 class="title">List Device</h1>
    <a href="/devices/create">New</a>
    <p>-----------</p>
    @foreach ($devices  as $device)
        <li><a href="/devices/{{ $device->id }}">{{ $device->name }}</a></li>
    @endforeach
@endsection
