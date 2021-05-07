
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="icon" href="images/icon/admin.png">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/adminuserlist.css') }}" rel="stylesheet">
    <title>DASHBOARD</title>
    
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
</head>

<body id="body">
    <div class="container">
       
        <main>
            <div class="main__container">
                <!-- MAIN TITLE STARTS HERE -->

                <div class="main__title" style="margin-bottom: 20px;">
                    <img src="assets/user_list.svg" alt="" />
                    <div class="main__greeting">
                        <h1 class="animate__animated animate__bounceInLeft">Pending Requests</h1>
                        <!-- <p>Welcome to your admin dashboard</p> -->
                    </div>
                </div>

                <!-- MAIN TITLE ENDS HERE -->
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Image</th>
                            <th scope="col">Accept</th>
                            <th scope="col">Decline</th>
                        </tr>
                    </thead>
                    
                    <tbody>
                        @foreach ($user_requests as $user_request)
                        
                    
                        <tr>
                            <td scope="row">{{$user_request->id}}</td>
                            <td scope="row">{{$user_request->name}}</td>
                            <td>{{$user_request->email }}</td>
                            <td>{{$user_request->image }}</td>
                            <td> <a href=""> <i class="fa fa-ban" aria-hidden="true"></i> </a></td>
                            <td> <a href=""> <i class="fa fa-pencil" aria-hidden="true"></i> </a></td>
                            
                        </tr>
                        @endforeach
                    </tbody>
                </table>


            </div>
        </main>

       
        @include('admin.sidebaradmin') 

    </div>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
 
</body>

</html>