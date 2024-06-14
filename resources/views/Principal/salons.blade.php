   @extends('Layouts.master')
   
   @section('title')
   {{setting('salons.title')}}
   @endsection

   @section('content')

    <!-- Header Salons -->
    <div class="breadcumb-wrapper" data-bg-src="{{asset('assets/img/hero/hero_bg_4.png')}}">
    <div class="container">
    <div class="breadcumb-content">
    <h1 class="breadcumb-title">Nos Salons</h1>
    </div>
    </div>
    </div>
    <!--End Header Salons -->

     <!-- All The Salons -->
     <section class="blog-area-two bg-smoke space mt-5" id="blog-sec" data-bg-src="{{asset('assets/img/bg/blog_1_2.png')}}">
    <div class="container">
    <div class="title-area text-center">
    <span class="sub-title sub-title2 mt-n1">Nos Manifestations</span>
    </div>
    <div class="row">
    @foreach($myposts as $post)
    <div class="col-md-4 mb-3">
    <div class="blog-card style2">
    <div class="blog-img">
    <img src="{{ asset('storage/'.$post->image) }}" alt="blog image">
    </div>
    <div class="blog-meta">
    <a href="#"><i class="fa-solid fa-tags">Smart Expos</i></a>
    </div>
    <h3 class="blog-title box-title">
    <a href="{{ route('post.show', ['slug' => $post->slug]) }}"
    data-seo-title="{{ $post->seo_title }}"
    data-meta-description="{{ $post->meta_description }}"
    data-meta-keywords="{{ $post->meta_keywords }}"
    class="post-link">
    {{ $post->title }}
    </a>
    </h3>
    <a href="{{ route('post.show', ['slug' => $post->slug]) }}" class="th-btn gold-border-btn ">Read More</a>
    </div>
    </div>
     @endforeach
    </div>
    </div>
    </div>
    </div>
    </div>
    </section>
    <!-- End The Salons -->

   @endsection