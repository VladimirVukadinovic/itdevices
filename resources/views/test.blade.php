<!DOCTYPE html>
<html>
<head>
    <title></title>
    <style>
    </style>
</head>
<body>
<h1>Test stranica</h1>

<!-- Username Form Input-->
<div class="form-group">
    {!! Form::label('username', 'Username:') !!}
    {!! Form::text('username', null, ['class' => 'form-control']) !!}
</div>

<!-- Email Form Input-->
<div class="form-group">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::text('email', null, ['class' => 'form-control']) !!}
</div>

<!-- Website Form Input-->
<div class="form-group">
    {!! Form::label('website', 'Website:') !!}
    {!! Form::text('website', null, ['class' => 'form-control']) !!}
</div>

</body>
</html>
