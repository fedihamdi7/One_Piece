<html lang="en">

<head>
  <!-- meta -->
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Clubix</title>
  <meta content="" name="keywords">
  <meta content="" name="description">
    <link rel="icon" href="icon.png">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,500i,600,600i,700,700i|Playfair+Display:400,400i,700,700i,900,900i" rel="stylesheet">

  <!-- Bootstrap CSS File -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/welcome.css') }}" rel="stylesheet">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <style>
       /* nav .fa-bars{
        top: -19px;
    position: fixed;
       } */
     </style>

</head>

<body>




<!-- End section navbar -->


  <nav>
    <div class="logo">Clubix</div>
    <label for="btn" class="icon">
      <span class="fa fa-bars"></span>
    </label>
    <input type="checkbox" id="btn" style="display: none;">
    <ul>
      {{-- <li><a href="#">Home</a></li> --}}
      <li><a href="clubs">Clubs</a></li>
      @if ($type == 'admin')
      <li><a href="admin">Dashboard</a></li>
      @endif
      @if ($type == 'responsable')
      <li><a href="responsable">Dashboard</a></li>
      @endif
      {{-- <li ><a href="#" class="modal-btn">Sign Up / Sign in</a></li> --}}

      <li data-bs-toggle="tooltip" data-bs-placement="left" title="Log Out">
        <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                               Logout</a>
      </li>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </ul>
  </nav>



<!-- start section header -->
<div id="header" class="home" style="background-image:url(../storage/images/home-bg.jpg)">

<div class="container">
 <div class="header-content">
   <h1 style="color: #1d2434;">All<span class="typed"></span></h1>
   <p style="color: #1d2434;">Find all the associations in a second</p>


 </div>
</div>
</div>
<!-- End section header -->
<br>
<br>
<br>
<!-- About Start -->
<div class="about">
<div class="container">
 {{-- $row3 = mysqli_fetch_assoc($sql3);  --}}
 <div class="row align-items-center">
     <div class="col-lg-5 col-md-6">
         <div class="about-img">
            <img src="../storage/images/club.jpg" alt="Image">
         </div>
     </div>
     <div class="col-lg-7 col-md-6">
         <div class="section-header text-left">

             <h2>Learn About Us</h2>
         </div>
         <div class="about-text">
             <p>
              Welcome to clubix. A website for all students that are a part of  iset bizerte where you can find all the clubs and learn about them and there events .This website does not only give you an opportunity to develop yourself in all aspects but it also help you to be more active and assure you a better experience at college. So Join us to be a part of our family
             </p>

         </div>
     </div>
 </div>
</div>
<br>
<!-- About End -->


<!-- start section portfolio -->
<div id="portfolio" class="text-center paddsection">

<div class="container">
<div class="section-header text-left">
<h2 > Up Coming Events</h2>
</div>
</div>

<div class="container">
<div class="row">
<div class="col-md-12">

 <div class="portfolio-list">

   <ul class="nav list-unstyled" id="portfolio-flters">
     <li class="filter filter-active" data-filter=".all">all</li>
     <li class="filter" data-filter=".Informatique">Informatique</li>
     <li class="filter" data-filter=".Electrique">Electrique</li>
     <li class="filter" data-filter=".Mecanique">Mecanique</li>
     <li class="filter" data-filter=".Economie">Economie</li>
     <li class="filter" data-filter=".Genie Procedes">Genie Procedes</li>
   </ul>


 </div>

 <div class="portfolio-container">
    @foreach ($events as $event)
        <div class="col-lg-4 col-md-6 portfolio-thumbnail all branding uikits {{$event -> nom_department}} " >
          <a class="popup-img" href="images/events/{{$event -> event_image}}" >
            <img src="../storage/images/events/{{ $event -> event_image }}" alt="img" >
            <p> {{$event -> event_date}} </p>

          </a>
        </div>
    </body>
</html>
    @endforeach

 </div>
</div>
</div>
</div>
</div>
<!-- End section portfolio -->
<br>
<!-- Counter -->
<div class="fh5co-counter counters" style="background-color:#1d2434 ;" ">
<div class="counter-inner site-container">
 <div class="single-count">
   <span class="count" data-count="{{$CountClubs}}">0</span>
   <div class="single-count__text">

          <i class="fas fa-hand-holding-heart w3-margin-bottom w3-jumbo fa-4x"></i>


     <p style="font-size: large;color: white;font-weight: bold;"> Clubs</p>
   </div>
 </div>
 <div class="single-count">
   <span class="count" data-count="{{$CountUsers}}">0</span>
   <div class="single-count__text">


     <i class="fas fa-users w3-margin-bottom w3-jumbo fa-4x"></i>
     <p style="font-size: large;color: white;font-weight: bold;">Members</p>
   </div>
 </div>
 <div class="single-count">
   <span class="count" data-count="{{$CountEvents}}">0</span>
   <div class="single-count__text">

     <i class="far fa-calendar-alt w3-margin-bottom w3-jumbo fa-4x"></i>
     <p style="font-size: large;color: white;font-weight: bold;">Events</p>
   </div>
 </div>
 <div class="single-count">
   <span class="count" data-count="10">0</span>
   <div class="single-count__text">

     <i class="fas fa-trophy w3-margin-bottom w3-jumbo fa-4x"></i>
     <p style="font-size: large;color: white;font-weight: bold;">Awards</p>
   </div>
 </div>

</div>
<br>
<br>    <br>
   <div class="custom-shape-divider-bottom-1617306237">
       <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
           <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
       </svg>

   </div>

</div>
<!-- Counter -->
<div class="blog">
<div class="container">
   <div class="section-header text-center">
       <p></p>
       <h2>Clubs</h2>
   </div>
   <div class="owl-carousel blog-carousel">

    @foreach ($clubs as $club)

       <div class="blog-item">
           <div class="blog-img">
           <img src="../storage/images/club_logo/{{$club->club_img}}" alt="Blog">
           </div>
           <div class="blog-meta">
           </div>
           <div class="blog-text">
             <h2>{{ $club->club_name }}</h2>
             <p> {{ $club->about_us }}</p>
               <a class="btn" style="background: #f0f0f1" href="club/{{ $club -> id}}">Read More <i class="fa fa-angle-right"></i></a>
           </div>
       </div>
    @endforeach


   </div>
</div>
</div>
<!-- Blog End -->
<!-- Footer Start -->
<div style="background-color:#1d2434 ;">
<div class="custom-shape-divider-top-1617272353">
   <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
       <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
   </svg>
</div>
<div class="footer" >
   <div class="container">
       <div class="row">
           <div class="col-lg-7">
               <div class="row">
                   <div class="col-md-6">
                       <div class="footer-contact">
                           <h2>ISET Bizerte</h2>
                           <p><i class="fa fa-map-marker-alt"></i>Bizerte , ISET Bizerte</p>
                           <p><i class="fa fa-phone-alt"></i>+012 345 67890</p>
                           <p><i class="fa fa-envelope"></i>IsetBizerte@gmail.com</p>
                           <div class="footer-social">
                               <a href=""><i class="fab fa-twitter"></i></a>
                               <a href=""><i class="fab fa-facebook-f"></i></a>
                               <a href=""><i class="fab fa-youtube"></i></a>
                               <a href=""><i class="fab fa-instagram"></i></a>
                               <a href=""><i class="fab fa-linkedin-in"></i></a>
                           </div>
                       </div>
                   </div>
                   <div class="col-md-6">
                       <div class="footer-link">
                           <h2>Quick Links</h2>
                           <a href="">Terms of use</a>
                           <a href="">Privacy policy</a>
                           <a href="">Cookies</a>
                           <a href="">Help</a>
                           <a href="">FQAs</a>
                       </div>
                   </div>
               </div>
           </div>
           <div class="col-lg-5">
               <div class="footer-newsletter">
                   <h2>LOCATION</h2>

                   <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12706.149096377616!2d9.8857319!3d37.2349582!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xa4da7162624c5788!2sInstitute%20of%20Technological%20Studies%20of%20Bizerte!5e0!3m2!1sen!2stn!4v1617871001141!5m2!1sen!2stn" width="534" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                  </div>
           </div>
       </div>
   </div>
</div>
</div>
<!-- Footer End -->

<script src="{{ asset('js/welcome.js') }}" defer></script>
 <!-- Contact Javascript File -->
 <script>
    $('.icon').click(function(){
      $('span').toggleClass("cancel");
    });
  </script>
</body>
</html>
