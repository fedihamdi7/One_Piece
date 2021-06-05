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
          <img src="assets/about.svg" alt="" />
          <div class="main__greeting">
            <h1 class="animate__animated animate__bounceInLeft"><i class="fa fa-calendar"> Add New Event</i></h1>
            <!-- <p>Welcome to your admin dashboard</p> -->
          </div>
        </div>
        <div class="shadow p-3 mb-5 bg-body rounded" style="width: 500px;margin-left: 20%;margin-top: 6%;">
          <fieldset>
              <legend></legend>
              <form action="{{ route('event_list.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                        <div class="form-group">
                            <label for="date">Date :</label>
                            <input type="date" name="event_date" id="event_date" value="{{ old('event_date') }}" class="form-control" >
                            @error('event_date')<div class="text-danger">{{ $message }}</div>@enderror
                          </div>
                <br>
                <div class="form-group">
                  <label for="image">Image :</label>
                  <input type="file" name="event_image" id="event_image" value="{{ old('event_image') }}" class="form-control" >
                  @error('event_image')<div class="text-danger">{{ $message }}</div>@enderror
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
