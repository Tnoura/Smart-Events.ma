    @extends('Layouts.master')

    @section('title')
    {{setting('about.title')}}
    @endsection

    @section('content')
    <!-- Header About -->
    <div class="breadcumb-wrapper" data-bg-src="{{asset('assets/img/hero/hero_bg_2.png')}}"> 
    <div class="container">
    <div class="breadcumb-content">
    <h1 class="breadcumb-title">ABOUT US</h1>
    </div>
    </div>
    </div>
    <!-- End Header About -->

    <!-- Section About Us -->
    <section class="th-blog-wrapper blog-details space-top space-extra-bottom">
    <div class="container">
    <div class="row">
    <div class="col-xxl-8 col-lg-7">
    <div class="th-blog blog-single">
    <div class="blog-img"><img src="{{asset('assets/img/bg/about.png')}}" alt=""></div>
    <div class="blog-content">
    <h2 class="blog-title mt-3">Qui sommes nous</h2>
    <p>Smart-Expos and Events Morocco, notre identité réside dans notre engagement sans failles
     envers l’excellence et l’innovation. Fondée sur des principes solides en 2020. Notre société
     leader dans l'organisation d'expositions qui se consacre à la création d'événements
     dynamiques et attrayants qui rassemblent les professionnels de l'industrie, les innovateurs et
     les enthousiastes du monde entier. Nous sommes une équipe dynamique de professionnels
     qui se consacrent à la création d'expériences événementielles inoubliables. Forts de notre
     expertise en matière d'organisation d'événements, de logistique, de marketing et de design,
     nous sommes spécialisés dans l'organisation d'expositions, des forums, des conférences et
     de la Communication Digitale & B2B Spécialisée dans l’Industrie, qui captivent le public et
     amplifient la présence de la marque. Nous nous engageons à atteindre l'excellence et à
     dépasser les attentes. Nous sommes SMART-EXPOS, là où les visions deviennent des
     expositions extraordinaires.
     Chez Smart-Expos, nous croyons en repousser les limites, en anticipant les tendances
     futures et en offrant des solutions sur mesure qui dépassent les attentes de nos clients.
     Notre approche holistique intègre une compréhension approfondie des besoins de nos
     partenaires, combinée à une créativité sans bornes. Que ce soit la conception immersive
     d’expositions, la planification méticuleuse de salons, la coordination fluide de foires
     majeures, ou la maîtrise de la communication digitale, chaque facet de notre entreprise
     reflète notre engagement à offrir une excellence opérationnelle.
     Au cœur de notre succès réside une capacité à rester à la pointe de la technologie. La
     communication digitale est notre terrain de jeu, où nous naviguons avec agilité à travers les
     dernières tendances numériques pour assurer une visibilité maximale à nos clients. Notre
     équipe de spécialistes en marketing digital excelle dans la création de campagnes 
     percutantes, exploitant les plateformes les plus avancées pour propulser nos événements à
     un niveau supérieur.

    <div class="row gy-4">
    <div class="col-md-6">
    <div class="blog-img"><video src="{{asset('assets/img/taha-youtube.mp4')}}" class="video_youtube"  controls></video></div>
    </div>
    <div class="col-md-6">
    <div class="blog-img"><video src="{{asset('assets/img/taha-youtube2.mp4')}}" class="video_youtube"  controls></video></div>
    </div>
    </div>
    </div>
    <div class="share-links clearfix">
    <div class="row justify-content-between">
    <div class="col-sm-auto">
    <div class="tagcloud"></div>
    </div>
    <div class="col-sm-auto text-xl-end">   
    </div>
    </div>
    </div>
    </div>
    </div>
    <!-- End Section About Us -->
    <!-- Nos Valeurs -->
    <div class="col-xxl-4 col-lg-5">
    <aside class="sidebar-area">
    <div class="widget">
    <h3 class="widget_title">Nos Valeurs<span class="shape"></span></h3>
    <div class="recent-post-wrap">
    <div class="recent-post">
    <div class="media-img"><a href="#"><img src="{{asset('assets/img/bg/letter-s-1.png')}}" alt=""></a></div>
    <div class="media-body">
    <h4 class="post-title"><a class="text-inherit" href="#">Pour SMART :Le plus intelligemment possible</a></h4>
    <div class="recent-post-meta"></div>
    </div>
    </div>
    <div class="recent-post">
    <div class="media-img"><a href="#l"><img src="{{asset('assets/img/bg/letter-e-1.png')}}" alt=""></a></div>
    <div class="media-body">
    <h4 class="post-title"><a class="text-inherit" href="#">Pour Engagement : S’engager, c’est faire preuve d’implication et de détermination.</a></h4>
    <div class="recent-post-meta"></div>
    </div>
    </div>
    <div class="recent-post">
    <div class="media-img"><a href="#"><img src="{{asset('assets/img/bg/letter-e-1.png')}}" alt=""></a></div>
    <div class="media-body">
    <h4 class="post-title"><a class="text-inherit" href="#">Pour Excellence :Viser l’excellence en toute circonstance.</a></h4>
    <div class="recent-post-meta"></div>
    </div>
    </div>
    <div class="recent-post">
    <div class="media-img"><a href="#"><img src="{{asset('assets/img/bg/letter-m-1.png')}}" alt=""></a></div>
    <div class="media-body">
    <h4 class="post-title"><a class="text-inherit" href="#">Pour Mindful :La performance de notre service est essentielle pour nous</a></h4>
    <div class="recent-post-meta"></div>
    </div>
    </div>
    </div>
    </div>
    <!-- End Nos Valeurs -->
    <div class="widget widget_offer" data-bg-src="{{asset('assets/img/bg/service_bg_1.png')}}">
    <div class="offer-banner text-center">
    <h5 class="banner-title text-white"><mark>Have Any Questions?</mark></h5>
    <a href="#" class="th-btn red-btn">Contact Us</a>
    </div>
    </div>
    </aside>
    </div>
    </div>
    </div>
    </section>

    @endsection