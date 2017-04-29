@extends('layout2')

@section('login')
	<div class="row">
		<div class="col-sm-3"></div>
		<div class="col-sm-6">
			<div class="{{ session('alert') }}">{{ session('alertmessage') }}</div>
			<div class="panel panel-default">
			  <div class="panel-heading text-center">Authentication</div>
			  <div class="panel-body">
				<form class="form-horizontal" data-toggle="validator" method="post" action="/login">
				{{ csrf_field() }}
				  <div class="form-group">
				    <label class="control-label col-sm-2" for="email">Email:</label>
				    <div class="col-sm-10">
				      <input type="email" class="form-control" id="email" placeholder="Enter Email" name="email">
				    </div>
				  </div>
				  <div class="form-group">
				    <label class="control-label col-sm-2" for="pwd">Password:</label>
				    <div class="col-sm-10"> 
				      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password">
				    </div>
				  </div>
				  <div class="form-group"> 
				    <div class="col-sm-offset-2 col-sm-10">
				      <button type="submit" class="btn btn-success form-control">Login</button>
				    </div>
				  </div>
				</form>
			  </div>
			</div>
		</div>
		<div class="col-sm-3"></div>
	</div>
@stop