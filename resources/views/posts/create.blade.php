@extends ('layouts.master')


@section ('content')
 
 <div class="col-sm-8">
	<h1>
		publish a post .
	</h1>

	</hr>
  @include('layouts.errors')
<form  role="form" method="post" action="/post">
            {{ csrf_field()}}

     <div class="form-group">
          <label  for="Title">Title:</label>
          <input type="text" class="form-control" name="title" >
      </div>       

      <div class="form-group">
          <label  for="body">body:</label>
          <textarea id="body" name="body" class="form-control"></textarea>   
      </div>

      <div class="form-group">        
          <button type="submit" class="btn btn-pri">Post</button>
     </div>


</form>

  
    
    

</div>

@endsection
