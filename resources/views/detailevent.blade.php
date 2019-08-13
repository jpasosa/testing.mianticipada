@include('layouts.heads')


DETALLE DEL EVENTO

vamos a poner simili
<a href="http://template.mianticipada.com.ar/event-single.html">vista</a> <br />

Debemos poner todas las categorias a las que pertenece el evento:

@foreach ($event->categories AS $category)
    <p>
        Categoria: {{ $category->name }} <br />
    </p>
@endforeach


<select>
    @foreach ($event->locationsNormal AS $location)
        <option value="{{$location->price}}" title="{{$location->description}}" data-serviceprice="{{ $location->serviceprice }}">{{$location->name}} | (${{$location->price}}) | Quedan {{$location->restquant}} </option>
    @endforeach
</select>


{{-- Por ahora siempre seleccionamos la primeras locaciones para la lógica de selección de entradas. Luego hay que hacer por AJAX --}}
<select>
    <option value="1"> 1 entrada</option>
    @if($first_locations->restquant >= 12)
        @for ($i = 2; $i <= 12; $i++)
            <option value="{{ $i }}">{{ $i }} entradas</option>
        @endfor
    @else:
        @for ($i = 2; $i <= $first_locations->restquant; $i++)
            <option value="{{ $i }}">{{ $i }} entradas</option>
        @endfor
    @endif

</select>
<p>
    <p>Entradas: {{$totaltickets}}</p>
    <p>Costo por Servicio: {{$serviceprice}}</p>
    <p>Total: {{$total}}</p>
</p>








----------------------------------------------------------------------------------------------------------------------<br />

Titulo: {{ $event->title }} <br />
Descripción: {{ $event->description }} <br />
URL: {{ $event->url }} <br />
Public: {{ $event->public }} <br />
Active: {{ $event->active }} <br />
Date: {{ $event->date }} <br />
Duracion: {{ $event->duration }} <br />
Finalización de venta: {{ $event->finishdate }} <br />
Tipo: {{ $event->type }} <br />
Lugar: {{ $event->place->name }} <br />
Solo para adultos: {{ $event->adultonly }} <br />
imágen: {{ $event->image }} <br />
banner: {{ $event->banner }} <br />
cant de entradas que faltan: {{ $event->restquant }} <br />
total de entradas: {{ $event->totalquant }} <br />
usuario que creo el evento: {{ $event->userCreate->name }} || {{ $event->userCreate->internalnotes }}  <br />
usuario coordinador del evento: {{ $event->userCoord->name }} || {{ $event->userCoord->internalnotes }} <br />
usuario coordinador de la zona: {{ $event->userZone->name }} || {{ $event->userZone->internalnotes }} <br />
facebook general: {{ $event->fb_general }} <br />
facebook del evento: {{ $event->fb_event }} <br />
instagram general: {{ $event->inst_general }} <br />
instagram del evento: {{ $event->inst_event }} <br />

<button type="button" class="btn btn-success">COMPRAR TICKET</button>

