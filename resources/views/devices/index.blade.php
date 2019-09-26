@extends('layout')
@section('content')
    <h1 class="title">List Device</h1>
    @foreach ($devices  as $device)
        <li>{{$device->name}}</li>
    @endforeach
@endsection
