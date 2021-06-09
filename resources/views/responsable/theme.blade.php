
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
            <img class="animate__animated animate__fadeInDown" src="../storage/images/color.svg" alt="Image">

                <div class="main__greeting">
                <h1 class="animate__animated animate__bounceInLeft">Change Theme</h1>
                <!-- <p>Welcome to your admin dashboard</p> -->
                </div>
            </div>

          <!-- MAIN TITLE ENDS HERE -->
          @if (session('themeUpdate'))
        <div class="alert alert-dismissible alert-success fade show" role="alert">
            {{ session('themeUpdate') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif

          <div class="shadow p-3 mb-5 bg-body rounded" style="width: 150px;margin-left: 42%;margin-top: 6%;">
            <!-- <div class="err-txt"></div>
            <div class="succ-txt"></div> -->
            <form action=" {{route('theme.update')}} " method="POST" class="row g-3" style="width: 126px;" >
                @csrf
              Pick new Color : <br> <input type="color" id="myColor" value="#ff0080">
              <button type="button" class="btn btn-primary" onclick="myFunction()">Get color</button>
              <input type="text" name="color" id="te" value="" >
               <button type="submit"  class="btn btn-primary" > Save theme</button>
              {{-- <input class="btn btn-primary"  type="submit" value="Save theme"> --}}

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
