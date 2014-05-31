@extends('layouts.default')

@section('content')

<h1>All User Groups</h1>

<p>{{ link_to_route('usergroups.create', 'Add new user group') }}</p>

@if(Session::has('success'))
    <div class="alert alert-success">
        {{Session::get('success')}}
    </div>
@endif

@if ($usergroups->count())
    <table class="table table-striped table-bordered">
        
        <thead>
            <tr>
                <th>ID</th>
		        <th>User</th>
		        <th>Group</th>
		        <th>Created at</th>
		        <th>Update at</th>		        
		        <th></th>
		        <th></th>
            </tr>
        </thead>

        <tbody>
            @foreach ($usergroups as $usergroup)
                <tr>
                      <td>{{ $usergroup->id }}</td>
			          <td>{{ $usergroup->user->email }}</td>
			          <td>{{ $usergroup->group->name }}</td>
			          <td>{{ $usergroup->created_at }}</td>
			          <td>{{ $usergroup->updated_at }}</td>			          
                      <td>{{ link_to_route('usergroups.edit', 'Edit', array($usergroup->id), array('class' => 'btn btn-info', 'data-confirm' => "Are you sure you want to delete?")) }}</td>
                      <td>{{ Form::open(array('onclick'=>'return confirm("are you sure delete this data?")', 'method' => 'DELETE', 'route' => array('users.destroy', $usergroup->id))) }}                       
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }} 
                            {{ Form::close() }}
                      </td>
                </tr>
            @endforeach
              
        </tbody>
      
    </table>

    {{ $usergroups->links(); }}
@else
    There are no users
@endif

@stop