@extends('layouts.default')

@section('content')

<h1>Edit User</h1>
{{ Form::model($user, array('method' => 'PATCH', 'route' => array('users.update', $user->id))) }}
    <ul class="list-unstyled">
        <li>
            {{ Form::label('email', 'Email:') }}
            {{ Form::text('email') }}
        </li>
        <li>
            {{ Form::label('password', 'Password:') }}
            {{ Form::text('password') }}
        </li>
        <li>
            {{ Form::label('permission', 'Permission:') }}
            {{ Form::text('permission') }}
        </li>
        <li>
            {{ Form::label('activated', 'Activated:') }}
            {{ Form::checkbox('activated','true',true) }}
        </li>
        <li>
            {{ Form::label('first_name', 'First Name:') }}
            {{ Form::text('first_name') }}
        </li>
        <li>
            {{ Form::label('last_name', 'Last Name:') }}
            {{ Form::text('last_name') }}
        </li>
        <li>
            {{ Form::submit('Save', array('class' => 'btn btn-info')) }}            
        </li>
    </ul>
{{ Form::close() }}

@if ($errors->any())
    <ul>
        {{ implode('', $errors->all('<li class="error">:message</li>')) }}
    </ul>
@endif

@stop