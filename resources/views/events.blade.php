debe mostrar todos los eventos <br />
@foreach ($events AS $event)
    <p>
        Nombre del evento: {{ $event->title }}
        <a href="{{ url('/evento/' . $event->url) }}">
            COMPRAR
        </a>
    </p>
@endforeach


