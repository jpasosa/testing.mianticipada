@foreach ($categories AS $category)
    <p>Nombre de la categoría: {{ $category->name }}</p>
@endforeach

@section('by_categories')
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
@show