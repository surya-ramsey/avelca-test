@extends('layouts.default')

@section('content')

<h1>Create User</h1>
<div class="form-group">
{{ Form::model( $usergroup, array('method' => 'PATCH', 'route' => array('usergroups.update', '$usergroup->id') )) }}
    <ul class="list-unstyled">
        <li>
                {{ Form::label('user_id', 'User:',array('class'=>'control-label')) }}
                {{ Form::text('user_id',$usergroup->user->email, array('class'=>'form-control', 'id'=>'select' ,'data-autocomplete'=>true, 'enable'=>false)) }}             
            </li>
            <li>
                {{ Form::label('group_id', 'Group:',array('class'=>'control-label')) }}
                {{ Form::select('group_id', $group_options, Input::old('groups'), array('class'=>'form-control')) }}
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