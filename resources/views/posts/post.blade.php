 <div class="blog-post">

      <h2 class="blog-post-title">
        <a href="/post/{{ $post->id}}">

         {{ $post->Title }}

        </a>

      </h2>
      <p class="blog-post-meta">
      	By {{ $post->user->name }} on
      	{{ $post->created_at->toFormattedDateString() }}
      </p>
      <p>
      	{{ $post->Body }}
      </p>
      
  </div>
