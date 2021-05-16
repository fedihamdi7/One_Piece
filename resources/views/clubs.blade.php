@extends('layouts.app')

@section('content')

<section class="wrapper">
    <div class="container-fostrap">
        <div>
            {{-- <img src="https://4.bp.blogspot.com/-7OHSFmygfYQ/VtLSb1xe8kI/AAAAAAAABjI/FxaRp5xW2JQ/s320/logo.png" class="fostrap-logo"/> --}}
            <h1 class="heading">
                All Clubs
            </h1>
        </div>
        <div class="content">
            <div class="container">
                <div class="row">
                    @foreach ($clubs as $club)

                    <div class="col-xs-12 col-sm-4">
                        <div class="card">
                            <a class="img-card" href="/club/{{$club->club_id}}">
                            <img src="storage/images/club_logo/{{$club -> club_img}}" />
                          </a>
                            <div class="card-content">
                                <h4 class="card-title">
                                    <a href="/club/{{$club->club_id}}"> {{$club -> club_name}}
                                  </a>
                                </h4>
                                <p class="">
                                    {{$club -> about_us}}
                                </p>
                            </div>
                            <div class="card-read-more">
                                <a href="/club/{{$club->club_id}}" class="btn btn-link btn-block">
                                    Read More
                                </a>
                            </div>
                        </div>
                    </div>

                    @endforeach

                </div>
            </div>
        </div>
    </div>
</section>
@endsection
