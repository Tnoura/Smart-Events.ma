    @extends('Layouts.master')

    @section('title')
    {{setting('show.title')}}
    @endsection
    
    @section('content')

    <section class="th-blog-list space-top space-extra-bottom">
    <div class="container">
    <div class="row">
    <div class="col-xl-12">
    <!-- Previous Icon Link -->
    <div class="prev-icon">
    <a href="{{ route('salons') }}" class="th-btn gold-btn-2">
    <i class="fas fa-arrow-left"></i> Back to Nos Salon
    </a>
    </div>
    <div class="th-blog blog-list-single hth-post-thumbnail mt-5">
    <div class="blog-img"><a href="#"><img src="{{ asset('storage/'.$post->image1) }}"  id="images" alt="{{$post->title}}" id="ImageShow"  alt=""><br><br>
    <img src="{{ asset('storage/'.$post->image2) }}" id="images" alt="{{$post->title}}" id="ImageShow"  alt="">
    <br><br>
    <img src="{{ asset('storage/'.$post->image3) }}" id="images" alt="{{$post->title}}"
    id="ImageShow"  alt="">
    </a></div>
    <div class="blog-content border p-3" >
    <h2 class="blog-title"><a href="#">
    {{$post->title}}</a>
    </h2> 
    <p class="blog-text"><p class="blog-text">{!! $post->body !!}</p>
    </div>
    </div>
    </div>
    </section>
         

@endsection
