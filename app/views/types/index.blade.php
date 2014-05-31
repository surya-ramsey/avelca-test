@extends('layouts.default')

@section('content')

<h1>Type Product</h1>

<p>{{ link_to_route('types.create', 'Add new user') }}</p>

@if ($types->count())
    <table class="table table-striped table-bordered">
        
        <thead>
            <tr>
                <th>ID</th>
		        <th>Type</th>
		        <th>Created At</th>
		        <th>Updated At</th>		        
		        <th></th>
		        <th></th>
            </tr>
        </thead>

        <tbody>
            @foreach ($types as $type)
                <tr>
                      <td>{{ $type->id }}</td>
			          <td>{{ $type->name }}</td>
			          <td>{{ $type->created_at }}</td>
			          <td>{{ $type->updated_at }}</td>			          
                      <td>{{ link_to_route('users.edit', 'Edit', array($type->id), array('class' => 'btn btn-info', 'data-confirm' => "Are you sure you want to delete?")) }}</td>
                      <td>{{ Form::open(array('onclick'=>'return confirm("are you sure delete this data?")', 'method' => 'DELETE', 'route' => array('users.destroy', $type->id))) }}                       
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }} 
                            {{ Form::close() }}
                      </td>
                </tr>
            @endforeach
              
        </tbody>
      
    </table>

    {{ $types->links(); }}
@else
    There are no users
@endif

@stop