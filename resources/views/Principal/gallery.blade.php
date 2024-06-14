@extends('Layouts.master')

    @section('title')
    {{setting('gallery.title')}}
    @endsection

    @section('content')

   <!-- Header Gallery -->
   <div class="breadcumb-wrapper"  data-bg-src="{{asset('assets/img/hero/hero_bg_3.png')}}">
   <div class="container">
   <div class="breadcumb-content">
   <h1 class="breadcumb-title">Gallery</h1>
   </div>
   </div>
   </div>
   <!-- End Header Gallery -->
   <!-- The Images -->
   <div class="container">
   <div class="overflow-hidden space space">
   <div class="container" >
   <div class="row mt-5">
   <div class=" col-lg-4 col-md-6 mb-5" >
   <div class="news-block_six-inner">
   <div class="news-block_six-image">
   <img src="{{asset('assets/img/normal/img1.png')}}" alt="Smart Expos" />
   </div>
   </div>
   </div>
   <div class=" col-lg-4 col-md-6 mb-5" >
   <div class="news-block_six-inner">
   <div class="news-block_six-image">
   <img src="{{asset('assets/img/normal/img2.png')}}" alt="Smart Expos" />
   </div>
   </div>
   </div>
   <div class=" col-lg-4 col-md-6 mb-5" >
   <div class="news-block_six-inner">
   <div class="news-block_six-image">
   <img src="{{asset('assets/img/normal/img3.png')}}" alt="Smart Expos" />
   </div>
   </div>
   </div>
   <div class=" col-lg-4 col-md-6 mb-5" >
   <div class="news-block_six-inner">
   <div class="news-block_six-image">
   <img src="{{asset('assets/img/normal/img4.png')}}" alt="Smart Expos" />
   </div>
   </div>
   </div>
   <div class=" col-lg-4 col-md-6 mb-5" >
   <div class="news-block_six-inner">
   <div class="news-block_six-image">
   <img src="{{asset('assets/img/normal/img5.png')}}" alt="Smart Expos" />
   </div>
   </div>
   </div>
   <div class=" col-lg-4 col-md-6 mb-5" >
   <div class="news-block_six-inner">
   <div class="news-block_six-image">
   <img src="{{asset('assets/img/normal/img6.png')}}" alt="Smart Expos" />
   </div>
   </div>
   </div>
   <div class=" col-lg-4 col-md-6 mb-5" >
   <div class="news-block_six-inner">
   <div class="news-block_six-image">
   <img src="{{asset('assets/img/normal/img7.png')}}" alt="Smart Expos" />
   </div>
   </div>
   </div>
   <div class=" col-lg-4 col-md-6 mb-5" >
   <div class="news-block_six-inner">
   <div class="news-block_six-image">
   <img src="{{asset('assets/img/normal/img8.png')}}" alt="Smart Expos" />
   </div>
   </div>
   </div>
   <div class=" col-lg-4 col-md-6 mb-5" >
   <div class="news-block_six-inner">
   <div class="news-block_six-image">
   <img src="{{asset('assets/img/normal/img9.png')}}" alt="Smart Expos" />
   </div>
   </div>
   </div>
   </div>
   </div>
   </div>
   </div>
   <!--End The Images -->
   @endsection
