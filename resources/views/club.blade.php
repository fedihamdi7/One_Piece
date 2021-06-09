<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet" />
  <link rel="icon" href="../storage/images/club_logo/{{$infos->first()->club_img}}">

  <title>{{$infos->first()->club_name}}</title>

  <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
  <script src="{{ asset('js/app.js') }}" defer></script>
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">

  <script src="{{ asset('js/club.js') }}" defer></script>
  <link href="{{ asset('css/club.css') }}" rel="stylesheet">



  <style>
    .menu {
      background-color: {{$infos->first()->club_theme}};
    }

    .wrapper .card {
      background-color: {{$infos->first()->club_theme}};
    }

    .my-services .container .row img{
      height: 327px;
    width: 365px;
        }

        /* .my-services .container .owl-stage {
        display: flex;
    column-gap: 6%;
    }
    .owl-stage-outer .owl-stage .owl-item{
      margin-right: 20px !important;
    } */
  </style>
</head>

<body>
  <div id="page-wraper">
    <!-- Sidebar Menu -->
    <div class="responsive-nav">
      <i class="fa fa-bars" id="menu-toggle"></i>
      <div id="menu" class="menu">
        <i class="fa fa-times" id="menu-close"></i>
        <div class="container">
          <div class="image">
            <a href="#"><img src="../storage/images/club_logo/{{$infos->first()->club_img}}" alt="" /></a>
          </div>
          <div class="author-content">
            <h4>{{$infos->first()->club_name}}</h4>
            <span>{{$infos->first()->nom_department}}</span>
          </div>
          <nav class="main-nav" role="navigation">
            <ul class="main-menu">
              <li><a href="#section1">About Us</a></li>
              <li><a href="#section2">Events</a></li>
              <li><a href="#section3">Team</a></li>
              <li><a href="#section4">Join Us</a></li>
            </ul>
          </nav>
          <div class="social-network">
            <ul class="soial-icons">
              <li data-bs-toggle="tooltip" data-bs-placement="top" title="Home">
                <a href="{{ route ('home')}}"><i class="fas fa-home"></i></a>
              </li>
              <li data-bs-toggle="tooltip" data-bs-placement="top" title="Clubs">
                <a href=" {{ route ('clubs.show')}} "><i class="fab fa-cuttlefish"></i></a>
              </li>
              @if ($type == 'admin')
              <li data-bs-toggle="tooltip" data-bs-placement="top" title="Dashboard">
                <a href=" {{ route ('admin.dashboard')}} "><i class="fas fa-user-shield"></i></a>
              </li>
              @endif
              @if ($type == 'responsable')
              <li data-bs-toggle="tooltip" data-bs-placement="top" title="Dashboard">
                <a href=" {{ route ('responsable.dashboard')}} "><i class="fas fa-user-shield"></i></a>
              </li>
              @endif
              {{-- <li data-bs-toggle="tooltip" data-bs-placement="top" title="Facebook">
                <a href="#"><i class="fa fa-facebook"></i></a>
              </li> --}}

              <li data-bs-toggle="tooltip" data-bs-placement="left" title="Log Out">
                <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                       <i class="fas fa-sign-out-alt"></i></a>
              </li>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>

            </ul>
          </div>
          <div class="copyright-text">
            <p>CLUBIX <i class="fas fa-copyright    "></i>
            </p>
          </div>
        </div>
      </div>
    </div>

    <section class="section about-me" data-section="section1" id="section1">
      <div class="container">
        <div class="section-heading">
          <h2>About US</h2>
          <div class="line-dec"></div>
          <span>{{$infos->first()->about_us}} </span>
        </div>
        <div class="left-image-post">
          <div class="row">
            <div class="col-md-6">
              <div class="left-image">
                <img src="../storage/images/club_post/{{$infos->first()->post_image}}" alt="" style="width: 377.75px;height: 277.69px;" />
              </div>
            </div>
            <div class="col-md-6">
              <div class="right-text">
                <h4>News</h4>
                <p>
                    {{$infos->first()->post_description}}                </p>
                <!-- <div class="white-button">
                    <a href="#">Read More</a>
                  </div> -->
              </div>
            </div>
          </div>
        </div>

      </div>
    </section>

    <section class="section my-services" data-section="section2" id="section2">
      <div class="container">
        <div class="section-heading">
          <h2>Events</h2>
          <div class="line-dec"></div>
          <span>{{$infos->first()->event_description}}</span>
        </div>


        {{-- <div class="row">
          <div class="isotope-wrapper">
                    <div class="owl-carousel owl-theme">
                        @foreach ($infos as $info)
                        <div class="item"><img src="../storage/events/{{$info -> img}}" alt=""></div>
                        @endforeach


                    </div>
          </div>
        </div> --}}


        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">

            <ol class="carousel-indicators">
             @foreach( $events as $event )
                <li data-target="#carouselExampleIndicators" data-slide-to="{{ $loop->index }}" class="{{ $loop->first ? 'active' : '' }}"></li>
             @endforeach
            </ol>

            <div class="carousel-inner" role="listbox">
              @foreach( $events as $event )
                 <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                     <img class="d-block img-fluid" src="../storage/images/events/{{ $event->event_image }}" alt="">
                        <div class="carousel-caption d-none d-md-block">
                           {{-- <h3>{{ $event->date }}</h3> --}}
                           {{-- <p>{{ $event->descriptoin }}</p> --}}
                        </div>
                 </div>
              @endforeach
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>

        {{-- <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
            @foreach ($events as $event)
                <div class="carousel-item active">
                  <img src="../storage/images/events/{{$event->img}}" class="d-block w-100" alt="...">
                </div>
            @endforeach
            </div>

            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>

        </div> --}}


    </section>



    <section class="section my-work" data-section="section3" id="section3">
      <div class="container">
        <div class="section-heading">
          <h2>TEAM</h2>
          <div class="line-dec"></div>
          <span>Meet the Team.</span>
        </div>



        <?php $imgcount = 1; ?>

        @foreach ($teams as $team)
        @if ($imgcount ==1)
        <div class="cardss">

            <div class="wrapper">
                <div class="card front-face">
                  <img src="../storage/images/club_team_image/{{$team -> team_img}}" />
                </div>
                <div class="card back-face">
                  <img src="../storage/images/club_team_image/{{$team -> team_img}}" />
                  <div class="info">
                    <div class="title">{{$team -> team_name}}</div>
                    <p>{{$team -> team_titre}} </p>
                  </div>
                  <ul>
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-youtube"></i></a>
                  </ul>
                </div>
              </div>
              <?php $imgcount++; ?>
        @elseif ($imgcount ==2)

            <div class="wrapper">
                <div class="card front-face">
                  <img src="../storage/images/club_team_image/{{$team -> team_img}}" />
                </div>
                <div class="card back-face">
                  <img src="../storage/images/club_team_image/{{$team -> team_img}}" />
                  <div class="info">
                    <div class="title">{{$team -> team_name}}</div>
                    <p>{{$team -> team_titre}} </p>
                  </div>
                  <ul>
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-youtube"></i></a>
                  </ul>
                </div>
              </div>
        </div>
        <?php $imgcount = 1; ?>
        @endif
                @endforeach

            </div>




    </section>

    <section class="section contact-me" data-section="section4" id="section4">
      <div class="container">
        <div class="section-heading">
          <h2>Join Us</h2>
          <div class="line-dec"></div>
          <span>We have the honor to welcome our new members. Feel free to join Us</span>
        </div>
        <div class="row">
          <div class="right-content">
            <div class="container">
              <form id="contact" action="" method="post">
                <div class="row">
                  <div class="col-md-6">
                    <fieldset>
                      <input name="name" type="text" class="form-control" id="name" placeholder="Your name..." required="" />
                    </fieldset>
                  </div>
                  <div class="col-md-6">
                    <fieldset>
                      <input name="email" type="text" class="form-control" id="email" placeholder="Your email..." required="" />
                    </fieldset>
                  </div>
                  <div class="col-md-12">
                    <fieldset>
                      <select class="form-select" aria-label="Default select example">
                        <option value="1">Informatique</option>
                        <option value="2">Gestion</option>
                        <option value="3">Mecanique</option>
                        <option value="4">Electrique</option>
                        <option value="5">Genie de Procede</option>
                      </select>
                    </fieldset>
                  </div>
                  <div class="col-md-12">
                    <fieldset>
                      <textarea name="message" rows="6" class="form-control" id="message" placeholder="Tell us a little bit about yourself.." required=""></textarea>
                    </fieldset>
                  </div>
                  <div class="col-md-12">
                    <fieldset>
                      <button type="submit" id="form-submit" class="button">
                        Send Message
                      </button>
                    </fieldset>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>

  </div>
  <script src="js/jquery.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>

  <script>
    $('.owl-carousel').owlCarousel({
        loop:true,
        smartSpeed: 1500,
        animateIn: 'linear',
        animateOut: 'linear',
        margin:20,
        autoWidth:true,
        items:3,
        dots:false,
        autoplay:true,
        autoplayHoverPause:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:5
            }
        }
    })
    </script>
      <script>
        $(".main-menu li:first").addClass("active");

        var showSection = function showSection(section, isAnimate) {
          var direction = section.replace(/#/, ""),
            reqSection = $(".section").filter(
              '[data-section="' + direction + '"]'
            ),
            reqSectionPos = reqSection.offset().top - 0;

          if (isAnimate) {
            $("body, html").animate({
                scrollTop: reqSectionPos,
              },
              100
            );
          } else {
            $("body, html").scrollTop(reqSectionPos);
          }
        };

        var checkSection = function checkSection() {
          $(".section").each(function() {
            var $this = $(this),
              topEdge = $this.offset().top - 80,
              bottomEdge = topEdge + $this.height(),
              wScroll = $(window).scrollTop();
            if (topEdge < wScroll && bottomEdge > wScroll) {
              var currentId = $this.data("section"),
                reqLink = $("a").filter("[href*=\\#" + currentId + "]");
              reqLink
                .closest("li")
                .addClass("active")
                .siblings()
                .removeClass("active");
            }
          });
        };

        $(".main-menu").on("click", "a", function(e) {
          e.preventDefault();
          showSection($(this).attr("href"), true);
        });

        $(window).scroll(function() {
          checkSection();
        });
      </script>


</body>

</html>
