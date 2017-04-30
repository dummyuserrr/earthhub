@extends('layout')

@section('title')
	Page Name
@stop

@section('category')
<div class="col-sm-8">
	<div class="panel panel-default">
		<div class="panel-heading">Posts about {{ $cat }}</div>
		<div class="panel-body">
		@foreach($categories as $category)
			<div class="row">
				<div class="col-sm-1 text-center"><h6>
				@if($post->ratings->where('useful', 1)->count() >= $post->ratings->where('useful', 0)->count())
			  					{{ $post->ratings->where('useful', 1)->count() }}
			  				@else
			  					-{{ $post->ratings->where('useful', 0)->count() }}
			  				@endif<br>ratings</h6></div>
				<div class="col-sm-1 text-center"><h6>{{ count($category->post->replies) }}<br>replies</h6></div>
				<div class="col-sm-10"><a href="/post?p={{ $category->post->id }}"><p>{{ $category->post->title }}</p></a>
				<p style="text-overflow: ellipsis; white-space: nowrap;overflow: hidden;">{{ $category->post->body }}</p>
				@foreach($category->post->categories as $cat)
				<small style="background-color: #5bc0de; padding: 5px;">{{ $cat->category }}</small>
				@endforeach
				<small class="pull-right" style="color: #989898; margin-top: 10px">Posted on {{ $category->post->created_at }} by {{ $category->post->email }}</small>
				</div>
			</div>
			<hr>
		@endforeach
		</div>
	</div>
</div>
@stop
