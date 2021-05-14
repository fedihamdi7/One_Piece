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
    <link rel="stylesheet" href="{{asset('css/responsable.css')}}" />   
     <link
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
                <h1 class="animate__animated animate__bounceInLeft"><i class="fa fa-user-plus"></i>   Add new Member</h1>
                </div>
            </div>
            <div class="shadow p-3 mb-5 bg-body rounded" style="width: 1000px; height: 450px;;margin-left: 10%;margin-top: 6%;">
        <form action="{{route('teams.store')}}" method="post">
            @csrf
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label>Full name :</label>
                        <input type="text" name="team_name" value="{{ old('team_name') }}" class="form-control @error('team_name') is-invalid @enderror"placeholder="fullname">
                        @error('team_name')<div class="text-danger">{{ $message }}</div>@enderror
                      </div>
                </div>
                <br>
                <div class="col">
                    <div class="form-group">
                        <label >Titre</label>
                        <input type="text" name="team_titre" value="{{ old('team_titre') }}"  class="form-control" placeholder="role">
                        @error('team_titre')<div class="text-danger">{{ $message }}</div>@enderror
                      </div>
                </div>
            </div>
            <br>
            <div class="form-group">
              <label >Image :</label>
              <input type="file" name="team_img" value="{{ old('team_img') }}"  class="form-control" placeholder="photo">
              @error('team_img')<div class="text-danger">{{ $message }}</div>@enderror
            </div>
            <br>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label >Facebouk link :</label>
                        <input type="text" name="team_fb" value="{{ old('team_fb') }}" class="form-control" placeholder="http/">
                        @error('team_fb')<div class="text-danger">{{ $message }}</div>@enderror
                      </div>
                </div>
                <br>
                <div class="col">
                    <div class="form-group">
                        <label >Instagram link :</label>
                        <input type="text" name="team_insta" value="{{ old('team_insta') }}" class="form-control" placeholder="http/">
                        @error('team_insta')<div class="text-danger">{{ $message }}</div>@enderror
                      </div>
                </div>
            </div>
            
            <br>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label >Twitter link :</label>
                        <input type="text" name="team_twitter" value="{{ old('team_twitter') }}" class="form-control" placeholder="http/">
                        @error('team_twitter')<div class="text-danger">{{ $message }}</div>@enderror
                      </div>
                </div>
            <br>
            <div class="col">
                    <div class="form-group">
                        <label >Linkedin link :</label>
                        <input type="text" name="team_linkedin" value="{{ old('team_linkedin') }}" class="form-control" placeholder="http/">
                        @error('team_linkedin')<div class="text-danger">{{ $message }}</div>@enderror
                      </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col"><button type="submit" class="btn btn-block btn-outline-primary"><i class="fa fa-save"></i> Save</button></div>
                <div class="col"><button type="reset" class="btn btn-block btn-outline-secondary"><i class="fa fa-window-close"></i> Cancel</button></div>
            </div>
        </form>
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
