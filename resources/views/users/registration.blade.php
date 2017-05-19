@extends ('layouts.master')

@section ('content')

	<div class="col-sm-8">
		<h1>Register</h1>
		<hr>
	@include('layouts.errors')
		<form method="POST" action="/register">
			{{ csrf_field() }}
			 <div class="form-group">
			          <label  for="Title">Name:</label>
			          <input type="name" class="form-control" name="name" id="name" >
			  </div> 

			  <div class="form-group">
			          <label  for="Title">Email:</label>
			          <input type="email" class="form-control" name="email" id="email" >
			  </div>      

			  <div class="form-group">
			          <label  for="Title">Password:</label>
			          <input type="password" class="form-control" name="password" id="password" >
			  </div>           

			  <div class="form-group">
			          <label  for="Title">Password Confirmation:</label>
			          <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" >
			  </div>           

			 <div class="form-group">        
			          <button type="submit" class="btn btn-pri">Register</button>
			 </div>
		</form>
	</div>

@endsection
