@extends('layout')
@section('content')
    <h1 class="title">New Device</h1>
    <form method="POST" action="/devices">
    @csrf

        <!-- Name Form Input-->
        <div class="field">
            <label class="label" for="name">Device name:</label>

            <div class="control">
                <input class="input" type="text" name="name" placeholder="Name">
            </div>
        </div>

        <!-- Serial_number Form Input-->
        <div class="field">
            <label class="label" for="serial_number">Serial number:</label>

            <div class="control">
                <input class="input" type="text" name="serial_number" placeholder="Serial_number">
            </div>
        </div>

        <!-- Inventory_number Form Input-->
        <div class="field">
            <label class="label" for="inventory_number">Inventory number:</label>

            <div class="control">
                <input class="input" type="text" name="inventory_number" placeholder="Inventory_number">
            </div>
        </div>

        <!-- Description Form Input-->
        <div class="field">
            <label class="label" for="description">Description:</label>

            <div class="control">
                <textarea class="textarea" name="description" placeholder="Description"></textarea>
            </div>
        </div>

        <!-- Submit Form Input-->
        <div class= "field">
            <div class="control">
                <button class="button is-link" type="submit">Submit</button>
                <a class="button" href="/devices">Back</a>
            </div>
        </div>

    </form>
@endsection
