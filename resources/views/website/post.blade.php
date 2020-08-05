
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
  <link href="{{asset('website/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

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
            <a class="nav-link js-scroll active" href="/#home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="/#blog">Blog</a>
          </li>
   
          <li class="nav-item">
            <a class="nav-link js-scroll" href="/#contact">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  
  <!--/ Nav End /-->
  
  <!--/ Intro Skew Star /-->
  <div id="home" class="intro route bg-image" style="background-image: url({{asset('website/img/intro-bg.jpg')}});width:100%;height:30rem">
    <div class="overlay-itro"></div>
    <div class="intro-content display-table">
      <div class="table-cell">
        <div class="container">
          <!--<p class="display-6 color-d">Hello, world!</p>-->
          <h1 class="intro-title mb-4">Personal Blog</h1>
          <p class="intro-subtitle"><span class="text-slider-items">Junior Web Developer,Web
              FreeLancer</span><strong class="text-slider"></strong></p>
          <!-- <p class="pt-3"><a class="btn btn-primary btn js-scroll px-4" href="#about" role="button">Learn More</a></p> -->
        </div>
      </div>
    </div>
  </div>
  <!--/ Intro Skew End /-->



  <!--/ Section Blog-Single Star /-->
  <section class="blog-wrapper sect-pt4">
    <div class="container">
      <div class="row">

        <div class="col-md-12">
          <div class="post-box">
            <div class="post-meta">
              <h1 class="article-title">{{$post->title}}</h1>
            </div>
            <div class="article-content">
               {!!$post->content!!}
               @if($post->code != NULL)
                 <pre class="prettyprint">
                    <code>
                    {!!$post->code!!}
                    </code>
                </pre>
               @endif
          </div>
        </div>

        @foreach($post->comments as $comment)
            <div class="box-comments">
              <ul class="list-comments">
                <li>
                  <div class="comment-avatar">
                    <img src="{{asset('website/img/propic.jpg')}}" alt="">
                  </div>
                  <div class="comment-details">
                    <h4 class="comment-author">{{$comment->name}}</h4>
                    <span>{{date('M d,Y',strtotime($post->created_at))}}</span>
                    <p class="text-primary mt-2">
                     {{$comment->description}}
                    </p>
                  </div>
                </li>
              </ul>
            </div>
            @endforeach
           
           
         
       
          <div class="form-comments">
            <div class="title-box-2">
              <h3 class="title-left">
                Leave a Reply
              </h3>
            </div>
            <form class="form-mf" action="{{route('store')}}" method="POST">
              @csrf
              <input type="hidden" name="slug" value="{{$post->slug}}">
              <input type="hidden" name="id" value="{{$post->id}}">

              <div class="row">
              <div class="col-md-12 mb-3">
                  <div class="form-group">
                    <input type="text" name='name'class="form-control input-mf" id="inputName" placeholder="Name *" required>
                  </div>
                </div>
                <div class="col-md-12 mb-3">
                  <div class="form-group">
                    <input type="email" name='email'class="form-control input-mf" id="inputEmail1" placeholder="Email *" required>
                  </div>
                </div>
                <div class="col-md-12 mb-3">
                  <div class="form-group">
                    <textarea id="textMessage" name='description'class="form-control input-mf" placeholder="Comment *" name="message"
                      cols="45" rows="8" required></textarea>
                  </div>
                </div>
                <div class="col-md-12">
                  <button type="submit" class="button button-a button-big button-rouded">Send Message</button>
                </div>
              </div>
            </form>
          </div>
        </div>
        
      </div>
    </div>
  </section>
  <!--/ Section Blog-Single End /-->

  





<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <div id="preloader"></div>

  <!-- JavaScript Libraries -->
  <script src="{{asset('website/lib/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('website/lib/jquery/jquery-migrate.min.js')}}"></script>
  <script src="{{asset('website/lib/popper/popper.min.js')}}"></script>
  <script src="{{asset('website/lib/bootstrap/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('website/lib/easing/easing.min.js')}}"></script>
  <script src="{{asset('website/lib/counterup/jquery.waypoints.min.js')}}"></script>
  <script src="{{asset('website/lib/counterup/jquery.counterup.js')}}"></script>
  <script src="{{asset('website/lib/owlcarousel/owl.carousel.min.js')}}"></script>
  <script src="{{asset('website/lib/lightbox/js/lightbox.min.js')}}"></script>
  <script src="{{asset('website/lib/typed/typed.min.js')}}"></script>
  <!-- Contact Form JavaScript File -->
  <script src="{{asset('website/contactform/contactform.js')}}"></script>

  <!-- Template Main Javascript File -->
  <script src="{{asset('website/js/main.js')}}"></script>
  

  <link rel="stylesheet"
      href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.18.1/styles/default.min.css">
<script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.18.1/highlight.min.js"></script>
<script>hljs.initHighlightingOnLoad();</script>
</body>

</html>