<!DOCTYPE html>
<html>
<head>
	<title>Edit posts</title>
	<link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
	<link href="/css/fontcss.css" rel="stylesheet">
</head>
<body>
	<!DOCTYPE html>
<html>
<head>
  <title>dashboard</title>
  <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
  <link href="/css/fontcss.css" rel="stylesheet">
    <style type="text/css">
      hr{
        background-color:  #b3e6ff;
      }
    </style>
</head>
<body>
    <div style="background-color:#009900;">
      <div class="container" >
        <nav class="nav blog-nav" >
         <a class="nav-link active" href="/">DASHBOARD</a>
          @if (Auth::check())
                <a class="nav-link ml-auto " style="float: left;" href="/users/dashboard">{{ Auth::user()->name }}</a>
          @endif     
        </nav>
      </div>
    </div>
        @if(count($errors))
            @if($flash = sesstion('message'))
              <div class="alert alert-danger" id="flash1">
                {{$flash}}
              </div>
            @endif
        @endif
        @if($flash = session('message') )
            <div id="flash1" class = "alert alert-success" role = "alert">
                   {{ $flash }}
            </div>
        @endif
      <div class="container-fluid">
     <div class="row">
      
        <div class="col-md-2 .nav-sidebar" style="background-color: #f5f5f0; padding-bottom: 180px;" >
            <hr>
            <li class="active"><a href="/">Home<span class="sr-only">(current)</span></a></li>
            <hr>
            <li><a href="/edit/post">Edit Post</a></li>
            <hr>
            <li><a href="/post/create">Post An Update</a></li>
            <hr>
          <li><a href="/logout"><button class="btn btn-outline-success my-2 my-sm-0" type="submit">Logout</button></a></li>
          </ul>
          
        </div>
        <div class="col-md-10">
          	<div style="padding-right: 250px; padding-left: 100px; padding-top: 50px; padding-bottom: 100px;">
		    	@foreach( $posts as $post)
	            			<h1>{{ $post->Title }}</h1>
	            			
	            			{{ $post->Body }}
	            			<br><br>
	            			<a href="/delete/{{ $post->id }}">
	            				<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Delete</button>
	            			</a>  
	            			<a href="/update/{{ $post->id }}">
	            				<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Edit</button>
	            			</a> 
	            			<hr>	          	 	
		          @endforeach
		</div>
        </div>
        
      </div>
      </div>
      <footer class="blog-footer">
      <p>Blog built for <a href="https://facebook/nandommamdam">Himself</a> by <a href="https://twitter.com/scotrolex">@scotrolex</a>.</p>
      <p>
        <a href="#">Back to top</a>
      </p>
    </footer>
   
</body>
</html>
	<!-- <div style="background-color:#009900;">
	      <div class="container" >
	        <nav class="nav blog-nav" >
	         <a class="nav-link active" href="/">DASHBOARD</a>
	          @if (Auth::check())
	                <a class="nav-link ml-auto " style="float: left;" href="/users/dashboard">{{ Auth::user()->name }}</a>
	          @endif     
	        </nav>
	      </div>
	    </div>
	    <div style="padding-right: 250px; padding-left: 250px; padding-top: 50px; padding-bottom: 300px;">
	    	@foreach( $posts as $post)
            			<h1>{{ $post->Title }}</h1>
            			<hr>
            			{{ $post->Body }}	          	 	
	          @endforeach
	     </div>
	    <footer class="blog-footer">
	      <p>Blog built for <a href="https://facebook/nandommamdam">Himself</a> by <a href="https://twitter.com/scotrolex">@scotrolex</a>.</p>
	      <p>
	        <a href="#">Back to top</a>
	      </p>
	    </footer> -->

