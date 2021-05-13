<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous" />
    
    
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/adminuserlist.css') }}" rel="stylesheet">

    <title>DASHBOARD</title>
    <link rel="icon" href="admin.png">
   
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
</head>

<body id="body">
    <div class="container">
        <main>
            <div class="main__container">
                <!-- MAIN TITLE STARTS HERE -->

                <div class="main__title" style="margin-bottom: 20px;">
                    <img class="animate__animated animate__fadeInDown" src="assets/user_list.svg" alt="" />
                    <div class="main__greeting">
                        <h1 class="animate__animated animate__bounceInLeft">User List</h1>
                        <!-- <p>Welcome to your admin dashboard</p> -->
                    </div>

                    <!-- <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1" style="height: 38px;"><img src="images/search.svg"></span>
                        </div>
                        <input id="search_text" type="text" class="form-control" placeholder="Search">
                    </div> -->

                    <div class="input-group">
                        <div class="form-outline">
                            <input type="search" id="search_text" class="form-control" placeholder="Search" />
                        </div>
                        <button type="button" class="btn btn-primary">
                        <i class="fa fa-search" aria-hidden="true"></i>

                        </button>
                    </div>
                </div>

                <!-- MAIN TITLE ENDS HERE -->
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Type</th>
                            <th scope="col">Delete User</th>
                            <th scope="col">Update User</th>
                        </tr>
                    </thead>
                <tbody>
                    @foreach ($users as $user)
                        
                    
                    <tr>
                        <th scope="row">{{$user->id}}</th>
                        <td scope="row">{{$user->name}}</td>
                        <td>{{$user->email }}</td>
                    
                        <td>{{$user->type }}</td>
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
        

    <link href="{{ asset('js/admin.js') }}" rel="stylesheet">
                        
</body>

</html>