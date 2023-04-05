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
    <title>Register</title>
</head>
<body style="margin: 0;">

{{-- <div class="container text-center" style="background-color:black; width: 100vw;"> --}}
    <div class="row" style="height:100vh; width:100vw">
   
      <div class="col">
        <div class="container text-center" style="background-color:rgb(197, 78, 78);margin:20px; height:90vh; border-radius: 15px;">
        <img src="https://images.pexels.com/photos/3760072/pexels-photo-3760072.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" style="height: 100%; width:100%;padding:20px; border-radius: 15px;"/>
        </div>
      </div>

      <div class="col">
        <div style="margin:20px;" >
            <h2 style="text-align: center">Wellcome to Employee.Co </h2>
            <p style="text-align: center" >Please Fill all the fileds to creaet an account</p>
            <div style="max-width: 50%;" class="container text-center"> 

                <form action="/admin/register" method="POST" enctype="multipart/form-data" >
                    @csrf 

                
                <!-- Name --> 

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label" style="float: left">Full Name</label>
                <input type="text" name="fullName" class="form-control" ivalue="{{old("fullName")}}" placeholder="Full Name ">
              </div> 

              @error('fullName')
                 <div style="color: #D8000C;
                    text-align: left; ">
                        ⚠️{{$message}}
                        </div>
              @enderror

            <!-- Email --> 

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label" style="float: left">Email address</label>
                <input type="email" name="email" class="form-control" value="{{old('email')}}" placeholder="name@example.com">
              </div>
              @error('email')
                 <div style="color: #D8000C;
                    text-align: left; ">
                        ⚠️{{$message}}
                        </div>
                  
              @enderror

              <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label" style="float: left">Password</label>
                <input type="password" name="password" class="form-control"  value="{{old('password')}}" placeholder="******"  />
              </div>

              <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label" style="float: left">Confirm Password</label>
                <input type="password" name="password_confirmation" class="form-control"  value="{{old('password')}}" placeholder="******"  />
              </div>

              @error('password')
                <div style="color: #D8000C;
                        text-align: left; ">
                             ⚠️{{$message}}
                        </div>
              @enderror

              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label" style="float: left">Phone Number</label>
                <input type="text" name= "phoneNumber" class="form-control" value="{{old("phoneNumber")}}" placeholder="966*********">
              </div>  

              @error('phoneNumber')
                <div style="color: #D8000C;
                    text-align: left; ">
                        ⚠️{{$message}}
                        </div>                  
              @enderror

              <div class="mb-3">
                <button type="button" class="btn btn-link" style="float: right">Forgot Password?</button>
              </div>

              <div class="mb-3">
                 <div class="d-grid gap-2 col-6 mx-auto" style="padding-top:50px">
                     <button class="btn btn-primary" type="submit">Sign up</button>
                 </div>
              <div style="margin: 20px">
                  <button type="button" class="btn btn-link" style="text-align:center">Have an account? Login</button>
              </div>
              </div>
            </div>
            
        </form>
            
        </div>
      </div>
</div>
</body>
</html>