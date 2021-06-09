
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
                <img src="assets/events.svg" alt="" />
                <div class="main__greeting">
                <h1 class="animate__animated animate__bounceInLeft">Events</h1>
                <!-- <p>Welcome to your admin dashboard</p> -->
                </div>
            </div>

          <!-- MAIN TITLE ENDS HERE -->

          <div class="shadow p-3 mb-5 bg-body rounded" style="width: 500px;margin-left: 20%;margin-top: 6%;">
            <!-- <div class="err-txt"></div>
            <div class="succ-txt"></div> -->
            <form action="php/gerer_events.php" method="POST" class="row g-3" style="width: 500px;" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Department : </label>
                        <select class="form-control" id="exampleFormControlSelect1" name="dep" style="width: 150px;">
                        <option>TI</option>
                        <option>GE</option>
                        <option>GP</option>
                        <option>ME</option>
                        <option>EL</option>
                        </select>
                    </div>
                    <div class="col-md-5" style="width: 100%;">
                        <label for="inputGroupFile02" class="form-label">Image</label>
                        <input type="file" name="image" class="form-control" id="inputGroupFile02">
                    </div>

                    <div class="col-md-5" style="width: 50%; margin-left: -50%;">
                        <label for="inputGroupFile002" class="form-label">Date</label>
                        <input type="date" name="date" class="form-control" id="inputGroupFile002">
                    </div>

                    <input class="btn btn-primary"  type="submit" style="width: 120px;" value="Add event">

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
