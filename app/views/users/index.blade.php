@extends('layouts.default')

@section('content')

<h1>All Users</h1>

<p>{{ link_to_route('users.create', 'Add new user') }}</p>

@if ($users->count())
    <table class="table table-striped table-bordered">
        
        <thead>
            <tr>
                <th>ID</th>
		        <th>Email</th>
		        <th>Permission</th>
		        <th>Activated</th>
		        <th>Last Login</th>
		        <th>First Name</th>
		        <th>Last Name</th>
		        <th></th>
		        <th></th>
            </tr>
        </thead>

        <tbody>
            @foreach ($users as $user)
                <tr>
                      <td>{{ $user->id }}</td>
			          <td>{{ link_to_route('users.show', $user->email , array($user->id)) }}</td>
			          <td>{{ $user->permissions }}</td>
			          <td>{{ $user->activated }}</td>
			          <td>{{ $user->last_login }}</td>
			          <td>{{ $user->first_name }}</td>
			          <td>{{ $user->last_name }}</td>
                      <td>{{ link_to_route('users.edit', 'Edit', array($user->id), array('class' => 'btn btn-info', 'data-confirm' => "Are you sure you want to delete?")) }}</td>
                      <td>{{ Form::open(array('onclick'=>'return confirm("are you sure delete this data?")', 'method' => 'DELETE', 'route' => array('users.destroy', $user->id))) }}                       
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }} 
                            {{ Form::close() }}
                      </td>
                </tr>
            @endforeach
              
        </tbody>
      
    </table>

    {{ $users->links(); }}
@else
    There are no users
@endif

@stop