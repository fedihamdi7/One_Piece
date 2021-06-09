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
    <link rel="stylesheet" href="{{asset('css/responsable.css')}}" />
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  <title>DASHBOARD</title>
  <link rel="icon" href="admin.png">


</head>
<body id="body">
  <div class="container">
  <main>
      <div class="main__container">
        <!-- MAIN TITLE STARTS HERE -->
        @if (session('about_update'))
        <div class="alert alert-dismissible alert-success fade show" role="alert">
            {{ session('about_update') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
        <div class="main__title" style="margin-bottom: 20px;">
        <img class="animate__animated animate__fadeInDown"  src="../storage/images/about_us.svg" alt="Image">
          <div class="main__greeting">
            <h1 class="animate__animated animate__bounceInLeft">About Us</h1>
            <!-- <p>Welcome to your admin dashboard</p> -->
          </div>
        </div>
        <div class="shadow p-3 mb-5 bg-body rounded" style="width: 500px;margin-left: 20%;margin-top: 6%;">
            @if ($club_info -> isEmpty())
            <form action="{{route('aboutus.create')}}" method="POST" class="row g-3" style="width: 516px;" enctype="multipart/form-data">
                @else
                <form action="{{route('aboutus.update')}}" method="POST" class="row g-3" style="width: 516px;" enctype="multipart/form-data">
                    @method('PUT')
                @endif
                @csrf
            <div class="form-group" style="width: 461px;margin-left: -38px;">
              <label for="exampleFormControlTextarea1">About Us</label>
              <textarea class="form-control" name="aboutus" id="exampleFormControlTextarea1" aria-valuenow="fezfz" rows="6" >{{$club_info->first()->about_us ?? ''}}</textarea>            </div>
              <button class="btn btn-primary" type="submit" style="width: 120px;">Save</button>          </form>
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
