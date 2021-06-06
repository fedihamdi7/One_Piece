@extends('layouts.app')

@section('content')
<div class="container">

                 @if (session('RegisterSucc'))
                    <div class="alert alert-dismissible alert-success fade show" role="alert">
                        {{ session('RegisterSucc') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ ('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ ('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ ('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ ('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ ('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="inputGroupFile02" class="col-md-4 col-form-label text-md-right">Image</label>

                            <div class="col-md-6">
                            <input type="file" name="UserImage" class="form-control @error('logoimage') is-invalid @enderror " id="inputGroupFile02">
                            @error('logoimage')<div class="text-danger">{{ $message }}</div>@enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="" class="col-md-4 col-form-label text-md-right"> Role </label>

                            <div class="col-md-6" style="margin-left: 20px;margin-top: 9px;">

                                    <input class="form-check-input " type="radio" name="Role" id="flexRadioDefault1" value="Membre">

                                    <label class="form-check-label " for="flexRadioDefault1">
                                      Membre
                                    </label>

                                    <div class="col-md-6" style="position: absolute;margin-left: 35%;margin-top: -22px;">

                                        <input class="form-check-input " type="radio" name="Role" id="flexRadioDefault2" value="Responsable">

                                        <label class="form-check-label " for="flexRadioDefault2">
                                          Responsable
                                        </label>


                                </div>

                            </div>



                        </div>



                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ ('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
