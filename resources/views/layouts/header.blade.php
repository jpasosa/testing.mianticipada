@section('header')
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
@show