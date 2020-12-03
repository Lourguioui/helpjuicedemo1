{{-- Include Styles and scripts that are used in all pages in layouts/master --}}
@extends('layouts.master')

{{-- Include Styles that are used only in this page in this section --}}
@section('styles')
<link rel="stylesheet" href="{{asset('css/media-covrage/hackit2.css')}}">
<link rel="stylesheet" href="{{asset('css/media-covrage/media.css')}}">

@endsection

{{-- Each section of this page should be in a file, the file must be in this directory partials/{page-name}/ --}}
{{-- Sections, or componenets that are used in more than one page like nav-bar and footer, must be directly in partials/ --}}
{{-- Look for examples in the main.blade.php file --}}

@section('body')

    @include('partials/nav-bar')

    @include('partials/media-covrage/media-coverage')
    @include('partials/media-covrage/hackit2')
    @include('partials/media-covrage/awa2014')
    @include('partials/media-covrage/event3')
    @include('partials/media-covrage/event4')
    @include('partials/footer')

@endsection

{{-- Include Scripts that are used only in this page in this section --}}
@section('scripts')

@endsection
