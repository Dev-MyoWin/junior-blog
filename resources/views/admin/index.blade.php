@extends('layouts.app')
@section('content')
@if(Auth::user()->role->name=="Admin")
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Latest Categories</div>

                    <div class="card-body">
                        <table class="table table-bordered mb-0">
                            <thead>
                            <tr>
                                <th scope="col" width="60">#</th>
                                <th scope="col" width="60">Name</th>
                                <th scope="col" width="200">Created By</th>
                            </tr>
                            </thead>

                            <tbody>
                            @foreach($categories as $category)
                                <tr>
                                    <td>{{ $category->id }}</td>
                                    <td>{{ $category->name }}</td>
                                    <td>{{ $category->user->name }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="card mt-4">
                    <div class="card-header">Latest Post</div>

                    <div class="card-body">
                        <table class="table table-bordered mb-0">
                            <thead>
                            <tr>
                                <th scope="col" width="60">#</th>
                                <th scope="col" width="60">Title</th>
                                <th scope="col" width="200">Created By</th>
                            </tr>
                            </thead>

                            <tbody>
                            @foreach($posts as $post)
                                <tr>
                                    <td>{{ $post->id }}</td>
                                    <td>{{ $post->title }}</td>
                                    <td>{{ $post->user->name }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

                
            </div>
        </div>
    </div>

@else

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Home </title>
  
<link rel="stylesheet" href="{{asset('welcome/wel.css')}}">

</head>
<body>
  
  

<!-- Starbackground -->
<div id='stars'></div>
<div id='stars2'></div>
<div id='stars3'></div>

<!-- parallax text/java -->
<div id="parallax">
  <div class="layer" data-depth="0.6">
  
<!-- text -->
    <div class="some-space">
      <h1>Welcome</h1>
    </div>
  
  </div>
  <div class="layer" data-depth="0.4">
    <div id="{{asset('welcome/wel.js/particles-js')}}"></div>
  </div>

<!-- Button -->
  <div class="layer" data-depth="0.3">
    <div class="some-more-space1">
    <a href="{{route('index')}}" target="blank" style="text-decoration:none">Continue to website</a></div>
  </div>
</div>
</body>
</html>
@endif
   
@endsection




