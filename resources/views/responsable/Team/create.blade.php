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
    <link rel="icon" href="admin.png">
  </head>
  <body id="body">
    <div class="container">
    <main>
        <div class="main__container">
         <!-- MAIN TITLE STARTS HERE -->
         <fieldset>
            <div class="main__title" style="margin-bottom: 20px;">   
                <div class="main__greeting">
                <h1 class="animate__animated animate__bounceInLeft"><i class="fa fa-user-plus"></i>   Add new Member</h1>
                </div>
            </div>
            <div class="shadow p-3 mb-5 bg-body rounded" style="width: 1000px; height: 450px;;margin-left: 10%;margin-top: 6%;">
            <!-- <div class="err-txt"></div>
            <div class="succ-txt"></div> -->
            <!-- <form action="php/gerer_events.php" method="POST" class="row g-3" style="width: 500px;" enctype="multipart/form-data">
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

            </form>-->
      
        <!-- <form action="" method="post">
            @csrf
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="firstname">Firstname</label>
                        <input type="text" name="firstname" value="{{ old('firstname') }}" id="firstname" class="form-control @error('firstname') is-invalid @enderror @error('lastname') is-invalid @enderror" placeholder="Firstname goes here">
                        @error('firstname')<div class="text-danger"></div>@enderror
                      </div>
                </div>
                <br>
                <div class="col">
                    <div class="form-group">
                        <label for="lastname">Lastname</label>
                        <input type="text" name="lastname" value="{{ old('lastname') }}" id="lastname" class="form-control @error('lastname') is-invalid @enderror" placeholder="Lastname goes here">
                        @error('lastname')<div class="text-danger"></div>@enderror
                      </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="text" name="phone" value="{{ old('phone') }}" id="phone" class="form-control @error('phone') is-invalid @enderror" placeholder="+21612345678">
                        @error('phone')<div class="text-danger"></div>@enderror
                      </div>
                </div>
                <br>
                <div class="col">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" value="{{ old('email') }}" id="email" class="form-control @error('email') is-invalid @enderror" placeholder="person@example.com">
                        @error('email')<div class="text-danger">{{ $message }}</div>@enderror
                      </div>
                </div>
            </div>
            <br>
            <div class="form-group">
              <label for="address">Address</label>
              <input type="text" name="address" value="{{ old('address') }}" id="address" class="form-control @error('address') is-invalid @enderror" placeholder="Address goes here">
              @error('address')<div class="text-danger">{{ $message }}</div>@enderror
            </div>
            <br>
            <div class="row">
                <div class="col"><button type="submit" class="btn btn-block btn-outline-primary"><i class="fa fa-save"></i> Save</button></div>
                <div class="col"><button type="reset" class="btn btn-block btn-outline-secondary"><i class="fa fa-window-close"></i> Cancel</button></div>
            </div>
        </form> -->
        </div>

</div> 
    </fieldset>
      </main>
      @include("layouts.sidebar_responsable")
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script src="{{ asset('js/script.js') }}" defer></script>
  </body>
</html>
