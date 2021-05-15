<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous"> --}}

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous" />
    <link rel="stylesheet" href="{{ asset('css/Style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/responsable.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
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
                        <h1 class="animate__animated animate__bounceInLeft">Modify Department :
                          <strong>  {{ $department -> nom_department }} </strong> </h1>
                        <!-- <p>Welcome to your admin dashboard</p> -->
                    </div>
                </div>
                @if (session('dep_update'))
                    <div class="alert alert-dismissible alert-success fade show" role="alert">
                        {{ session('dep_update') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif

                <div class="shadow p-3 mb-5 bg-body rounded" style="width: 500px;margin-left: 20%;margin-top: 6%;">
                    <form action="{{ route ('department.update', ['department' => $department->id] )}}" method="POST" class="row g-3" style="width: 516px;"
                        enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="form-group" style="width: 461px;margin-left: -38px;">
                            {{-- <label for="exampleFormControlTextarea1">Department Name</label> --}}
                            {{-- <textarea class="form-control" name="desc" id="exampleFormControlTextarea1" aria-valuenow="fezfz" rows="3"></textarea> --}}
                            <div class="form-group">
                                <label for="" class="pt-4">Department Name</label>
                                <input type="text" class="form-control @error('nom_department') is-invalid @enderror " name="nom_department" id="" aria-describedby="helpId"placeholder="" value="{{ $department -> nom_department   ?? old('nom_department')}}">
                                @error('nom_department')<div class="text-danger">{{ $message }}</div>@enderror
                            </div>
                            <div class="form-group">
                                <label for="" class="pt-4">Clubs Count</label>
                                <input type="number" class="form-control @error('clubs_count') is-invalid @enderror" name="clubs_count" id=""value="{{ $department -> clubs_count  ?? old('clubs_count')}}">
                                @error('clubs_count')<div class="text-danger">{{ $message }}</div>@enderror

                            </div>


                        </div>
                        {{-- <input class="btn btn-primary" type="submit" style="width: 120px;" value="Save"> --}}
                        <button type="submit" name="" id="" style="width: 33%;margin-left: -6%;"class="btn btn-primary btn-lg btn-block">Update</button>
                    </form>
                </div>

            </div>
        </main>
        @include('admin.sidebaradmin')
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script src="{{ asset('js/script.js') }}" defer></script>
</body>

</html>
