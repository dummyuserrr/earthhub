@extends('layout')

@section('title')
	EarthHUB
@stop

@section('search')
		<div class="col-sm-8">
			<div class="panel panel-default">
			  <div class="panel-heading">Search Results ({{ count($posts) }})</div>
			  <div class="panel-body">
			  @foreach($posts as $post)
			  	<div class="row">
			  		<div class="col-sm-1 text-center"><h6>
			  			@if($post->ratings->where('useful', 1)->count() >= $post->ratings->where('useful', 0)->count())
			  					{{ $post->ratings->where('useful', 1)->count() }}
			  				@else
			  					-{{ $post->ratings->where('useful', 0)->count() }}
			  				@endif
			  		<br>ratings</h6></div>
			  		<div class="col-sm-1 text-center"><h6>{{ count($post->replies) }}<br>replies</h6></div>
			  		<div class="col-sm-10"><a href="/post?p={{ $post->id }}"><p>{{ $post->title }}</p></a>
			  		<p style="text-overflow: ellipsis; white-space: nowrap;overflow: hidden;">{{ $post->body }}</p>
			  		@foreach($post->categories as $cat)
			  		<small style="background-color: #5bc0de; padding: 5px;">{{ $cat->category }}</small>
			  		@endforeach
			  		<small class="pull-right" style="color: #989898; margin-top: 10px">Posted on {{ $post->created_at }} by {{ $post->email }}</small>
			  		</div>
			  	</div>
			  	<hr>
			  @endforeach
			  </div>
			</div>
		</div>
@stop