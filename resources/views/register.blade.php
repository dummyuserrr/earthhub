@extends('layout2')

@section('register')
	<div class="row">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
			<div class="panel panel-default">
			  <div class="panel-heading text-center">Create Account</div>
			  <div class="panel-body">
				<form class="form-horizontal" data-toggle="validator" method="post" action="/register">
				{{ csrf_field() }}
				  <div class="form-group">
				    <label class="control-label col-sm-2" for="fullname">Full Name:</label>
				    <div class="col-sm-10">
				      <input type="text" class="form-control" id="fullname" placeholder="Enter Your Full Name" name="fullname" required>
				    </div>
				  </div>
				  <div class="form-group">
				    <label class="control-label col-sm-2" for="email">Email:</label>
				    <div class="col-sm-10">
				      <input type="email" class="form-control" id="email" placeholder="Enter Email" name="email" required>
				    </div>
				  </div>
				  <div class="form-group">
				    <label class="control-label col-sm-2" for="pwd">Password:</label>
				    <div class="col-sm-10"> 
				      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password" required>
				    </div>
				  </div>
				  <div class="form-group">
				    <label class="control-label col-sm-2" for="pwd2">Re-enter Password:</label>
				    <div class="col-sm-10"> 
				      <input type="password" class="form-control" id="pwd2" data-match="#pwd" required>
				    </div>
				  </div>
				  <div class="form-group"> 
				    <div class="col-sm-offset-2 col-sm-10">
				      <button type="submit" class="btn btn-success">Submit</button>
				    </div>
				  </div>
				</form>
			  </div>
			</div>
		</div>
		<div class="col-sm-2"></div>
	</div>
@stop