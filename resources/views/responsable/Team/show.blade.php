<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
      integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN"
      crossorigin="anonymous"
    />   
    <link rel="stylesheet" href="{{asset('css/Style.css')}}">
    <link rel="stylesheet" href="{{asset('css/admin.css')}}" />
    <link rel="stylesheet" href="{{asset('css/responsable.css')}}" />    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
    <title>DASHBOARD</title>
    <link rel="icon" href="admin.png">
  </head>
  <body id="body">
    <div class="container">
    <main>
        <div class="main__container">
         <!-- MAIN TITLE STARTS HERE -->
            <div class="main__title" style="margin-bottom: 20px;">
            
                <div class="main__greeting">
                <h1 class="animate__animated animate__bounceInLeft"> <i class="fa fa-id-card"></i>    Member details : <strong>{{$team->team_name}}</strong></h1>
                <!-- <p>Welcome to your admin dashboard</p> -->
                </div>
            </div>
            <!-- <div class="card" style="width: 38rem;">
         <div class="card-body">
            <h5 class="card-title"><i class="fa fa-user"></i> <strong>{{$team->team_name}}</strong>
            <ul class="list-group list-group-flush">Details:
                <li class="list-group-item"> {{$team->team_titre }}</li>
                <li class="list-group-item">{{$team->team_img }}</li>
               </h5>
            </ul>
            <hr>
            <a href="#" class="btn btn-warning" ><i class="fa fa-edit"></i></a>
            <a href="#" class="btn btn-danger" ><i class="fa fa-dash"></i></a>
        </div>
      </div> -->
       
      <div class="shadow p-3 mb-5 bg-body rounded" style="width: 500px;margin-left: 20%;margin-top: 6%;">
            <!-- <div class="err-txt"></div>
            <div class="succ-txt"></div> -->
            <div>
            <div class="col-md-5" style="width: 100%;">
            
                   <center>   
                        <h3>{{$team->team_name}}</h3> </center>
                    </div>
                    <hr>
                    <h6>Details :</h6>  
                      
                    
                 
                    <div class="col-md-5" style="width: 100%;">
                        <strong>Role</strong>
                        <p>{{$team->team_titre}}</p>
                    </div>
                    <div class="col-md-5" style="width: 100%;">
                        <strong>photo:</strong>
                        <p>{{$team->team_img}}</p>
                    </div>
                    <div class="col-md-5" style="width: 100%;">
                        <strong>social media :</strong>
                        <p>{{$team->team_fb}}</p>
                        <p>{{$team->team_insta}}</p>
                        <p>{{$team->team_twitter}}</p>
                        <p>{{$team->team_linkedin}}</p>
                    </div>
                    <input class="btn btn-primary"  type="submit" style="width: 120px;" value="Add event">

        </div>

        </div>
      </main>
      @include("layouts.sidebar_responsable")
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script src="{{ asset('js/script.js') }}" defer></script>
  </body>
</html>
