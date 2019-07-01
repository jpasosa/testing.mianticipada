@extends('layouts.frontend')

@section('title', 'Eventos')
@section('adds_js_css')
    {{-- acá puedo agregar JS o CSS según corresponda para dicha sección --}}
    {{-- <link rel="stylesheet" href="{{ asset('css/core.css') }}"> --}}
@endsection

@section('next_events')@endsection {{-- va a vaciar el slider, no va a estar --}}
@section('events')
    @parent
    pepe
@endsection
{{-- pepe --}}