
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="icon" href="admin.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
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
                

                @if(session('storeUser'))
                <div class="alert alert-dismissible alert-success fade show">
                    {{session('storeUser')}}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</<span>
                    </button>
                </div>
                @endif

                @if(session('updateUser'))
                <div class="alert alert-dismissible alert-success fade show">
                    {{session('updateUser')}}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</<span>
                    </button>
                </div>
                @endif
                

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
              <div class="charts" style="margin-left: 25%;margin-top: 6%;">
                <div class="charts__left">
                  <div class="charts__left__title" >
                    <div >
                      <h1 style="text-align: center"> about {{$user->name}}</strong></h1>
                      <hr>
                      <img src="../storage/images/user_avatar/{{$user->image}}" style="width: 100%; height: 100%">
                       
            <hr>
            <h5><strong style="color: black "><i class="fa fa-envelope fa-x"></i>
             email:</strong>
                 {{$user->email}} </h5>
                <h5>  <strong style="color: black"><i class="fa fa-user  " aria-hidden="true"></i>Type of user:</strong>
               {{$user->type}}</h5>
                 <br>
                <div class="row">

                    {{-- <div class="col"><button type="submit" class="btn btn-primary add-user-btn" style="  width: 125px;">Modify</button></div> --}}
                    <div class="col">
                    <td> <a href="{{route('userlist.edit',['userlist'=>$user->id])}}" class="btn btn-outline-info" style="  width: 125px;"> <i class="fa fa-edit" aria-hidden="true"></i> modidier</a>
                    </div>
                    <div class="col">
                    {{-- <button  style="color: black;  width: 125px;" > --}}
                      <a href="" title="Delete user {{$user->name}}" class="btn btn-outline-dark" style=" width: 125px;"> <i class="fa fa-ban"  
                        onclick="event.preventDefault();
                        document.querySelector('#delete-user-form').submit()">delete</i> </a>
                    <form action="{{route('userlist.destroy',['userlist'=>$user->id])}}" method="post" id="delete-user-form">@csrf @method('DELETE')</form>
                  {{-- </button> --}}
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