@extends('layout')
@section('content')
    <h1 class="title">Edit Device</h1>
    <form method="POST" action="/devices/{{ $device->id }}">
        @csrf
        @method('PATCH')
        <!-- Name Form Input-->
        <div class="field">
            <label class="label" for="name">Name</label>

            <div class="control">
                <input class="input" type="text" name="name" placeholder="Name" value="{{ $device->name }}">
            </div>
        </div>

        <!-- Serial Form Input-->
        <div class="field">
            <label class="label" for="serial">Serial number:</label>

            <div class="control">
                <input class="input" type="text" name="serial" placeholder="Serial" value="{{ $device->serial_number }}">
            </div>
        </div>

        <!-- Inventory Form Input-->
        <div class="field">
            <label class="label" for="inventory">Inventory number:</label>

            <div class="control">
                <input class="input" type="text" name="inventory" placeholder="Inventory" value="{{ $device->inventory_number }}">
            </div>
        </div>

        <!-- Description Form Input-->
        <div class="field">
            <label class="label" for="description">Description</label>

            <div class="control">
                <textarea class="textarea" name="description" placeholder="Description">{{ $device->description }}</textarea>
            </div>
        </div>



    <!-- Submit Form Input-->
        <div class="field">
            <div class="control">
                <button class="button is-link" type="submit">Submit</button>
            </div>
        </div>


    </form>
@endsection
