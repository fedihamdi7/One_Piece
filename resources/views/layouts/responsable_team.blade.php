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
  </head>
  <body id="body">
    <div class="container">
    <main>
        <div class="main__container">
         <!-- MAIN TITLE STARTS HERE -->
            <div class="main__title" style="margin-bottom: 20px;">
                <img src="assets/team.svg" alt="" />
                <div class="main__greeting">
                <h1 class="animate__animated animate__bounceInLeft">Team</h1>
                <!-- <p>Welcome to your admin dashboard</p> -->
                </div>
            </div>
            <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Titre</th>
                            <th scope="col">image</th>
                            <th scope="col">Delete User</th>
                            <th scope="col">Update User</th>
                        </tr>
                    </thead>
                    <tbody id="result">
                    @foreach ($teams as $team)
                      <tr>
                            <th scope="row">{{$team->id}}</th>
                            <th scope="row">{{$team->name}}</th>
                            <th>{{$team->titre }}</th>
                            <th>{{$team->img }}</th>
                            <th> <a href=""> <i class="fa fa-ban" aria-hidden="true"></i> </a></th>
                            <th> <a href=""> <i class="fa fa-pencil" aria-hidden="true"></i> </a></th>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
        </div>
      </main>
      @include("layouts.sidebar_responsable");
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script src="{{ asset('js/script.js') }}" defer></script>
  </body>
</html>