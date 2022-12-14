{{-- Include Styles and scripts that are used in all pages in layouts/master --}}
@extends('layouts.master')

{{-- Include Styles that are used only in this page in this section --}}
@section('styles')
<link rel="stylesheet" href="{{asset('css/our-vision/hero.css')}}">
<link rel="stylesheet" href="{{asset('css/our-vision/alumnis.css')}}">
<link rel="stylesheet" href="{{asset('css/our-vision/members.css')}}">
<link rel="stylesheet" href="{{asset('css/our-vision/values.css')}}">
@endsection

{{-- Each section of this page should be in a file, the file must be in this directory partials/{page-name}/ --}}
{{-- Sections, or componenets that are used in more than one page like nav-bar and footer, must be directly in partials/ --}}
{{-- Look for examples in the main.blade.php file --}}

@section('body')

    @include('partials/nav-bar')

    @include('partials/our-vision/our-vision-hero')
    @include('partials/our-vision/our-alumnis')
    @include('partials/our-vision/what-are-our-values')
    @include('partials/our-vision/members')
    @include('partials/our-vision/join-us')
    @include('partials/footer')

@endsection

{{-- Include Scripts that are used only in this page in this section --}}
@section('scripts')

@endsection
