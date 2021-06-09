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
                <img class="animate__animated animate__fadeInDown"  src="../storage/images/club.svg" alt="Image">
                    <div class="main__greeting">
                        <h1 class="animate__animated animate__bounceInLeft">All clubs</h1>
                        <!-- <p>Welcome to your admin dashboard</p> -->
                    </div>

                    <!-- <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1" style="height: 38px;"><img src="images/search.svg"></span>
                        </div>
                        <input id="search_text" type="text" class="form-control" placeholder="Search">
                    </div> -->

                    {{-- <div class="input-group">
                        <div class="form-outline">
                            <input type="search" id="search_text" class="form-control" placeholder="Search" />
                        </div>
                        <button type="button" class="btn btn-primary">
                        <i class="fa fa-search" aria-hidden="true"></i>

                        </button>
                    </div> --}}
                </div>
                @if (session('deleteClub'))
                    <div class="alert alert-dismissible alert-success fade show" role="alert">
                        {{ session('deleteClub') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
                <!-- MAIN TITLE ENDS HERE -->
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">club name</th>
                            <th scope="col">club theme</th>
                            <th scope="col">departments id</th>
                            <th scope="col">id admin</th>
                            <th scope="col">Delete club</th>
                            {{-- <th scope="col">Update club</th> --}}
                        </tr>
                    </thead>
                <tbody>
                    @foreach ($clubs as $club)


                    <tr>
                        <th scope="row">{{$club->id}}</th>
                        <td scope="row">{{$club->club_name}}</td>
                        <td scope="row">{{$club->club_theme}}</td>
                        <td>{{$club->departments_id }}</td>

                        <td>{{$club->users_id }}</td>
                        <td> <a href=""onclick="event.preventDefault(); document.querySelector('#delete-club-form').submit()">
                            <i class="fa fa-trash" style="color: red" aria-hidden="true" title="Delete Club {{ $club -> club_name}}"></i>
                            </a>
                        </td>
                        <form action="{{ route('AllClubs.destroy', ['AllClub' => $club->id]) }}" method="post" id="delete-club-form">@csrf @method('DELETE')</form>


                        {{-- <td> <a href=""> <i class="fa fa-pencil" aria-hidden="true"></i> </a></td> --}}
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
