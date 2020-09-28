{{-- Include Styles and scripts that are used in all pages in layouts/master --}}
@extends('layouts.master')

{{-- Include Styles that are used only in this page in this section --}}
@section('styles')
<link rel="stylesheet" href="{{asset('css/become-partner/hero.css')}}">
<link rel="stylesheet" href="{{asset('css/become-partner/stats.css')}}">
<link rel="stylesheet" href="{{asset('css/become-partner/map.css')}}">
<link rel="stylesheet" href="{{asset('css/become-partner/why.css')}}">
<link rel="stylesheet" href="{{asset('css/become-partner/contact.css')}}">
@endsection

{{-- Each section of this page should be in a file, the file must be in this directory partials/{page-name}/ --}}
{{-- Sections, or componenets that are used in more than one page like nav-bar and footer, must be directly in partials/ --}}
{{-- Look for examples in the main.blade.php file --}}

@section('body')

    @include('partials/become-partner/nav-bar')

    @include('partials/become-partner/become-partner-hero')
    @include('partials/become-partner/who-are-we')
    @include('partials/become-partner/cse-community')
    @include('partials/become-partner/statistics')
    @include('partials/become-partner/why-do-sponsors')
    @include('partials/become-partner/how-do-sponsors')
    @include('partials/become-partner/what-do-sponsors')
    @include('partials/become-partner/our-sponsors')
    @include('partials/become-partner/contact-us')

    @include('partials/become-partner/footer')

@endsection

{{-- Include Scripts that are used only in this page in this section --}}
@section('scripts')
<script src="{{asset('js/main.js')}}"></script>
<script src="{{asset('js/become-partner/stats.js')}}"></script>
@endsection
