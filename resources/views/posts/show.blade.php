@extends ('layouts.master')

@section ('content')
 <div class="col-sm-8 blog-main">

	<h1>{{ $post->Title }} </h1>

	{{ $post->Body }}
		<hr>
	<div class="comments">

		<h3 style="padding-top: 5px; padding-bottom: 3px;">Comments</h3>
		<ul class="list-group">
			@foreach($post->comments as $comment)
				<li class="list-group-item">
					<p style="padding-right: 6px;">
					<strong>
						{{  $comment->created_at->diffForHumans()  }} :</p> 

					</strong>
					</p>
					<p>{{  $comment->body }}</p>
				</li>
			@endforeach
		</ul>
	</div>
		<hr>
		@include ('layouts.errors')
	<div class="card">
		<div class="card-block">
			<form method="POST" action="/post/{{ $post->id }}/comments">
					 {{ csrf_field() }}
				<div class="form-group">
					<textarea id="body" name="body" class="form-control" placeholder="Your Comment here.
					"></textarea>
				</div>

				<div class="form-group">
					<button type="submit" class="btn btn-pri">Add Comment</button>
				</div>
				
			</form>
		</div>
	</div>
 </div>
@endsection