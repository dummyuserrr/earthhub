@extends('layout')

@section('title')
	Page Name
@stop

@section('post')
		<div class="col-sm-8">
			<div class="panel panel-default">
			  <div class="panel-heading"><strong>{{ $post->title }}</strong> <small class="pull-right">by: {{ $post->user->fullname }}</small></div>
			  <div class="panel-body">
			  	<div class="row">
			  		<div class="col-sm-1 text-center">
			  		@if(session('status') == 1)
			  			<button class="btn" data-toggle="tooltip" title="Rate as useful" onclick="ratePostAsUseful('{{ $post->id }}')"><span class="glyphicon glyphicon-chevron-up"></span></button><br>
			  			<font id="postRating">{{ $post->ratings }}</font>
			  			<button class="btn" data-toggle="tooltip" title="Rate as not useful" onclick="ratePostAsNotUseful('{{ $post->id }}')"><span class="glyphicon glyphicon-chevron-down"></span></button><br>
			  		@else

			  		@endif
			  		</div>
			  		<div class="col-sm-11"><font style="font-size: 23px"> {{ $post->body }}</font>
			  			<div>
								@foreach($post->categories as $cat)
					  			<small style="background-color: #5bc0de; padding: 5px;">{{ $cat->category }}</small>
					  		@endforeach
						  </div>
			  		</div>
							
			  	</div>
			  	<hr>
			  	@if(count($replies) < 1)
			  	<h4>No replies</h4>
			  	<hr>
			  	@else
			  	<h4>Replies:</h4>
			  	@endif

			  	@foreach($replies as $reply)
			  		<div class="replies" style="margin-left: 20px">
			  		<small class="pull-right">{{ $reply->created_at }}</small>
				  		<h5><a href="#">(<font id="replyRating{{ $reply->id }}">{{ $reply->ratings }}</font>) <strong>{{ $reply->user->fullname }}</strong></a></h5>
				  		<p style="margin-left: 10px">{{ $reply->body }}</p>
				  		@if(session('status') == 1)
				  		<small style="margin-left: 10px"><a href="#" onclick="rateReplyAsUseful('{{ $reply->id }}')">Rate as useful</a></small>
				  		<small style="margin-left: 10px"><a href="#" onclick="rateReplyAsNotUseful('{{ $reply->id }}')">Rate as not useful</a></small>
				  		@else

				  		@endif
				  	</div><hr>
				@endforeach
				@if(session('status') == 1)
				  	<form class="form-horizontal" method="post" action="/post">
				  	{{ csrf_field() }}
					  <div class="form-group">
					    <label class="control-label col-sm-2" style="font-size: 13px">Reply to this post:</label>
					    <div class="col-sm-10">
					      <textarea type="text" class="form-control" id="body" placeholder="Your reply" rows="3" style="resize: none" name="body" required></textarea>
					    </div>
					  </div>
					  <div class="form-group">
					    <div class="col-sm-offset-2 col-sm-10">
					    <input type="hidden" name="postid" value="{{ $post->id }}">
					      <button type="submit" class="btn btn-primary">Submit</button>
					    </div>
					  </div>
					</form>
				@else

				@endif
			  </div>
			</div>
		</div>
@stop
