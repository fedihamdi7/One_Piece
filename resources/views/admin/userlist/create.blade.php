
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/bootstrap.css">

    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
      integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN"
      crossorigin="anonymous"
    />
    
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
    <title>DASHBOARD</title>
    <link rel="icon" href="admin.png">

    <style>
      .sidebar__menu{
  line-height: 1.2;
}
    </style>
 <link href="{{ asset('css/app.css') }}" rel="stylesheet">
 <link href="{{ asset('css/adminuserlist.css') }}" rel="stylesheet">

</head>
  <body id="body">
    <div class="container">
      

      <main>
        <div class="main__container">
         <!-- MAIN TITLE STARTS HERE -->

            <div class="main__title" style="margin-bottom: 20px;">
                <img src="assets/add_user.svg" alt="" />
                <div class="main__greeting">
                <h1 class="animate__animated animate__bounceInLeft">Add User</h1>
                <!-- <p>Welcome to your admin dashboard</p> -->
                </div>
            </div>

          <!-- MAIN TITLE ENDS HERE -->
          
          <div class="shadow p-3 mb-5 bg-body rounded">
            <div class="err-txt"> Wrong </div>
            <div class="succ-txt"> True </div>
          <form action="{{route('userlist.store')}}" method="post"class="row g-3" enctype="multipart/form-data">
            @csrf
            <div class="col-5">
                <label for="inputAddress" class="form-label">Name</label>
                <input type="text" name="name"  value="{{ old('name') }} "class="form-control @error('name') is-invalid @enderror" id="inputAddress" placeholder="Enter Full Name...">
                @error('name')<div class="text-danger">{{ $message }}</div>@enderror
              </div>
            <div class="col-md-5">
              <label for="inputEmail4" class="form-label">Email</label>
              <input type="email" name="email"  value="{{ old('email') }} "class="form-control @error('email') is-invalid @enderror" id="inputEmail4" placeholder="Enter Email...">
              @error('email')<div class="text-danger">{{ $message }}</div>@enderror
            </div>
            <div class="col-md-5">
              <label for="inputPassword4" class="form-label">Password</label>
              <input type="password" name="password"  value="{{ old('password') }}" class="form-control @error('password') is-invalid @enderror" id="inputPassword4">
              @error('password')<div class="text-danger">{{ $message }}</div>@enderror
            </div>
            <div class="col-md-5">
                <label for="inputGroupFile02" class="form-label">Image</label>
                <input type="file" name="image"  value="{{ old('image') }}" class="form-control @error('image') is-invalid @enderror" id="inputGroupFile02">
                @error('image')<div class="text-danger">{{ $message }}</div>@enderror
              </div>
             <br>
            <div class="row">
              <div class="col"><button type="submit" class="btn btn-primary add-user-btn" style="width: 150px;">submit</button></div>
              <div class="col"><button type="reset"class="btn btn-primary add-user-btn" style="width: 150px;">Cancel</button></div>
            </div>
          </form>
        </div>

        </div>
      </main>

      @include('admin.sidebaradmin')
      
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
   
   

  </body>
</html>