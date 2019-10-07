@extends('layout')
@section('content')
    <h1 class="title">{{ $device->name }}</h1>
        <div class="field">
            <label class="label" for="name">Name</label>

            <div class="control">

                <input class="input" type="text" name="name" placeholder="Name" value="{{ $device->name }}">
            </div>
        </div>

        <!-- Serial_number Form Input-->
        <div class="field">
            <label class="label" for="serial_number">Serial number:</label>

            <div class="control">
                <input class="input" type="text" name="serial_number" placeholder="Serial number" value="{{ $device->serial_number }}">
            </div>
        </div>

        <!-- Inventory_number Form Input-->
        <div class="field">
            <label class="label" for="inventory_number">Inventory number:</label>

            <div class="control">
                <input class="input" type="text" name="inventory_number" placeholder="Inventory number" value="{{ $device->inventory_number }}">
            </div>
        </div>

        <!-- Description Form Input-->
        <div class="field">
            <label class="label" for="description">Description</label>

            <div class="control">
                <textarea class="textarea" name="description" placeholder="Description">{{ $device->description }}</textarea>
            </div>
        </div>
        <a class="button" href="/devices/{{ $device->id }}/edit">Edit</a>
        <a class="button" href="/devices/">Back</a>
@endsection
