<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">

    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
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
            <img class="animate__animated animate__fadeInDown"  src="../storage/images/change.svg" alt="Image">

                <div class="main__greeting">
                <h1 class="animate__animated animate__bounceInLeft">Change logo</h1>
                <!-- <p>Welcome to your admin dashboard</p> -->
                </div>
            </div>

          <!-- MAIN TITLE ENDS HERE -->
                @if (session('logoupload'))
                    <div class="alert alert-dismissible alert-success fade show" role="alert">
                        {{ session('logoupload') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif

          <div class="shadow p-3 mb-5 bg-body rounded">
              <img src="../images/club_logo/{{ $club->first()->club_img}}" style="width: 24%;margin-left: 34%;" alt="">
            <!-- <div class="err-txt"></div>
            <div class="succ-txt"></div> -->
          <!-- <form class="row g-3" enctype="multipart/form-data" method="GET" action="php/add_image.php"> -->
          <form action=" {{route('changelogo.update')}} " method="POST" enctype="multipart/form-data" class="row g-3">
            @csrf
            <div class="col-md-5">
                <label for="inputGroupFile02" class="form-label">Image</label>
                <input type="file" name="logoimage" class="form-control @error('logoimage') is-invalid @enderror " id="inputGroupFile02">
                @error('logoimage')<div class="text-danger">{{ $message }}</div>@enderror
              </div>

            <div class="col-5" style="margin-left: 30%; transform: translateX(-10%);">
            {{-- <input class="btn btn-primary add-user-btn" style="width: 200px;" type="submit" value="Save"> --}}
               <button class="btn btn-primary add-user-btn" type="submit" style="width: 200px;">Save</button>
            </div>
          </form>
        </div>

        </div>
      </main>
      @include("layouts.sidebar_responsable")
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
  </body>
</html>
