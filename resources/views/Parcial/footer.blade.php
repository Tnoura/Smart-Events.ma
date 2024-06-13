<footer class="footer-wrapper footer-layout2" data-bg-src="{{asset('assets/img/bg/footer_bg_1.png')}}">
    <div class="container">
    <div class="footer-top">
    <div class="row gx-0 align-items-center">
    <div class="col-xl-auto">
    <div class="footer-logo"><a href="#"><img src="{{asset('assets/img/logo-8.png')}}" width="350px" height="100px" alt="Smart_Expo"></a></div>
    </div>
    <div class="col-xl">
    <div class="footer-newsletter">
    <h3 class="h4 newsletter-title">Newsletter</h3>
    <form method="POST" action="" class="newsletter-form">
    @csrf
    <input type="email" class="form-control style2"  placeholder="Enter your email" name="email_newsletter" required>
    <button type="submit" class="th-btn gold-btn-2">S'abonner</button>
    </form>
    </div>
    </div>
    </div>
    </div>
    </div>
    <hr class="style1">
    <div class="widget-area">
    <div class="container">
    <div class="row justify-content-between">
    <div class="col-md-6 col-xl-4">
    <div class="widget footer-widget">
    <h3 class="widget_title">à propos de notre société</h3>
    <div class="th-widget-about">
    <p class="about-text">Smart-Expos, où les visions deviennent des expositions extraordinaires</p>
    <div class="th-social-wrapper">
    <div class="office-hour">
    <h4 class="title">les horaires:</h4><span class="desc">Lundi - vendredi 9:00 AM - 18:00 PM</span>
    </div>
    <div class="th-social">
    <h6 class="social-title">Follow Us:</h6> <a href="https://www.linkedin.com/smartExpos"><i class="fab fa-linkedin-in"></i></a> 
    </div>
    </div>
    </div>
    </div>
    </div>
    <div class="col-md-6 col-xl-auto">
    <div class="widget widget_nav_menu footer-widget">
    <h3 class="widget_title"> Links</h3>
    <div class="menu-all-pages-container">
    <ul class="menu">
    <li><a href="{{route('home')}}">Accueil</a></li>
    <li><a href="{{ route('about') }}">About Us</a></li>
    <li><a href="{{ route('salons') }}">Nos Salons</a></li>
    <li><a href="{{ route('gallery') }}">Gallery</a></li>
    <li><a href="{{ route('contact') }}">Contact Us</a></li>
    </ul>
    </div>
    </div>
    </div>
    <div class="col-md-6 col-xl-auto">
    <div class="widget footer-widget">
    <h3 class="widget_title">contactez-nous maintenemt</h3>
    <div class="th-widget-contact">
    <div class="info-box">
    <div class="info-box_icon"><i class="fa-sharp fa-solid fa-location-dot"></i></div>
    <p class="info-box_text">Bd Anoual  09, Rue Abou Maachar, Appt 5, 1er étage Quartier, Casablanca</p>
    </div>
    <div class="info-box">
    <div class="info-box_icon"><i class="fa-solid fa-phone"></i></div>
    <p class="info-box_text"><a href=" +(212) 06 60 00 50 65" class="info-box_link"> +(212) 06 60 00 50 56 </a></p>
    </div>
    <div class="info-box">
    <div class="info-box_icon"><i class="fa-solid fa-envelope"></i></div>
    <p class="info-box_text"><a href="contact@smart-events.ma" class="info-box_link">contact@smart-events.ma</a></p>
    </div>
    <div class="info-box">
    <div class="info-box_icon"><i class="fa-solid fa-envelope"></i></div>
    <p class="info-box_text"><a href="t.chokry@smart-events.ma" class="info-box_link">t.chokry@smart-events.ma</a></p>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    <div class="copyright-wrap">
    <div class="container">
    <div class="row align-items-center">
    <div class="col-lg-6">
    <p class="copyright-text">Copyright <i class="fal fa-copyright"></i> 2023 By <a href="{{route('about')}}">Smart Expos</a>. All Rights Reserved.</p>
    </div>
    <div class="col-lg-6">
    <div class="footer-copyright-right style2">
    <ul>
    <li><a href="#">Terms of use</a></li>
    <li><a href="#">Privacy Policy</a></li>
    </ul>
    </div>
    </div>
    </div>
    </div>
    </div>
    </footer>
    <div class="scroll-top style2"><svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
    <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;">
    </path>
    </svg></div>