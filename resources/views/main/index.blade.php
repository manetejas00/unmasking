@extends('layout.layout1')

@php
    $header = 'false';
    $footer = 'false';

@endphp
@section('meta')
    <title>{{ $hero->meta_title ?? 'Default Meta Title' }}</title> <!-- Meta Title -->
    <meta name="description" content="{{ $hero->meta_description ?? 'Default meta description for this page.' }}">
    <!-- Meta Description -->
@endsection
@section('content')
    <!--Start header-section -->
    @include('layout.header')

    @include('home.hero')
    <!-- End section -->
    @include('home.services')

    <!-- End section -->
    @include('home.business')

    <!-- End section -->
    @include('home.projects')

    <!-- End section -->
    @include('home.clients')

    <!-- End section -->
    @include('home.team')

    <!-- End section -->

    <!-- Footer  -->
    @include('layout.footer')
@endsection
