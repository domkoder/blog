<div class="blog-masthead">
  <div class="container">
    <nav class="nav blog-nav">
      <a class="nav-link active" href="/">Home</a>
      <a class="nav-link ml-0" href="/register" ><button class="btn btn-outline-success my-2 my-sm-0" type="submit">Signin</button></a>
      <a class="nav-link " href="/login"><button class="btn btn-outline-success my-2 my-sm-0" type="submit">Login</button></a>
      @if (Auth::check())
              <a class="nav-link ml-auto"  href="/users/dashboard">{{ Auth::user()->name }}</a>
      @endif     
    </nav>
  </div>
</div>
   
      @if($flash = session('message') )
          <div id="flash1" class = "alert alert-success" role = "alert">
                 {{ $flash }}
          </div>
      @endif
<div class="blog-header">
  <div class="container">
    <h1 class="blog-title">My blog</h1>
    <p class="lead blog-description">learning laravel</p>
  </div>
</div>