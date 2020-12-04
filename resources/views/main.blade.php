{{-- Include Styles and scripts that are used in all pages in layouts/master --}}
@extends('layouts.master')

{{-- Include Styles that are used only in this page in this section --}}
@section('styles')

<link rel="stylesheet" href="{{asset('css/hero.css')}}">
<link rel="stylesheet" href="{{asset('css/about.css')}}">
<link rel="stylesheet" href="{{ asset('css/events.css') }}">
<link rel="stylesheet" href="{{asset('css/ourvision.css')}}">
<link rel="stylesheet" href="{{asset('css/faq.css')}}">
<link rel="stylesheet" href="{{asset('css/support.css')}}">
<link rel="stylesheet" href="{{asset('css/projects.css')}}">
<link rel="stylesheet" href="{{asset('css/partners.css')}}">

@endsection

{{-- Each section of this page should be in a file, the file must be in this directory partials/{page-name}/ --}}
{{-- Sections, or componenets that are used in more than one page like nav-bar and footer, must be directly in partials/ --}}
{{-- Look for examples in below --}}

@section('body')

@include('partials/nav-bar')

@include('partials/main/hero')
@include('partials/main/about-us')
@include('partials/main/events')
@include('partials/main/our-vision')
@include('partials/main/partners')
@include('partials/main/projects')
@include('partials/main/media-coverage')
@include('partials/main/faq')
@include('partials/main/support-us')

@include('partials/footer')

@endsection

{{-- Include Scripts that are used only in this page in this section --}}
@section('scripts')
<script src="{{ asset('js/events.js') }}"></script>
<script src="{{asset('js/faq.js')}}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBbkAc5WgnIYDkqCPo0c5beRSFjtDcOsOM&map_ids=6205470d7b62da92&callback=initMap&libraries=&v=weekly" defer async></script>
<script src="{{asset('js/init.js')}}"></script>
<script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>
<script src="{{asset('js/up.js')}}"></script>
<script src="{{asset('js/slider.js')}}"></script>
<script src="{{asset('js/hero.js')}}"></script>
<script src="{{env('APP_URL') . '/js/main.js'}}"></script>
@endsection
