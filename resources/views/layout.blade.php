<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
    integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
    <title>EmployeeCo.</title>
</head>
<body style="margin: 0">
  
    {{-- <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="\">EmployeeCo.</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="\">My Employee</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="\employee\addNewEmployee">Add New Employee</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="">Campanies</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/Company/AddNew" >Add New Campanies</a>
              </li>
              <li class="nav-item">
                <form method="POST" action="\logout\admin" >  
                  @csrf 
                <button class="nav-link" style="color: red" type="submit">Logout</button>
              </form>
              </li>
            </ul>
          </div>
        </div>
      </nav> --}}


{{--       
          @if ($user->type)
              <h1>SSS</h1>
          @endif --}}
    
@if (auth()->user())
<nav class="navbar navbar-expand-lg  bg-dark ">
  <div class="container-fluid">
    <a class="navbar-brand" href="/" style="color: white">Did You Know?</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse " id="navbarNav">
     
      
      @if (auth()->user()->type == 0)
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/" style="color:white">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/post/requests" style="color: white">Posts Requests</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/user/all" style="color: white">Users</a>
        </li>
      </ul> 
      @else
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/" style="color:white">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/post/myPosts" style="color: white">My Posts</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/post/addNew" style="color: white">Add New Post</a>
        </li>
      </ul> 
      @endif
      <div class="d-flex">
        <form action="/user/logout" method="POST">
          @csrf
          <button  class="btn btn-outline-danger" type="submit">Logout</button>
        </form>
       
      </div>
   
    </div>
  </div>
</nav>

@else
    
<nav class="navbar bg-dark">
  <div class="container-fluid">
    <div class="d-md-flex d-block flex-row mx-md-auto mx-0">  
    <img src="{{asset('storage/Image/logo_transparent.png')}}" style="width:150px; height="150px"/>
  </div>
    <div class="d-flex">
      <a class="btn btn-outline-success" href="/register" style="margin: 5px"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-add" viewBox="0 0 16 16">
        <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm.5-5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 1 0Zm-2-6a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Z"/>
        <path d="M8.256 14a4.474 4.474 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10c.26 0 .507.009.74.025.226-.341.496-.65.804-.918C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4s1 1 1 1h5.256Z"/>
      </svg> Register</a>
      <a class="btn btn-outline-primary" style="margin: 5px" href="/login"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-in-right" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0v-2z"/>
        <path fill-rule="evenodd" d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
      </svg> Login</a>
    </div>
  </div>
  </nav>  
@endif

      
    
     
        
        
        
      
      
   
<main>  @yield('content')  </main>
    


</body>
</html>