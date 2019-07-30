@section('next_events')
    <section class="section-upcoming-events">
        <div class="container">
            <div class="row">
                <div class="section-header">
                    <h2>Próximos Eventos</h2>
                    <p>Ahora comprar las anticipadas es muy fácil, simplemente seleccioná tu evento favorito, compra la cantidad de entradas que quieras, pagá con tarjeta, débito y/o por rapipago, o como necesites pagarlo, imprimí tu entrada y/o llevate tu celular y tu DNI, listo. Planificá tu diversión por adelantado y pagá menos.</p>
                    <a href="{{ url('/eventos') }}">Ver todos los Eventos</a>
                </div>
                <div class="section-content">
                    <ul class="clearfix">
                        @foreach ($events as $event)
                            <p>This is user {{ $event->title }}</p>
                        @endforeach
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
@show