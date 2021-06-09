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

                @if(session('deletUser'))
                <div class="alert alert-dismissible alert-success fade show">
                    {{session('deletUser')}}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</<span>
                    </button>
                </div>
                @endif

                <div class="main__title" style="margin-bottom: 20px;">
                <img class="animate__animated animate__fadeInDown"  src="../storage/images/user.svg" alt="Image">
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
                        {{-- <div class="form-outline">
                            <input type="search" id="search_text" class="form-control" placeholder="Search" />
                        </div> --}}
                        {{-- <button type="button" class="btn btn-primary">
                        <i class="fa fa-search" aria-hidden="true"></i>

                        </button> --}}
                    </div>
                </div>

                <!-- MAIN TITLE ENDS HERE -->

                <h2> <a href="{{route('userlist.create')}}" class="btn btn-primary"> <i class="fa fa-user-plus " aria-hidden="true"></i> Add new user</a></h2>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Type</th>
                            <th scope="col">show user informations</th>
                            <th scope="col" class="text-center">operations on User</th>
                            {{-- <th scope="col">Update User</th> --}}
                        </tr>
                    </thead>
                <tbody>
                    @foreach ($users as $user)
                        
                    
                    <tr>
                        <th scope="row">{{$user->id}}</th>
                        <td scope="row">{{$user->name}}</td>
                        <td>{{$user->email }}</td>
                        <td>{{$user->type }}</td>
                        {{-- <td> <a href="{{action('admin\UserListController@show',['userlist'=>$user->id])}}"> <i class="fa fa-user" aria-hidden="true"></i> </a></td> --}}
                        <td> <a href="{{route('userlist.show',['userlist'=>$user->id])}}"> <i class="fa fa-user" aria-hidden="true"></i> </a></td>
  
                       
                        <td> <a href="{{route('userlist.edit',['userlist'=>$user->id])}}"> <i class="fa fa-edit" aria-hidden="true"></i> </a>
                         <a href="" title="Delete user {{$user->name}}"> <i class="fa fa-ban" aria-hidden="true" 
                            onclick="event.preventDefault();
                            document.querySelector('#delete-user-form').submit()"></i> </a>
                        <form action="{{route('userlist.destroy',['userlist'=>$user->id])}}" method="post" id="delete-user-form">@csrf @method('DELETE')</form>
                        
                        </td>

                    </tr>
                    @endforeach
                    </tbody>
                    <div class="text-center">
                    {{$users->links() }}
                    </div>
                </table>


            </div>
        </main>

        @include('admin.sidebaradmin')  

    </div>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
        

    <link href="{{ asset('js/admin.js') }}" rel="stylesheet">
                        
</body>

</html>