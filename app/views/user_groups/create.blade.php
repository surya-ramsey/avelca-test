@extends('layouts.default')

@section('content')

<h1>Create User</h1>
{{ Form::open(array('route' => 'usergroups.store', 'files' => true)) }}
    <ul class="list-unstyled">
        <li>
            {{ Form::label('email', 'Email:') }}
            {{ Form::text('user_id') }}
        </li>
        <li>
            {{ Form::label('group', 'Group:') }}
            {{ Form::text('group_id') }}
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