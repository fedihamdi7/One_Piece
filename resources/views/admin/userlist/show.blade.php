
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="icon" href="admin.png">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/adminuserlist.css') }}" rel="stylesheet">
    <title>DASHBOARD</title>
    
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
</head>

<body id="body">
    <div class="container">
       
        <main>
            <div class="main__container">
                <!-- MAIN TITLE STARTS HERE -->

                <div class="main__title" style="margin-bottom: 20px;">
                    <img src="assets/user_list.svg" alt="" />
                    <div class="main__greeting">
                        <h1 class="animate__animated animate__bounceInLeft"></h1>
                        {{-- <h3 ><i class="fa fa-user animate__animated animate__bounceInLeft" aria-hidden="true"></i><strong class="animate__animated animate__bounceInLeft">user details {{$user->name}}</strong></h3> --}}
                       
                        <!-- <p>Welcome to your admin dashboard</p> -->
                        
            {{-- <div class="card">
                <i class="fa fa-user animate__animated animate__bounceInLeft fa-2x text-red" aria-hidden="true"></i>
                <div class="card_inner">
                  <p class="text-primary-p"><strong class="animate__animated animate__bounceInLeft">user details {{$user->name}}</strong></p>
                  <span class="font-bold text-title">2467</span>
                </div>
              </div> --}}


              <h2 class="text-primary-p"><strong class="animate__animated animate__bounceInLeft">user details </strong></h2>
              <div class="charts">
                <div class="charts__left">
                  <div class="charts__left__title">
                    <div>
                        <h1 style="text-align: center"> about {{$user->name}}</strong></h1>
            <hr>
            <h1><i class="fa fa-envelope"></i> email:</h1>
                <h4 > {{$user->email}}</strong></h4>
                <h1><i class="fa fa-user  fa-2x text-red" aria-hidden="true"></i>Type of user:</h1>
                <h4 > {{$user->type}}</strong></h4>
                <div class="row">
                    <div class="col"><button type="submit" class="btn btn-primary add-user-btn" style="  width: 125px;">Modify</button></div>
                    <div class="col"><button type="reset"class="btn btn-primary add-user-btn btn-danger" style="width: 125px;">delete</button></div>
                  </div>
                    </div>
                 
                  </div>
                  <div id="apex1"></div>
                </div>

                    </div>
                </div>

                
             


        </main>

       
        @include('admin.sidebaradmin') 

    </div>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
 
</body>

</html>