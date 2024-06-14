@extends('Layouts.master')

    @section('title')
    {{setting('contact.title')}}
    @endsection

    @section('content')

    <!-- The Info Smart Expos -->
    <div class="space">
    <div class="container">
    <div class="row gy-4 justify-content-center">
    <div class="col-md-6 col-lg-4">
    <div class="contact-info text-center">
    <div class="contact-info_icon"><i class="fa-sharp fa-solid fa-location-dot"></i></div>
    <div class="media-body">
    <h4 class="contact-info_title">Notre Addresse</h4><span class="contact-info_text">Etage 1 Apt 3, 9 Rue Abou Maâchar,Casablanca</span>
    </div>
    </div>
    </div>
    <div class="col-md-6 col-lg-4">
    <div class="contact-info text-center">
    <div class="contact-info_icon"><i class="fa-solid fa-phone"></i></div>
    <div class="media-body">
    <h4 class="contact-info_title">applez-nous à tout moment</h4><span class="contact-info_text"><a href="contact@smart-events.ma">contact@smart-events.ma</a>+(212) 06 60 00 50 65</span>
    </div>
    </div>
    </div>
    <div class="col-md-6 col-lg-4">
    <div class="contact-info text-center">
    <div class="contact-info_icon"><i class="fa-solid fa-clock"></i></div>
    <div class="media-body">
    <h4 class="contact-info_title">temps de travail</h4><span class="contact-info_text">9:00am - 6:00pm ( Lundi - vendredi ) samedi & dimanche jour off</span>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    <!-- End The Info Smart Expos -->

    <div class="space-bottom overflow-hidden" id="contact-sec">
    <div class="container">
    <div class="row">
    <!-- Map -->
    <div class="col-lg-6">
    <div class="map-sec" id="mapsplace"><a href="https://maps.app.goo.gl/DZn2wnK8d73h8i127"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3324.352718820441!2d-7.620667325987255!3d33.5701901430331!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xda7d3d9e297fb8d%3A0x541056a548bddea5!2sSmart%20Expos%20%26%20Events%20Morocco!5e0!3m2!1sen!2sma!4v1717291750109!5m2!1sen!2sma" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></a></div>
    </div>
    <!-- End Map -->
    <!-- Form Contact -->
    <div class="col-lg-6">
    <div class="title-area mt-n1 mb-35"><span class="sub-title style1">Contactez-Nous</span>
    <h2 class="sec-title">Parlons à un expert</h2>     
    </div>
    <form action="{{route('store')}}" method="POST" class="contact-us-form ajax-contact">
	@csrf
    <div class="row">
    <div class="form-group col-md-6">
	<input type="text" class="form-control" name="name" id="name" placeholder="Votre Nom et Prénom"> <i class="fal fa-user"></i></div>
    <div class="form-group col-md-6"><input type="email" class="form-control" name="email" id="email" placeholder="Votre Email"> <i class="fal fa-envelope"></i></div>
    <div class="form-group col-12"><input type="tel" class="form-control" name="number" id="number" placeholder="numéro de téléphone"> <i class="fa-regular fa-phone-flip"></i>
    </div>
    <div class="form-group col-12"><textarea name="message" id="message" cols="30" rows="3" class="form-control" placeholder="votre Message"></textarea> <i class="fal fa-comment"></i></div>
    <div class="contact-form-btn col-12"><button type="submit" class="th-btn">envoyer un Message</button></div>
    </div>    
    </form>
    </div>
    </div>
    </div>
    <div class="shape-mockup jump d-none d-xl-block" data-top="-45%" data-right="0%"><img src="{{asset('assets/img/shape/contact_shape.svg')}}" alt=""></div>
    </div>
    <!-- End Form Contact -->
    @endsection

  