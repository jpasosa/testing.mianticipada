@extends('layouts.frontend')

@section('title', 'Busqueda')

@section('adds_js_css')
    {{-- acá puedo agregar JS o CSS según corresponda para dicha sección --}}
    {{-- <link rel="stylesheet" href="{{ asset('css/core.css') }}"> --}}
@endsection


@section('header')
    @parent
@endsection

@section('slider')
    @parent
@endsection

@section('next_events') {{-- saco esto --}}
@endsection

@section('events')
    @parent
@endsection

@section('separator')

@endsection


@section('by_categories')
@endsection


@section('banner_publicity')
    @parent
@endsection


@section('sponsors')
    @parent
@endsection


@section('newsletter')
    @parent
@endsection


@section('footer')
    @parent
@endsection


@section('footer_scripts')
    @parent
@endsection

