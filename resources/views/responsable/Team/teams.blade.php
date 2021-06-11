<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous"> -->
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
  <!-- search with ajax -->
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->


    <title>DASHBOARD</title>
    <link rel="icon" href="admin.png">
  </head>
  <body id="body">
    <div class="container">
    <main>

        <div class="main__container">
         <!-- MAIN TITLE STARTS HERE -->
            <div class="main__title" style="margin-bottom: 20px;">
            <img class="animate__animated animate__fadeInDown"  src="../storage/images/team.svg" alt="Image">
                <div class="main__greeting">
                <h1 class="animate__animated animate__bounceInLeft">Team</h1>
                <!-- <p>Welcome to your admin dashboard</p> -->
                </div>
            </div>
<br>
@if(session('deletTeam'))
<div class="alert alert-dismissible alert-success fade show" role="alert">
        {{ session('deletTeam') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif
<div>
        <div class="mx-auto ">
            <div class="">
                <form action="{{ route('teams.index') }}" method="GET" role="search" enctype="multipart/form-data">
              
                     @csrf
                    <div class="input-group">
                     
                        <input type="text" class="form-control mr-2" name="term" placeholder="Search teams" id="term">
                        <a href="{{ route('teams.index') }}" class=" mt-1">
                            <span class="input-group-btn">
                            <button class="btn btn-info" type="submit" title="Search teams">
                            <span class="fa fa-search"></span>
                                </button>
                            </span>
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- search with ajax -->
<!-- 
   <div class="panel panel-default">
    <div class="panel-heading">Search Customer Data</div>
    <div class="panel-body">
     <div class="form-group">
      <input type="text" name="search" id="search" class="form-control" placeholder="Search member Team" /> -->
      <!-- <div class="input-group">
                        <div class="form-outline">
                            <input type="search" name="search" id="search" class="form-control" placeholder="Search" />
                        </div>
                        <button type="button" class="btn btn-primary">
                        <i class="fa fa-search" aria-hidden="true"></i>

                        </button>
                    </div>
                </div>

<br> -->
            <table class="table">
                    <thead>
                        <tr>
                            <th scope="col"><p>#</p></th>
                            <th scope="col"><p style="margin-left:10%;"><i class="fa fa-user"></i>Name</p> </th>
                            <th scope="col"><p style="margin-left:60%;">Titre</p></th>
                            <th ><p style="margin-left:60%;"><i class="fa fa-picture-o" ></i> image</p></th>
                            <th scope="col"  ><p>Facebook</p>  </th>
                            <th scope="col" ><p>Instagram</p> </th>
                            <th scope="col" ><p>Twitter</p> </th>
                            <th scope="col" ><p>Linkdlin</p></th>
                            <th scope="col"><p>Show</p></th>
                            <th scope="col"><p>Delete</p></th>
                            <th scope="col"><p>Update</p></th>
                        </tr>
                    </thead>
                    <tbody id="result">
                    @foreach ($teams as $team)
                      <tr>
                            <th scope="row">{{$team->id}}</th>
                            <th scope="row">{{$team->team_name}}</th>
                            <th><p style="margin-left:58%;">{{$team->team_titre }}</p></th>
                            <th><img src="../storage/images/club_team_image/{{$team->team_img}}" style="width: 20%;margin-left:60%;"></th>
                            <th>{{$team->team_fb }}</th>
                            <th>{{$team->team_insta }}</th>
                            <th>{{$team->team_twitter }}</th>
                            <th>{{$team->team_linkedin }}</th>
                            <th>  <a href="{{ route('teams.show', ['team' => $team->id]) }}"><i class="fa fa-tag" style="color: blue" ></i></a></th>
                            <th><a href="#" onclick="event.preventDefault(); document.querySelector('#delete-team-form').submit()" ><i class="fa fa-trash" style="color: red" ></i> </a>
                    <form action="{{route('teams.destroy', ['team' => $team->id])}}" method="post" id="delete-team-form">
                    @method('DELETE')
                     @csrf
                      </form>
               </th>
               <th> <a href="{{route('teams.edit', ['team' => $team->id])}}"><i class="fa fa-edit" style="color: #ffdd00" ></i></a></th>
                        </tr>
                        @endforeach
                    </tbody>
                </table>      
                <br>    
                  <a href="{{ route('teams.create') }}" class="btn btn-outline-primary float-right"><i class="fa fa-user-plus"></i>   Add new Member</a>

        </div>
      </main>
      @include("layouts.sidebar_responsable")
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script src="{{ asset('js/script.js') }}" defer></script>
    <!-- search with ajax -->
    {{-- <script>
$(document).ready(function(){

 fetch_team_data();

 function fetch_team_data(query = '')
 {
  $.ajax({
   url:"{{ route('teams.action') }}",
   method:'GET',
   data:{query:query},
   dataType:'json',
   success:function(data)
   {
    $('tbody').html(data.table_data);
    $('#total_records').text(data.total_data);
   }
  })
 }

 $(document).on('keyup', '#search', function(){
  var query = $(this).val();
  fetch_team_data(query);
 });
});
</script> --}}
  </body>
</html>
