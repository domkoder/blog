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
          <div style="padding-right: 300px; padding-left: 150px; padding-top: 50px";>

              <form  role="form" method="post" action="/edit/{{ $post->id }}">
                          {{ csrf_field() }}

                   <div class="form-group">
                        <label  for="Title">Title:</label>
                        <input type="text" class="form-control" name="title"  value="{{ $post->Title }}" >
                    </div>       

                    <div class="form-group">
                        <label  for="body">body:</label>
                        <textarea id="body" name="body" class="form-control">{{ $post->Body }}</textarea>   
                    </div>

                    <div class="form-group">        
                        <button type="submit" class="btn btn-pri">Updatepost</button>
                   </div>
              </form>
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