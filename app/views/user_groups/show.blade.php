@extends('layouts.default')

@section('content')

<ul class="list-unstyled">
	<li>ID User: {{ $user->id }}</li>
	<li>Email: {{ $user->email }}</li>
	<li>Permission ID: {{ $user->permissions }}</li>
	<li>Activated: {{ $user->activated }}</li>
	<li>Last Login: {{ $user->last_login }}</li>
	<li>First name: {{ $user->first_name }}</li>
	<li>Last Name: {{ $user->last_name }}</li>
	<li>Last Activity: {{ $user->last_activity }}</li>
	<li>Last Login: {{ $user->last_login }}</li>
	<li>Update password at: {{ $user->update_password_at }}</li>
	<li>Submit reset Password at: {{ $user->submit_reset_password_at }}</li>
	<li>Activation code: {{ $user->activation_code }}</li>
	<li>Persist code: {{ $user->persist_code }}</li>
	<li>Reset password code: {{ $user->reset_password_code }}</li>	
</ul>

{{ link_to_route('users.index', 'Back to index') }}

@stop