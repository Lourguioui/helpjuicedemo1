{{-- Include Styles and scripts that are used in all pages in layouts/master --}}
@extends('layouts.master')

{{-- Include Styles that are used only in this page in this section --}}
@section('styles')

<link rel="stylesheet" href="{{env('APP_URL') . '/css/member/member-info.css'}}">

@endsection

{{-- Each section of this page should be in a file, the file must be in this directory partials/{page-name}/ --}}
{{-- Sections, or componenets that are used in more than one page like nav-bar and footer, must be directly in partials/ --}}
{{-- Look for examples in below --}}

@section('body')

@include('partials/nav-bar')

@include('partials/member/member-info')


@endsection

{{-- Include Scripts that are used only in this page in this section --}}
@section('scripts')
<script src="{{env('APP_URL') . '/js/member/cse-journey.js'}}"></script>
@endsection
