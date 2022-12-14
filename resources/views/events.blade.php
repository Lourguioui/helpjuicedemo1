{{-- Include Styles and scripts that are used in all pages in layouts/master --}}
@extends('layouts.master')

{{-- Include Styles that are used only in this page in this section --}}
@section('styles')
<link rel="stylesheet" href="{{env('APP_URL') . '/css/events/hero.css'}}">
<link rel="stylesheet" href="{{env('APP_URL') . '/css/events/events.css'}}">
@endsection

{{-- Each section of this page should be in a file, the file must be in this directory partials/{page-name}/ --}}
{{-- Sections, or componenets that are used in more than one page like nav-bar and footer, must be directly in partials/ --}}
{{-- Look for examples in the main.blade.php file --}}

@section('body')

    @include('partials/nav-bar')

    @include('partials/events/hero')
    @include('partials/events/events')

    @include('partials/footer')

@endsection

{{-- Include Scripts that are used only in this page in this section --}}
@section('scripts')
<script src="{{asset('js/main.js')}}"></script>
@endsection
