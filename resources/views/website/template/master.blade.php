<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Blog</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="{{asset('website/img/favicon.png')}}" rel="icon">

  <!-- Bootstrap CSS File -->
  <link href="{{asset('website/lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="{{asset('website/lib/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
  <link href="{{asset('website/lib/animate/animate.min.css')}}" rel="stylesheet">
  <link href="{{asset('website/lib/ionicons/css/ionicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('website/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
  <link href="{{asset('website/lib/lightbox/css/lightbox.min.css')}}" rel="stylesheet">
  
  <!-- Main Stylesheet File -->
  <link href="{{asset('website/css/style.css')}}" rel="stylesheet">


</head>

<body id="page-top">

  <!--/ Nav Star /-->
  <nav class="navbar navbar-b navbar-trans navbar-expand-md fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll" href="#page-top">Myo Win</a>
      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault"
        aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <div class="navbar-collapse collapse justify-content-end" id="navbarDefault">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link js-scroll active" href="#home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="#blog">Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="#contact">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link class="button button-big button-rouded" data-toggle="modal" data-target="#staticBackdrop">Subscribe</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  
  <!--/ Nav End /-->


  <!-- modal class data-toggle="modal" data-target="#staticBackdrop" -->
  <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Please subscribe </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
             </div>
              <div class="modal-body">

                <form action="{{url('subscribers')}}" method="POST">
                    @csrf
                    <div class="form-group">
                      <label for="formGroupExampleInput">Name</label>
                        <input type="text" class="form-control" id="formGroupExampleInput" name="name"placeholder="Enter your name">
                      </div>
                     <div class="form-group">
                       <label for="formGroupExampleInput2">Email</label>
                       <input type="text" class="form-control" id="formGroupExampleInput2" name="email" placeholder="Enter your email address">
                     </div>
                      <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                          <button type="submit" class="btn btn-primary">Subscribe</button>
                    </div>
                 </form> 

        </div>                           
      </div>
    </div>
  </div>
  
  <!--/ Intro Skew Star /-->
  <div id="home" class="intro route bg-image" style="background-image: url({{asset('website/img/intro-bg.jpg')}});width:100%;height:30rem">
    <div class="overlay-itro"></div>
    <div class="intro-content display-table">
      <div class="table-cell">
        <div class="container">
          <!--<p class="display-6 color-d">Hello, world!</p>-->
          <h1 class="intro-title mb-4">Junior Blog</h1>
          <p class="intro-subtitle"><span class="text-slider-items">Junior Web Developer,Web
              FreeLancer</span><strong class="text-slider"></strong></p>
          <!-- <p class="pt-3"><a class="btn btn-primary btn js-scroll px-4" href="#about" role="button">Learn More</a></p> -->
        </div>
      </div>
    </div>
  </div>
  <!--/ Intro Skew End /-->

  

  @yield('content')
 



  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <div id="preloader"></div>

  <!-- JavaScript Libraries -->
  <script src="{{asset('website/lib/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('website/lib/jquery/jquery-migrate.min.js')}}"></script>
  <script src="{{asset('website/lib/bootstrap/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('website/lib/easing/easing.min.js')}}"></script>
  <script src="{{asset('website/lib/counterup/jquery.waypoints.min.js')}}"></script>
  <script src="{{asset('website/lib/counterup/jquery.counterup.js')}}"></script>
  <script src="{{asset('website/lib/owlcarousel/owl.carousel.min.js')}}"></script>
  <script src="{{asset('website/lib/typed/typed.min.js')}}"></script>
  <!-- Contact Form JavaScript File -->
  <script src="{{asset('website/contactform/contactform.js')}}"></script>

  <!-- Template Main Javascript File -->
  <script src="{{asset('website/js/main.js')}}"></script>

</body>

</html>