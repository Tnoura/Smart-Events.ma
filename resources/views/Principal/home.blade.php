@extends('Layouts.master')
@section('content')

<!-- header -->
<div class="th-hero-wrapper hero-2" id="hero">
    <div class="hero-slider-2 th-carousel" data-fade="true" data-slide-show="1" data-md-slide-show="1">
    <!-- slide1 -->
    <div class="th-hero-slide">
    <div class="th-hero-bg" data-bg-src="{{asset('assets/img/hero/hero_bg_1.png')}}"></div>
    <div class="container-fluid">
    <div class="hero-style2">
    <div class="black">
    <span class="hero-subtitle style2 mt-n1" data-ani="slideinleft" data-ani-delay="0.1s">Smart Expos</span>
    <h1 class="hero-title text-white" data-ani="slideinleft" data-ani-delay="0.3s">Votre Exposition Notre Première Mission</h1>
    <div class="btn-group mt-35" data-ani="slideinleft" data-ani-delay="0.9s"><a href="{{route('salons')}}" class="th-btn gold-btn-2">Nos Salons</a>
    <a href="{{route('about')}}" class="th-btn white-btn">Plus d'info</a></div>
    </div>
    </div>
    </div>
    </div>
    <!-- end_slide1 -->
    <!-- slide2 -->
    <div class="th-hero-slide">
    <div class="th-hero-bg" data-bg-src="{{asset('assets/img/hero/hero_bg_2.png')}}"></div>
    <div class="container-fluid">
    <div class="hero-style2">
    <div class="black">
    <span class="hero-subtitle style2 mt-n1" data-ani="slideinleft" data-ani-delay="0.1s">Smart Expos</span>
    <h1 class="hero-title text-white" data-ani="slideinleft" data-ani-delay="0.3s">Votre Exposition Notre Première Mission</h1>
    <div class="btn-group mt-35" data-ani="slideinleft" data-ani-delay="0.9s"><a href="{{route('salons')}}" class="th-btn gold-btn-2">Nos Salons</a> 
    <a href="{{route('about')}}" class="th-btn white-btn">Plus d'info</a></div>
    </div>
    </div>
    </div>
    </div>
    <!-- end_slide2 -->
    <!-- slide3 -->
    <div class="th-hero-slide">
    <div class="th-hero-bg" data-bg-src="{{asset('assets/img/hero/hero_bg_3.png')}}"></div>
    <div class="container-fluid">
    <div class="hero-style2">
    <div class="black">
    <span class="hero-subtitle style2 mt-n1" data-ani="slideinleft" data-ani-delay="0.1s">Smart Expos</span>
    <h1 class="hero-title text-white" data-ani="slideinleft" data-ani-delay="0.3s">Votre Exposition Notre Première Mission</h1>
    <div class="btn-group mt-35" data-ani="slideinleft" data-ani-delay="0.9s"><a href="{{route('salons')}}" class="th-btn gold-btn-2">Nos Salons</a>
    <a href="{{route('about')}}" class="th-btn white-btn">Plus d'info</a></div>
    </div>
    </div>
    </div>
    </div>
    <!-- end_slide3 -->
    <!-- slide4 -->
    <div class="th-hero-slide">
    <div class="th-hero-bg" data-bg-src="{{asset('assets/img/hero/hero_bg_4.png')}}"></div>
    <div class="container-fluid">
    <div class="hero-style2">
    <div class="black">
    <span class="hero-subtitle style2 mt-n1" data-ani="slideinleft" data-ani-delay="0.1s">Smart Expos</span>
    <h1 class="hero-title text-white" data-ani="slideinleft" data-ani-delay="0.3s">Votre Exposition Notre Première Mission</h1>
    <div class="btn-group mt-35" data-ani="slideinleft" data-ani-delay="0.9s"><a href="{{route('salons')}}" class="th-btn gold-btn-2">Nos Salons</a>
    <a href="{{route('about')}}" class="th-btn white-btn">Plus d'info</a></div>
    </div>
    </div>
    </div>
    </div>
    <!-- end_slide4 -->
    <!-- slide5 -->
    <div class="th-hero-slide">
    <div class="th-hero-bg" data-bg-src="{{asset('assets/img/hero/hero_bg_5.png')}}"></div>
    <div class="container-fluid">
    <div class="hero-style2">
    <div class="black">
    <span class="hero-subtitle style2 mt-n1" data-ani="slideinleft" data-ani-delay="0.1s">Smart Expos</span>
    <h1 class="hero-title text-white" data-ani="slideinleft" data-ani-delay="0.3s">Votre Exposition Notre Première Mission</h1>
    <div class="btn-group mt-35" data-ani="slideinleft" data-ani-delay="0.9s"><a href="{{route('salons')}}" class="th-btn gold-btn-2">Nos Salons</a>
    <a href="{{route('about')}}" class="th-btn white-btn">Plus d'info</a></div>
    </div>
    </div>
    </div>
    <!-- end_slide5 -->
    </div>
    </div>
    <!-- end_header -->


    <!-- about us -->
   <div class="overflow-hidden space" id="about-sec">
   <div class="container">
   <div class="row align-items-center">
   <div class="col-xl-6">
   <div class="img-box3">
   <div class="img1"><img src="{{asset('assets/img/normal/about.png')}}" alt="About" id="about_smart"></div>
   </div>
   </div>
   <div class="col-xl-6">
   <div class="title-area mb-30"><span class="sub-title style2">Qui Sommes Nous ?</span>
   <h2 class="sec-title">Smart Expos & Events Morocco</h2>
   </div>
   <p class="sec-desc mt-n2 mb-30">SEEM, 1ère Agence de Conseil en Événementiel 4.0, Communication Digitale & B2B Spécialisée dans l’Industrie. Forte de l’expérience et du dynamisme de son équipe pluridisciplinaire, elle accompagne fidèlement ses clients dans la réalisation de leurs évènements digitaux, présentiels, hybrides. Une autre de ses forces réside dans la recherche constante des nouvelles réalités du marché national et international.</p>
   <div class="about-btn mt-40"><a href="{{route('about')}}" class="th-btn gold-btn">Plus D'info</a></div>
   </div>
   </div>
   </div>
   
    <!-- end_about -->

    <!-- count -->
   <div class="count mt-5" data-pos-for=".dance-sec" data-sec-pos="bottom-half">
   <div class="container z-index-common ">
   <div class="counter-area-two" data-bg-src="{{asset('assets/img/bg/counter_bg_1.png')}}">
   <div class="counter-card style2">
   <h2 class="counter-card_number">+<span class="counter-number">146</span></h2>
   <p class="counter-card_text">Événements</p>
   </div>
   <div class="counter-card style2">
   <h2 class="counter-card_number">+<span class="counter-number">50</span></h2>
   <p class="counter-card_text">organisations</p>
   </div>
   <div class="counter-card style2">
   <h2 class="counter-card_number">+<span class="counter-number">15</span></h2>
   <p class="counter-card_text">Partenaires</p>
   </div>
   <div class="counter-card style2">
   <h2 class="counter-card_number">+<span class="counter-number">560</span></h2>
   <p class="counter-card_text">Clients satisfaits</p>
   </div>
   </div>
   </div>
   </div>
   <div class="shape-mockup movingX d-none d-xxl-block" data-top="0%" data-right="0%"><img src="{{asset('assets/img/shape/shape_1.png')}}" alt="shape"></div>
   </div>
   <!-- end_count -->

   <!-- nos salons -->
   <section class="blog-area-two bg-smoke space mt-5" id="blog-sec" data-bg-src="{{asset('assets/img/bg/blog_1_2.png')}}">
   <div class="container">
   <div class="title-area text-center">
   <span class="sub-title sub-title2 mt-n5">Nos Salons</span>
   <h2 class="sec-title">Actualités récentes</h2>
   </div>
   <div class="row align-items-center">
   <div class="col-md-1" id="twobtn">
   <button class="btn-prev th-btn gold-border-btn mr-2" ><i class="fa fa-chevron-left"></i></button>
   </div>
   <div class="col-md-10">
   <div class="row blog-slide2 slider-shadow th-carousel" id="blogSlide1" data-slide-show="3" data-lg-slide-show="2" data-md-slide-show="2" data-sm-slide-show="1" data-arrows="true">
   @foreach($myposts as $post)
   <div class="col-md-6 col-xl-4">
   <div class="blog-card style2">
   <div class="blog-img"><img src="{{asset('storage/'.$post->image)}}" alt="blog image"></div>
   <div class="blog-meta"><a href="#"><i class="fa-solid fa-tags">Smart Expos</i></a></div>
   <h3 class="blog-title box-title"><a href="#">{{$post->title}}</a>
   </h3><a href="{{ route('post.show', ['slug' => $post->slug]) }}" class="th-btn gold-border-btn">Read More</a>
   </div>
   </div>
   @endforeach
   </div>
   </div>
   <div class="col-md-1" id="twobtn">
   <button class="btn-next th-btn gold-border-btn ml-2"><i class="fa fa-chevron-right"></i></button>
   </div>
   </div>
   </div>
   <div class="class-btn text-center mt-60"><a href="{{route('salons')}}" class="th-btn gold-btn">Voir tous les Salons</a></div>
   </section>
<!-- end salons -->


    <!-- on Propose quoi -->
    <section class="overflow-hidden service-area space " id="service-sec" data-bg-src="{{asset('assets/img/bg/service_bg_1.png')}}">
    <div class="container mt-5">
    <div class="service-wrapper">
    <div class="title-area"><span class="sub-title style1 mt-n1">Smart Expos</span>
    <h2 class="sec-title mb-0 text-white">On Propose Quoi ?</h2>
    </div>
    <div class="service-btn"><a href="{{route('salons')}}" class="th-btn style4">Voir tous les Salons</a></div>
    </div>
    <div class="row gy-4 justify-content-center">
    <div class="col-md-6 col-xl-4">
    <div class="service-box">
    <div class="service-box_inner">
    <div class="service-box_icon"><img src="{{asset('assets/img/icon/service_1_1.png')}}" alt=""></div>
    <div class="service-box_number">01</div>
    </div>
    <div class="service-content">
    <h3 class="service-box_title"><a href="#">Événement corporate</a></h3>
    <p class="service-box_text">Seem élève votre image grâce à des événements corporatifs exceptionnels. Des conférences aux lancements de produits, nous concevons des expériences uniques reflétant votre entreprise</p>
    </div>
    </div>
    </div>
    <div class="col-md-6 col-xl-4">
    <div class="service-box">
    <div class="service-box_inner">
    <div class="service-box_icon"><img src="{{asset('assets/img/icon/service_1_2.png')}}" alt=""></div>
    <div class="service-box_number">02</div>
    </div>
    <div class="service-content">
    <h3 class="service-box_title"><a href="#">B2B internationale</a></h3>
    <p class="service-box_text">Seem connecte votre entreprise au-delà des frontières par le biais de salons et d'expositions spécialisées, nous créons des opportunités stratégiques pour renforcer votre présence mondiale</p>
    </div>
    </div>
    </div>
    <div class="col-md-6 col-xl-4">
    <div class="service-box">
    <div class="service-box_inner">
    <div class="service-box_icon"><img src="{{asset('assets/img/icon/service_1_3.png')}}" alt=""></div>
    <div class="service-box_number">03</div>
    </div>
    <div class="service-content">
    <h3 class="service-box_title"><a href="#">Organisation des salons</a></h3>
    <p class="service-box_text">Notre équipe dévouée assure une planification stratégique, une coordination fluide, une expérience immersive. Avec des stands innovants, chaque événement devient une réussite</p>
    </div>
    </div>
    </div>
    </div>
    </div>
    </section>
    <!-- end_on propose -->

     <!-- partenaire -->
     <section class="blog-area-two mt-5">
    <div class="container mt-5">
    <div class="title-area text-center mt-5">
    <span class="sub-title sub-title2 mt-n1 mt-5">Nous ont fait confiance</span>
    </div>
    <div class="row align-items-center">
    <div class="col-md-1" id="twobtn">
    <button class="btn-prev-partner th-btn gold-border-btn mr-2"><i class="fa fa-chevron-left"></i></button>
    </div>
    <div class="col-md-10">
    <div class="row blog-slide2 slider-shadow th-carousel" id="partenaire" data-slide-show="4" data-lg-slide-show="2" data-md-slide-show="2" data-sm-slide-show="1" data-arrows="true">
    <div class="col-md-6 col-xl-3">
    <img src="{{asset('assets/img/clients1/logo1.png')}}" alt="">
    </div>
    <div class="col-md-6 col-xl-3">
    <img src="{{asset('assets/img/clients1/logo2.png')}}" alt="">
    </div>
    <div class="col-md-6 col-xl-4">
    <img src="{{asset('assets/img/clients1/logo3.png')}}" alt="">
    </div>
    <div class="col-md-6 col-xl-4">
    <img src="{{asset('assets/img/clients1/logo4.png')}}" alt="">
    </div>
    <div class="col-md-6 col-xl-4">
    <img src="{{asset('assets/img/clients1/logo5.png')}}" alt="">
    </div>
    <div class="col-md-6 col-xl-4">
    <img src="{{asset('assets/img/clients1/logo6.png')}}" alt="">
    </div>
    <div class="col-md-6 col-xl-4">
    <img src="{{asset('assets/img/clients1/logo7.png')}}" alt="">
    </div>
    <div class="col-md-6 col-xl-4">
    <img src="{{asset('assets/img/clients1/logo8.png')}}" alt="">
    </div>
    <div class="col-md-6 col-xl-4">
    <img src="{{asset('assets/img/clients1/logo9.png')}}" alt="">
    </div>
    <div class="col-md-6 col-xl-4">
    <img src="{{asset('assets/img/clients1/logo10.png')}}" alt="">
    </div>
    <div class="col-md-6 col-xl-4">
    <img src="{{asset('assets/img/clients1/logo11.png')}}" alt="">
    </div>
    <div class="col-md-6 col-xl-4">
    <img src="{{asset('assets/img/clients1/logo12.png')}}" alt="">
    </div>
    <div class="col-md-6 col-xl-4">
    <img src="{{asset('assets/img/clients1/logo13.png')}}" alt="">
    </div>
    <div class="col-md-6 col-xl-4">
    <img src="{{asset('assets/img/clients1/logo14.png')}}" alt="">
    </div>
    </div>
    </div>
    <div class="col-md-1" id="twobtn">
    <button class="btn-next-partner th-btn gold-border-btn ml-2"><i class="fa fa-chevron-right"></i></button>
    </div>
    </div>
    </div>
    </section>
    <!-- end_partenaire -->

       <!-- Gallery -->
   
   <section class="blog-area-two mt-5">
   <div class="container mt-5">
   <div class="row">
   <div class="event-wrapper">
   <div class="title-area mb-0">
   <h2 class="sub-title style2 mb-0 mt-5">Gallery</h2>
   </div>
   <div class="title-area mb-0" id="twobtn">
   <div class="event-btn mt-5"><a href="{{route('gallery')}}" class="th-btn gold-btn">Voir toutes les images</a></div>
   </div>
   </div>
   <div class="row align-items-center">
   <div class="col-md-1" id="twobtn">
   <button class="btn-prev-gallery th-btn gold-border-btn mr-2"><i class="fa fa-chevron-left"></i></button>
   </div>
   <div class="col-md-10">
   <div class="row blog-slide2 slider-shadow th-carousel" id="gallerySlider" data-slide-show="3" data-lg-slide-show="2" data-md-slide-show="2" data-sm-slide-show="1" data-arrows="true">
   <div class="col-md-6 col-xl-4 mt-5">
   <img src="{{asset('assets/img/normal/img1.png')}}" alt="Smart Expos" />
   </div>
   <div class="col-md-6 col-xl-4 mt-5">
   <img src="{{asset('assets/img/normal/img2.png')}}" alt="Smart Expos" />
   </div>
   <div class="col-md-6 col-xl-4 mt-5">
   <img src="{{asset('assets/img/normal/img3.png')}}" alt="Smart Expos" />
   </div>
   <div class="col-md-6 col-xl-4 mt-5">
   <img src="{{asset('assets/img/normal/img4.png')}}" alt="Smart Expos" />
   </div>
   <div class="col-md-6 col-xl-4 mt-5">
   <img src="{{asset('assets/img/normal/img5.png')}}" alt="Smart Expos" />
   </div>
   <div class="col-md-6 col-xl-4 mt-5">
   <img src="{{asset('assets/img/normal/img6.png')}}" alt="Smart Expos" />
   </div>
   <div class="col-md-6 col-xl-4 mt-5">
   <img src="{{asset('assets/img/normal/img7.png')}}" alt="Smart Expos" />
   </div>
   <div class="col-md-6 col-xl-4 mt-5">
   <img src="{{asset('assets/img/normal/img8.png')}}" alt="Smart Expos" />
   </div>
   <div class="col-md-6 col-xl-4 mt-5">
   <img src="{{asset('assets/img/normal/img9.png')}}" alt="Smart Expos" />
   </div>
   </div>
   </div>
   <div class="col-md-1" id="twobtn">
   <button class="btn-next-gallery th-btn gold-border-btn ml-2" ><i class="fa fa-chevron-right"></i></button>
   </div>
   </div>
   </div>
   </div>
   </section>
   <!--end gallery -->

    <!-- video -->
    <section class="blog-area-two  bg-top-center bg-smoke space mt-5 ">
    <div class="container">
    <div class="title-area text-center"><span class="sec-title TÉMOIGNAGES">TÉMOIGNAGES</span>
    </div>
    <div class="row blog-slide2 m-3" id="partenaire"  data-slide-show="4" data-lg-slide-show="2" data-md-slide-show="2" data-sm-slide-show="1" data-arrows="true">
    <div class="col-md-6 col-xl-3">
    <div class="video-box style-four">
	<video src="{{asset('assets/img/user1.mp4')}}" class="video_youtube"  controls></video>
    <h6 class="text-center">Kévin Gormand</h6>
    <p id="job_title">Chairman mubawab group</p>
	</div>
    </div>
    <div class="col-md-6 col-xl-3">
    <div class="video-box style-four">
	<video src="{{asset('assets/img/user2.mp4')}}" class="video_youtube"  controls></video>
    <h6 class="text-center">Bachir Benslimane </h6>
    <p class="text-center" id="job_title">Ceo & founder afdal</p>
	</div>
    </div>
    <div class="col-md-6 col-xl-3">
    <div class="video-box style-four">
	<video src="{{asset('assets/img/user3.mp4')}}" class="video_youtube"  controls></video>
    <h6 class="text-center">M.Wael Ghoussein</h6>
    <p class="text-center" id="job_title">Directeur général de taqeef media</p>
	</div>      
    </div>
    <div class="col-md-6 col-xl-3">
    <div class="video-box style-four">
	<video src="{{asset('assets/img/user4.mp4')}}" class="video_youtube"  controls></video>
    <h6 class="text-center">Maldi Sakande</h6>
    <p class="job_title4" id="job_title">General Manager and Founding Member of New Cold System srl</p>
	</div>    
    </div>
    </div>
    </div>     
    </div>
    </section>
    <!-- end_video -->
@endsection