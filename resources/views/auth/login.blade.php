
@extends('layouts.master')

@section('title', 'Login')

@section('content')
<div class='div_login'>
	<form class='form-horizontal' role="form" method="post" action="{{ url('/valida') }}">
	  <div class="form-group">
	    <label for="exampleInputEmail1">User</label>
	    <input type="text" class="form-control" id="user"  name='user' placeholder="User">
	  </div>
	  <div class="form-group">
	    <label for="exampleInputPassword1">Passwd</label>
	    <input type="password" class="form-control" id="passwd" name='passwd' placeholder="Passwd">
	  </div>
	  <button type="submit" class="btn btn-default" name='Login' value='0'>Login</button>
	  <button type="submit" class="btn btn-default" name='Login' value='1'>Logout</button>
	  <input name="_token" hidden value="{!! csrf_token() !!}" />
	</form>
</div>
@endsection