@extends ('layouts.master')
	@section ('content')
		<div class="col-sm-8">
			<h1>login</h1>
			<hr>
			@include('layouts.errors')
			<form method="POST" action="/login">
				{{ csrf_field() }}
				  <div class="form-group">
				          <label  for="Title">Email Address:</label>
				          <input type="email" class="form-control" name="email" id="email" >
				  </div>      

				  <div class="form-group">
				          <label  for="Title">Password:</label>
				          <input type="password" class="form-control" name="password" id="password" >
				  </div>       

				 <div class="form-group">        
				          <button type="submit" class="btn btn-pri">Login</button>
				 </div>
			</form>
		</div>
	@endsection