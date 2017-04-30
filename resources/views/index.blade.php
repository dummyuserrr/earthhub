@extends('layout')

@section('title')
	EarthHUB
@stop

@section('index')
		<div class="col-sm-8">
		@if(session('status') == 1)
			<div class="panel panel-default">
			  <div class="panel-body">
			  	<form method="post" action="/">
			  	{{ csrf_field() }}
				<div class="form-group">
				    <label for="post">Post something:</label>
				    <input type="text" class="form-control" id="title" name="title" placeholder="Title" required>
				   </div>
				  <div class="form-group">
				    <textarea type="text" class="form-control" id="post" style="resize: none" rows="3" name="body" placeholder="Explain your post" required></textarea>
				  </div>
				<div>
				  <b>Category:</b><br>
				  <label class="checkbox-inline"><input type="checkbox" name="cat1" value="Earth">Earth</label>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label class="checkbox-inline"><input type="checkbox" name="cat2" value="Energy">Energy</label>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label class="checkbox-inline"><input type="checkbox" name="cat3" value="Man-made Disasters">Man-made Disasters</label>
					<label class="checkbox-inline"><input type="checkbox" name="cat4" value="Life">Life</label><br>
					<label class="checkbox-inline"><input type="checkbox" name="cat5" value="Pollution">Pollution</label>
					<label class="checkbox-inline"><input type="checkbox" name="cat6" value="Natural phenomenons">Natural Phenomenons</label>
					<label class="checkbox-inline"><input type="checkbox" name="cat7" value="Chemicals">Chemicals</label>
					<br>

				  <button type="submit" class="btn btn-success" style="margin-top: 7px; border-radius: 15px">Submit</button>
				</div>
				</form>
			  </div>
			</div>
		@else
			<div class="panel panel-warning">
				<div class="panel-body">
					<p>If you want to post, <a href="/login">click here to login</a></p>
				</div>
			</div>
		@endif
			<div class="panel panel-default">
			  <div class="panel-heading">Posts</div>
			  <div class="panel-body">
			  @foreach($posts as $post)
			  	<div class="row">
			  		<div class="col-sm-1 text-center"><h6>{{ count($post->ratings) }}<br>ratings</h6></div>
			  		<div class="col-sm-1 text-center"><h6>{{ count($post->replies) }}<br>replies</h6></div>
			  		<div class="col-sm-10"><a href="/post?p={{ $post->id }}"><p>{{ $post->title }}</p></a>
			  		<p style="text-overflow: ellipsis; white-space: nowrap;overflow: hidden;">{{ $post->body }}</p>
			  		@foreach($post->categories as $cat)
			  		<small style="background-color: #5bc0de; padding: 5px;">{{ $cat->category }}</small>
			  		@endforeach
			  		<small class="pull-right" style="color: #989898; margin-top: 10px">Posted on {{ $post->created_at }} by {{ $post->user->fullname }}</small>
			  		</div>
			  	</div>
			  	<hr>
			  @endforeach
			  </div>
			</div>
		</div>
@stop
