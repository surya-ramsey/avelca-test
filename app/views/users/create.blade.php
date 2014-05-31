@extends('layouts.default')

@section('content')

<h1>Create User</h1>
<div class="form-group">
    {{ Form::open(array('route' => 'users.store', 'files' => true, 'class'=>'form-horizontal', 'role'=>'form')) }}
        <ul class="list-unstyled">
            <li>
                {{ Form::label('email', 'Email:',array('class'=>'control-label')) }}
                {{ Form::text('email','', array('class'=>'form-control')) }}
            </li>
            <li>
                {{ Form::label('password', 'Password:',array('class'=>'control-label')) }}
                {{ Form::password('password',array('class'=>'form-control')) }}
            </li>
            <li>
                {{ Form::label('permission', 'Permission:',array('class'=>'control-label')) }}
                {{ Form::text('permission','',array('class'=>'form-control')) }}
            </li>
            <li>
                {{ Form::label('activated', 'Activated:',array('class'=>'control-label')) }}
                {{ Form::checkbox('activated','true',true,'',array('class'=>'form-control')) }}
            </li>
            <li>
                {{ Form::label('first_name', 'First Name:',array('class'=>'control-label')) }}
                {{ Form::text('first_name','',array('class'=>'form-control')) }}
            </li>
            <li>
                {{ Form::label('last_name', 'Last Name:',array('class'=>'control-label')) }}
                {{ Form::text('last_name','',array('class'=>'form-control')) }}
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
</div>

@stop