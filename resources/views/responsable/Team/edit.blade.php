<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">

  <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous" />
  <link rel="stylesheet" href="{{asset('css/Style.css')}}">
    <link rel="stylesheet" href="{{asset('css/admin.css')}}" />
    <link rel="stylesheet" href="{{asset('css/responsable.css')}}" />  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
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
            <h1 class="animate__animated animate__bounceInLeft"><i class="fa fa-calendar"> Edit <strong>{{$team->team_name}}</strong> details</i></h1>
            <!-- <p>Welcome to your admin dashboard</p> -->
          </div>
        </div>
        <div class="shadow p-3 mb-5 bg-body rounded" style="width: 500px;margin-left: 20%;margin-top: 6%;">
          <fieldset>
              <legend></legend>
              <form action="{{route('teams.update', ['team' => $team->id])}}" method="post">
            @method('PUT')
                @csrf
                        <div class="form-group">
                            <label for="name">nom :</label>
                            <input type="text" name="team_name" id="team_name" value="{{ $team->team_name }}" class="form-control" >
                            @error('team_name')<div class="text-danger">{{ $message }}</div>@enderror
                          </div>
                <br>
                <div class="form-group">
                            <label for="name">titre :</label>
                            <input type="text" name="team_titre" id="team_titre" value="{{ $team->team_titre }}" class="form-control" >
                            @error('team_titre')<div class="text-danger">{{ $message }}</div>@enderror
                          </div>
                <br>
                <div class="form-group">
                  <label for="image">Image :</label>
                  <input type="file" name="team_img" id="team_img" value="{{ $team->team_img }}" class="form-control" >
                  @error('team_img')<div class="text-danger">{{ $message }}</div>@enderror
                </div>
                <br>
                <div class="form-group">
                            <label for="name">Facebook :</label>
                            <input type="text" name="team_fb" id="team_fb" value="{{ $team->team_fb }}" class="form-control" >
                            @error('team_fb')<div class="text-danger">{{ $message }}</div>@enderror
                          </div>
                <br>
                <div class="form-group">
                            <label for="name">Instagram :</label>
                            <input type="text" name="team_insta" id="team_insta" value="{{ $team->team_insta }}" class="form-control" >
                            @error('team_insta')<div class="text-danger">{{ $message }}</div>@enderror
                          </div>
                <br>
                <div class="form-group">
                            <label for="name">twitter :</label>
                            <input type="text" name="team_twitter" id="team_twitter" value="{{ $team->team_twitter }}" class="form-control" >
                            @error('team_twitter')<div class="text-danger">{{ $message }}</div>@enderror
                          </div>
                <br>
                <div class="form-group">
                            <label for="name">linkedin :</label>
                            <input type="text" name="team_linkedin" id="team_linkedin" value="{{ $team->team_linkedin }}" class="form-control" >
                            @error('team_linkedin')<div class="text-danger">{{ $message }}</div>@enderror
                          </div>
                <br>
                <div class="row">
                    <div class="col"><button type="submit" class="btn btn-block btn-outline-primary"><i class="fa fa-save"></i>  Add</button></div>
                    <div class="col"><button type="reset" class="btn btn-block btn-outline-secondary"><i class="fa fa-window-close"></i>  Cancel</button></div>
                </div>
            </form>
          </fieldset>
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
