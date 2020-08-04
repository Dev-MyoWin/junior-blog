@extends('website.template.master')
@section('content')
 <!--/ Section Portfolio Star /-->
 <section id="blog" class="portfolio-mf sect-pt4 route">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="title-box text-center">
            <h3 class="title-a">
             {{$category->name}}
            </h3>
            <p class="subtitle-a">
              Lorem ipsum, dolor sit amet consectetur adipisicing elit.
            </p>
            <a href="{{route('index')}}" class="btn btn-primary">All Items</a>
            
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
          <div class="work-box" style="height:370px">
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

@endsection()