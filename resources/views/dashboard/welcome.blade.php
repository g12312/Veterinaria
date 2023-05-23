@extends('layout.admin')
@section('content')

    <!-- ***** Main Banner Area Start ***** -->
    <div class="main-banner header-text" id="top">
        <div class="Modern-Slider">
            <!-- Item -->
            <div class="item">
                <div class="img-fill">
                    <img src="{{asset('images/1.jpg')}}" alt="" width="100" heigth="100">
                    <div class="text-content">
                        <h1>Bienvenido</h1>
                        <h5>{{$nombre}}</h5>
                        <a href="acerca" class="main-stroked-button">Leer mas</a>
                        <a href="/admin/citas" class="main-filled-button">Agendar Cita</a>
                    </div>
                </div>
            </div>
            <!-- // Item -->
            <!-- Item -->
            <div class="item">
                <div class="img-fill">
                    <img src="{{asset('images/2.jpg')}}" alt="" width="100" heigth="100">
                    <div class="text-content">
                        <h1>Bienvenido</h1>
                        <h5>{{$nombre}}</h5>
                        <a href="acerca" class="main-stroked-button">Leer Mas</a>
                        <a href="/admin/citas" class="main-filled-button">AGENDAR CITAS</a>
                    </div>
                </div>
            </div>
            <!-- // Item -->
            <!-- Item -->
            <div class="item">
                <div class="img-fill">
                    <img src="{{asset('images/3.jpg')}}" alt="" width="100" heigth="100">
                    <div class="text-content">
                        <h1>Bienvenido</h1>
                        <h5>{{$nombre}}</h5>
                        <a href="acerca" class="main-stroked-button">Leer Mas</a>
                        <a href="admin/citas" class="main-filled-button">Agendar cita</a>
                    </div>
                </div>
            </div>
            <!-- // Item -->
        </div>
    </div>
    <div class="scroll-down scroll-to-section"><a href="#about"><i class="fa fa-arrow-down"></i></a></div>
   <!-- ***** Main Banner Area End ***** -->

<!-- ***** About Area Starts ***** -->
<section class="section" id="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-xs-12">
                <div class="left-text-content">
                    <div class="section-heading">
                        <h4>Servicios</h4>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="service-item">
                                <img src="{{asset('images/service-item-01.png')}}" alt="">
                                <h4>Veterinaria</h4>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="service-item">
                                <img src="{{asset('images/service-item-01.png')}}" alt="">
                                <h4>Estetica</h4>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="service-item">
                                <img src="{{asset('images/contact-info-03.png')}}" alt="">
                                <h4>Guarderia</h4>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="service-item">
                                <img src="{{asset('images/contact-info-03.png')}}" alt="">
                                <h4>Consultas</h4>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <a href="acerca" class="main-button-icon">
                                Leer Mas <i class="fa fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-xs-12">
                <div class="right-text-content">
                    <p>Nuestro equipo de expertos veterinarios en El Cachorro está altamente capacitado <br> y cuenta con años de experiencia en el cuidado de animales. Nos apasiona trabajar con mascotas 
                        y nos mantenemos actualizados en los últimos avances y técnicas<br> en medicina veterinaria para proporcionarles el mejor cuidado posible.Nuestras 
                        instalaciones en El Cachorro están diseñadas para crear un ambiente <br>cálido y acogedor tanto para las mascotas como para sus dueños. Nos esforzamos 
                        por mantener un entorno limpio y seguro, utilizando equipos y tecnología de última <br>generación para realizar diagnósticos precisos y tratamientos 
                        efectivos. </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ***** Features Big Item Start ***** -->
<section class="section" id="subscribe">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="section-heading">
                    <h2>Somos la mejor opcion para tu mascota, Su salud es nuestra prioridad</h2>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Features Big Item End ***** -->


<!-- ***** Projects Area Starts ***** -->
<section class="section" id="projects">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="section-heading">
        
                    <h6>Todo tipo de Raza o tamaño</h6>
                </div>
                <div class="filters">
                    <ul>
                        <li class="active" data-filter="*">All</li>
                        <li data-filter=".des">Perros</li>
                        <li data-filter=".dev">Gatos</li>
                        <li data-filter=".gra">Hamsters</li>
                        <li data-filter=".tsh"></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="filters-content">
                    <div class="row grid">
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 all des">
                            <div class="item">
                                <a href="{{asset('images/4.jpg') }}" data-lightbox="image-1" data-title="Our Projects"><img src="{{asset('images/4.jpg')}}" alt=""></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 all dev">
                            <div class="item">
                                <a href="{{asset('images/5.jpg') }}" data-lightbox="image-1" data-title="Our Projects"><img src="{{asset('images/5.jpg')}}" alt=""></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 all gra">
                            <div class="item">
                                <a href="{{asset('images/6.jpg')}}" data-lightbox="image-1" data-title="Our Projects"><img src="{{asset('images/6.jpg')}}" alt=""></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 all tsh">
                            <div class="item">
                                <a href="{{asset('images/7.jpg') }}" data-lightbox="image-1" data-title="Our Projects"><img src="{{asset('images/8.jpg')}}" alt=""></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 all dev">
                            <div class="item">
                                <a href="{{asset('images/8.jpg') }}" data-lightbox="image-1" data-title="Our Projects"><img src="assets/images/8.png" alt=""></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 all des">
                            <div class="item">
                                <a href="{{asset('images/project-big-item-06.jpg') }}" data-lightbox="image-1" data-title="Our Projects"><img src="assets/images/project-item-06.jpg" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Projects Area Ends ***** -->

<!-- ***** Testimonials Starts ***** -->
<section class="section" id="testimonials">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading">
                    <h2>Expertos en el campo</h2>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 mobile-bottom-fix-big" data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                <div class="owl-carousel owl-theme">
                    <div class="item author-item">
                        <div class="member-thumb">
                            <img src="{{asset('images/veterinario1.jpg') }}" alt="" width="100" heigth="100">
                            <div class="hover-effect">
                                <div class="hover-content">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="#"><i class="fa fa-rss"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <h4>.White Cheese</h4>
                        <span>Veterinario</span>
                    </div>
                    <div class="item author-item">
                        <div class="member-thumb">
                            <img src="{{asset('images/estilista1.jpg') }}" alt="" width="100" heigth="100">
                            <div class="hover-effect">
                                <div class="hover-content">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="#"><i class="fa fa-rss"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <h4>SNOW MARY</h4>
                        <span>Estilista</span>
                    </div>
                    <div class="item author-item">
                        <div class="member-thumb">
                            <img src="{{asset('images/veterinaria2.jpg') }}" alt="" width="100" heigth="100">
                            <div class="hover-effect">
                                <div class="hover-content">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="#"><i class="fa fa-rss"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <h4>Johnny Egg</h4>
                        <span>Veterinario</span>
                    </div>
                    

                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Testimonials Ends ***** -->

<!-- ***** Contact Us Area Starts ***** -->
<section class="section" id="contact-us">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-xs-12">
                <div class="left-text-content">
                    <div class="section-heading">
                        <h6>Contact Us</h6>
                        <h2>Feel free to keep in touch with us!</h2>
                    </div>
                    <ul class="contact-info">
                        <li><img src="{{asset('images/contact-info-01.png')}}assets/" alt="">010-020-0860</li>
                        <li><img src="{{asset('images/contact-info-02.png') }}" alt="">info@company.com</li>
                        <li><img src="{{asset('images/contact-info-03.png') }}" alt="">www.company.com</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-8 col-md-8 col-xs-12">
                <div class="contact-form">
                    <form id="contact" action="" method="get">
                        <div class="row">
                            <div class="col-md-6 col-sm-12">
                                <fieldset>
                                    <input name="name" type="text" id="name" placeholder="Your Name *" required="">
                                </fieldset>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <fieldset>
                                    <input name="phone" type="text" id="phone" placeholder="Your Phone" required="">
                                </fieldset>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <fieldset>
                                    <input name="email" type="email" id="email" placeholder="Your Email *" required="">
                                </fieldset>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <fieldset>
                                    <input name="subject" type="text" id="subject" placeholder="Subject">
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <textarea name="message" rows="6" id="message" placeholder="Message" required=""></textarea>
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <button type="submit" id="form-submit" class="main-button-icon">Send Message Now <i class="fa fa-arrow-right"></i></button>
                                </fieldset>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Contact Us Area Ends ***** -->
@endsection

