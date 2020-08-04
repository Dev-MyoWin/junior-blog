@extends('website.template.master')
@section('content')


                
 <!--/ Section Portfolio Star /-->
 <section id="blog" class="portfolio-mf sect-pt4 route">
    <div class="container">
      <div class="row">
       <div class="col-sm-12">  
        @if(Session::has('message'))
                    <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                        {{ Session('message') }}
                    </div>
                @endif   
    
          <div class="title-box text-center">
            <h3 class="title-a">
             let dig it
            </h3>
            <p class="subtitle-a">
             I know how to copy but I don't know where it can be paste
            </p>
            @foreach($categories as $category)
            <a href="{{ url('category/' . $category->slug) }}"class="btn btn-primary mt-2">{{$category->name}}</a>
            @endforeach
          </div>
        </div>

        <section class="blog-mf sect-pt4 route">
          <div class="container">
            <div class="row">
              
            </div>
          </div>
        </section><!-- End Blog Section -->



      </div>
      <div class="row">
      @foreach($posts as $post)
        <div class="col-md-4">
          <div class="work-box" style="height:350px">
            <a href="{{url('post/'. $post->slug)}}">
              <div class="work-img">
                <img src="{{asset('galleries/'.$post->image_url)}}" alt="" class="img-fluid">
              </div>
              <div class="work-content">
                <div class="row">
                  <div class="col-sm-12">
                    <h2 class="w-title">
                    {{ \Illuminate\Support\Str::limit($post->sub_title, 50, $end='...') }}

                    </h2>
                    <div class="w-more">
                     <span class="w-ctegory">{{$post->user->name}}</span> / <span class="w-date">{{date('M d,Y',strtotime($post->created_at))}}</span>
                    </div>
                  </div>
                  
                </div>
              </div>
            </a>
          </div>
        </div>
 
      @endforeach
      <div class="col-md-12">
  {{$posts->links()}}
 </div>
      </div>
    </div>
  </section>
  <!--/ Section Portfolio End /-->
                                

   <!--/ Section Contact-Footer Star /-->
   <section class="paralax-mf footer-paralax bg-image sect-mt4 route">
    <div class="overlay-mf"></div>
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="contact-mf">
            <div id="contact" class="box-shadow-full">
              <div class="row">
                <div class="col-md-6">
                  <div class="title-box-2">
                    <h5 class="title-left">
                      Send Message
                    </h5>
                  </div>
                  <div>
                      <form action="{{url('contact')}}" method="post" role="form">
                        @csrf
                      
                      <div class="row">
                      <div class="col-md-12 mb-3">
                            <div class="form-group">
                              <input type="text" name="name" class="form-control @if($errors->has('name')) has-error @endif" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                              <div> 
                                @if ($errors->has('name'))
                                <span class="help-block text-danger">{!! $errors->first('name') !!}</span>
                                @endif
                              </div>
                            </div>
                          </div>
                          <div class="col-md-12 mb-3">
                            <div class="form-group">
                              <input type="email" class="form-control @if($errors->has('email')) has-error @endif" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                              <div>
                              @if ($errors->has('email'))
                                <span class="help-block text-danger">{!! $errors->first('email') !!}</span>
                                @endif
                              </div>
                            </div>
                          </div>
                        <div class="col-md-12 mb-3">
                          <div class="form-group">
                            <textarea class="form-control @if($errors->has('message')) has-error @endif" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                            <div>
                            @if ($errors->has('message'))
                                <span class="help-block text-danger">{!! $errors->first('message') !!}</span>
                              @endif
                            </div>
                          </div>
                        </div>
                        <div class="col-md-12">
                            <button type="submit" class="button button-a button-big button-rouded" >Send Message</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="title-box-2 pt-4 pt-md-0">
                    <h5 class="title-left">
                      Contact
                    </h5>
                  </div>
                  <div class="more-info">
                    <p class="lead">
                     You can contact or advise me about my blog anything.
                     Thank you.
                    </p>
                    <ul class="list-ico">
                    <li><span class="ion-ios-person"></span> Myo Win</li>
                      <li><span class="ion-ios-location"></span> Yangon , Kamaryut Township , Ruby Street</li>
                      <li><span class="ion-ios-telephone"></span> (09) 692585078</li>
                      <li><span class="ion-email"></span> dev.myowin.mm@gmail.com</li>
                    </ul>
                  </div>
                  <div class="socials">
                    <ul>
                      <li><a href=""><span class="ico-circle"><i class="ion-social-facebook"></i></span></a></li>
                      <li><a href=""><span class="ico-circle"><i class="ion-social-instagram"></i></span></a></li>
                      <li><a href=""><span class="ico-circle"><i class="ion-social-twitter"></i></span></a></li>
                      <li><a href=""><span class="ico-circle"><i class="ion-social-pinterest"></i></span></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <footer>
     
    </footer>
  </section>
  <!--/ Section Contact-footer End /-->

@endsection()

