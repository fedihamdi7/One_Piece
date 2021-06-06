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
                <div class="card-header">Register Club For {{ $user->name }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('requestform.update',['requestform' => $user->id]) }}" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <input type="hidden" name="id" value="{{$user->id}}">
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right" >{{ ('Club Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="Cname" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">

                            <label for="exampleFormControlTextarea1" style="position: absolute;" class="col-md-4 col-form-label text-md-right">About Your Club</label>

                                <div class="col-md-6" style="width: 50% ;margin-left: 33%;">

                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" maxlength="255" name="about_club"></textarea>
                              </div>
                        </div>

                        <div class="form-group row">
                            <label for="inputGroupFile02" class="col-md-4 col-form-label text-md-right">Club Logo</label>

                            <div class="col-md-6">
                            <input type="file" name="club_logo" class="form-control @error('logoimage') is-invalid @enderror " id="inputGroupFile02">
                            @error('logoimage')<div class="text-danger">{{ $message }}</div>@enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="" class="col-md-4 col-form-label text-md-right"> Department </label>

                            <div class="col-md-6" style="margin-top: 9px;">

                                <select name="Deps" id="Deps">
                                    <option value="Informatique">Informatique</option>
                                    <option value="Economie">Economie</option>
                                    <option value="Electrique">Electrique</option>
                                    <option value="Mecanique">Mecanique</option>
                                    <option value="GP">Genie Procedes</option>
                                  </select>

                            </div>



                        </div>



                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ ('Submit') }}
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
