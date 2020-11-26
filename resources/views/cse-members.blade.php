{{-- Include Styles and scripts that are used in all pages in layouts/master --}}
@extends('layouts.master')

{{-- Include Styles that are used only in this page in this section --}}
@section('styles')

<link rel="stylesheet" href="{{asset('css/cse-members/hero.css')}}">
<link rel="stylesheet" href="{{asset('css/cse-members/member-of-the-month.css')}}">
<link rel="stylesheet" href="{{asset('css/cse-members/find-our-members.css')}}">
<link rel="stylesheet" href="{{asset('css/cse-members/our-members.css')}}">
<link rel="stylesheet" href="{{asset('css/cse-members/our-alumnies.css')}}">

@endsection

{{-- Each section of this page should be in a file, the file must be in this directory partials/{page-name}/ --}}
{{-- Sections, or componenets that are used in more than one page like nav-bar and footer, must be directly in partials/ --}}
{{-- Look for examples in below --}}

@section('body')

@include('partials/nav-bar')

@include('partials/cse-members/cse-members-hero')
@include('partials/cse-members/member-of-the-month')
@include('partials/cse-members/find-our-members')
@include('partials/cse-members/our-members')
@include('partials/cse-members/our-alumnies')

@include('partials/footer')

@endsection

{{-- Include Scripts that are used only in this page in this section --}}
@section('scripts')

@endsection