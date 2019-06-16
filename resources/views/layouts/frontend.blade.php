<!DOCTYPE html>
<html lang="en">
    @include('layouts.heads')
    <body>
        <header id="masthead" class="site-header fix-header header-3">
            <div class="top-header">
                <div class="container">
                    <div class="row">
                        <div class="top-left">
                            <ul>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-phone"></i>
                                        +62274 889767
                                    </a>
                                </li>
                                <li>
                                    <a href="mailto:info@mianticipada.com.ar">
                                        <i class="fa fa-envelope-o"></i>
                                        info@mianticipada.com.ar
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="top-right">
                            <ul>
                                <li>
                                    <a href="#">Entrar</a>
                                </li>
                                <li>
                                    <a href="#">Registrarme</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main-header">
                <div class="container">
                    <div class="row">
                        <div class="site-branding col-md-3">
                            <h1 class="site-title">
                                <a href="#home" title="mianticipada" rel="home"><img src="{{ asset('images/logo.png') }}" width="100" height="100" alt="logo"></a>
                            </h1>
                        </div>

                        <div class="col-md-9">
                            <nav id="site-navigation" class="navbar">
                                <div class="navbar-header">
                                    <div class="mobile-cart" ><a href="#">0</a></div>
                                    <button type="button" class="navbar-toggle offcanvas-toggle pull-right" data-toggle="offcanvas" data-target="#js-bootstrap-offcanvas">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>
                                <div class="navbar-offcanvas navbar-offcanvas-touch navbar-offcanvas-right" id="js-bootstrap-offcanvas">
                                    <button type="button" class="offcanvas-toggle closecanvas" data-toggle="offcanvas" data-target="#js-bootstrap-offcanvas">
                                       <i class="fa fa-times fa-2x" aria-hidden="true"></i>
                                    </button>

                                    <ul class="nav navbar-nav navbar-right">
                                        <li class="active"><a href="full-event-schedule.html">Eventos</a></li>
                                        <li><a href="artist-page.html">Recitales</a></li>
                                        <li><a href="upcoming-events.html">Workshops</a></li>
                                        <li><a href="upcoming-events.html">Ver todos</a></li>
                                      <li class="cart"><a href="#">0</a></li>
                                    </ul>
                              </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <section class="hero-3">
            <div class="container">
                <div class="row">
                    <div class="hero-content">
                        <div class="hero-date">
                            <span class="day">20</span>
                            <span class="month">Julio</span>
                        </div>
                        <h1 class="hero-title">Las pastillas del abuelo</h1>
                        <p class="hero-caption"></p>
                        <div class="hero-location">
                            <p><i class="fa fa-map-marker" aria-hidden="true"></i> Santa Fé 4389, Bs As, Capital (Groove Music)</p>
                        </div>
                        <div class="hero-purchase-ticket">
                            <span>120 tickets quedan!</span>
                            <a href="#">COMPRAR</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-upcoming-events">
            <div class="container">
                <div class="row">
                    <div class="section-header">
                        <h2>Próximos Eventos</h2>
                        <p>Ahora comprar las anticipadas es muy fácil, simplemente seleccioná tu evento favorito, compra la cantidad de entradas que quieras, pagá con tarjeta, débito y/o por rapipago, o como necesites pagarlo, imprimí tu entrada y/o llevate tu celular y tu DNI, listo. Planificá tu diversión por adelantado y pagá menos.</p>
                        <a href="#">Ver todos los Eventos</a>
                    </div>
                    <div class="section-content">
                        <ul class="clearfix">
                            <li>
                                <div class="date">
                                    <a href="#">
                                        <span class="day">25</span>
                                        <span class="month">August</span>
                                        <span class="year">2016</span>
                                    </a>
                                </div>
                                <a href="#">
                                    <img src="{{ asset('images/upcoming-event-1.jpg') }}" alt="image">
                                </a>
                                <div class="info">
                                    <p>BMW Open Championship <span>Buenos Aires, Capital</span></p>
                                    <a href="#" class="get-ticket">COMPRAR</a>
                                </div>
                            </li>
                            <li>
                                <div class="date">
                                    <a href="#">
                                        <span class="day">26</span>
                                        <span class="month">August</span>
                                        <span class="year">2016</span>
                                    </a>
                                </div>
                                <a href="#">
                                    <img src="{{ asset('images/upcoming-event-2.jpg') }}" alt="image">
                                </a>
                                <div class="info">
                                    <p>Kiai Kanjeng Orchestra <span>Buenos Aires, Capital</span></p>
                                    <a href="#" class="get-ticket">COMPRAR</a>
                                </div>
                            </li>
                            <li>
                                <div class="date">
                                    <a href="#">
                                        <span class="day">27</span>
                                        <span class="month">August</span>
                                        <span class="year">2016</span>
                                    </a>
                                </div>
                                <a href="#">
                                    <img src="{{ asset('images/upcoming-event-3.jpg') }}" alt="image">
                                </a>
                                <div class="info">
                                    <p>Envato Author SF Meetup <span>Buenos Aires, Capital</span></p>
                                    <a href="#" class="get-ticket">COMPRAR</a>
                                </div>
                            </li>
                        </ul>
                        <div class="spacer-35"></div>
                        <ul class="clearfix">
                            <li>
                                <div class="date">
                                    <a href="#">
                                        <span class="day">25</span>
                                        <span class="month">August</span>
                                        <span class="year">2016</span>
                                    </a>
                                </div>
                                <a href="#">
                                    <img src="{{ asset('images/upcoming-event-1.jpg') }}" alt="image">
                                </a>
                                <div class="info">
                                    <p>BMW Open Championship <span>Buenos Aires, Capital</span></p>
                                    <a href="#" class="get-ticket">COMPRAR</a>
                                </div>
                            </li>
                            <li>
                                <div class="date">
                                    <a href="#">
                                        <span class="day">26</span>
                                        <span class="month">August</span>
                                        <span class="year">2016</span>
                                    </a>
                                </div>
                                <a href="#">
                                    <img src="{{ asset('images/upcoming-event-2.jpg') }}" alt="image">
                                </a>
                                <div class="info">
                                    <p>Kiai Kanjeng Orchestra <span>Buenos Aires, Capital</span></p>
                                    <a href="#" class="get-ticket">COMPRAR</a>
                                </div>
                            </li>
                            <li>
                                <div class="date">
                                    <a href="#">
                                        <span class="day">27</span>
                                        <span class="month">August</span>
                                        <span class="year">2016</span>
                                    </a>
                                </div>
                                <a href="#">
                                    <img src="{{ asset('images/upcoming-event-3.jpg') }}" alt="image">
                                </a>
                                <div class="info">
                                    <p>Envato Author SF Meetup <span>Buenos Aires, Capital</span></p>
                                    <a href="#" class="get-ticket">COMPRAR</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="spacer-35"></div>
        </section>

        <section class="section-video-parallax">
            <div class="container">
                <div class="section-content">
                    <h2>Planificá tu diversión</h2>
                    <p>Sacá facilmente tu entrada y la de tus amigxs, y dedicate a disfrutar tu fin de semana!</p>
                    <a href="#"><img src="{{ asset('images/play-btn.png') }}" alt="image"></a>
                </div>
            </div>
        </section>

        <section class="section-event-category">
            <div class="spacer-35"></div>
            <div class="container">
                <div class="row">
                    <div class="section-header">
                        <h2>Por categoría</h2>
                    </div>
                    <div class="section-content">
                        <ul class="row clearfix">
                            <li class="category-1 col-sm-4">
                                <img src="{{ asset('images/event-category-1.jpg') }}" alt="image">
                                <a href="#"><span>recitales</span></a>
                            </li>
                            <li class="category-2 col-sm-4">
                                <img src="{{ asset('images/event-category-2.jpg') }}" alt="image">
                                <a href="#"><span>De Samba</span></a>
                            </li>
                            <li class="category-3 col-sm-4">
                                <img src="{{ asset('images/event-category-3.jpg') }}" alt="image">
                                <a href="#"><span>Workshops</span></a>
                            </li>
                            <li class="category-4 col-sm-4">
                                <img src="{{ asset('images/event-category-4.jpg') }}" alt="image">
                                <a href="#"><span>Fiestas</span></a>
                            </li>
                            <li class="category-5 col-sm-4">
                                <img src="{{ asset('images/event-category-5.jpg') }}" alt="image">
                                <a href="#"><span>Eventos</span></a>
                            </li>
                            <li class="category-6 col-sm-4">
                                <img src="{{ asset('images/event-category-6.jpg') }}" alt="image">
                                <a href="#"><span>Rock</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-call-to-action">
            <div class="container">
                <div class="row">
                    <div class="section-content">
                        <ul class="row clearfix">
                            <li class="col-sm-12 col-md-9">
                                <h3>Espacio de publicidad</h3>
                                <p>Este espacio está disponible para que publiques.</p>
                            </li>
                            <li class="col-sm-12 col-md-3">
                                <a href="#" class="action-btn">Ver más!</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-sponsors">
            <div class="container">
                <div class="section-content">
                    <ul class="row">
                        <li class="col-sm-3">
                            <a href="#">
                                <img src="{{ asset('images/sponsor-1.png') }}" alt="image">
                            </a>
                        </li>
                        <li class="col-sm-3">
                            <a href="#">
                                <img src="{{ asset('images/sponsor-2.png') }}" alt="image">
                            </a>
                        </li>
                        <li class="col-sm-3">
                            <a href="#">
                                <img src="{{ asset('images/sponsor-3.png') }}" alt="image">
                            </a>
                        </li>
                        <li class="col-sm-3">
                            <a href="#">
                                <img src="{{ asset('images/sponsor-4.png') }}" alt="image">
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </section>

        <section class="section-newsletter">
            <div class="container">
                <div class="section-content">
                    <h2>Estate atento a promociones y enterate tus próximos recitales</h2>
                    <p>
                        Dejanos tu email y te vamos a estar enviandos las nuevas promociones, <br>
                        y te vas a poder enterar cuando toque tu artista favorito.
                    </p>
                    <div class="newsletter-form clearfix">
                        <input type="email" placeholder="Dejanos tu email">
                        <input type="submit" value="Suscribirme">
                    </div>
                </div>
            </div>
        </section>
        @include('layouts.footer')
        @include('layouts.footer_scripts')
    </body>
</html>

