@extends('layout')
@section('content')
    <h1>New Device</h1>
    <form method="POST" action="/devices">
        @csrf
        <!-- Name Form Input-->
        <div class="form-group">
            {!! Form::label('name', 'Name:') !!}
            {!! Form::text('name', null, ['class' => 'form-control']) !!}
        </div>

        <!-- Serial_number Form Input-->
        <div class="form-group">
            {!! Form::label('serial_number', 'Serial number:') !!}
            {!! Form::text('serial_number', null, ['class' => 'form-control']) !!}
        </div>

        <!-- Inventory_number Form Input-->
        <div class="form-group">
            {!! Form::label('inventory_number', 'Inventory number:') !!}
            {!! Form::text('inventory_number', null, ['class' => 'form-control']) !!}
        </div>

        <!-- Submit Form Input-->
        {!! Form::submit('Submit' , ['class' => 'form-control']) !!}

    </form>
@endsection
