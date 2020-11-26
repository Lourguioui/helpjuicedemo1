{{-- Include Styles and scripts that are used in all pages in layouts/master --}}
@extends('layouts.master')

{{-- Include Styles that are used only in this page in this section --}}
@section('styles')
<link rel="stylesheet" href="{{asset('css/become-partner/hero.css')}}">
<link rel="stylesheet" href="{{asset('css/become-partner/stats.css')}}">
<link rel="stylesheet" href="{{asset('css/become-partner/whoarewe.css')}}">

<link rel="stylesheet" href="{{asset('css/become-partner/how-do-sponsors.css')}}">
<link rel="stylesheet" href="{{asset('css/become-partner/footer.css')}}">

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
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBbkAc5WgnIYDkqCPo0c5beRSFjtDcOsOM&callback=initMap&libraries=&v=weekly" defer ></script>
    <script>
    const members =[
          {
            lat : 36.73225,
            lng : 3.08786,
            name: "Boulboul Billel",
            icon: "{{asset('img/avatar1.png')}}"
          },
          {
            lat : 36.73225,
            lng : 3.18746,
            name: "Said Froute",
            icon: "{{asset('img/avatar2.png')}}"
          },
          {
            lat : 36.73225,
            lng : 3.28716,
            name: "Djamel Zdeq",
            icon: "{{asset('img/avatar1.png')}}"
          },
          {
            lat : 36.73225,
            lng : 3.38726,
            name: "Nassim Rdekh",
            icon: "{{asset('img/avatar3.jpg')}}"
          },
        ]
      let map;

      function initMap() {
        //Init the Map centeered in Algiers
        map = new google.maps.Map(document.getElementById("map"), {
          zoom: 10,
          center: new google.maps.LatLng(36.73225, 3.08746),
          mapTypeId: "roadmap",
         //mapId: "6205470d7b62da92",
        });
        
        const infowindow = new google.maps.InfoWindow({
          maxWidth: 350,
          pixelOffset: new google.maps.Size(-10,-25)
        });
        members.forEach((member)=>{
          let marker ;
          //Creating the content of the Pop-Up
          const content = '<div style="background: transparent linear-gradient(180deg, #383d59 0%, #0b0c12 100%) 0% 0% no-repeat padding-box;">' +
            '<img src="' + member.icon + '" alt="'+member.name+'" height="80px" style="border-radius:50%;margin-left:auto;margin-right:auto;display:block;"/>' +
              '<div style="color:white;font-size:15px;text-align:center">Name: ' + member.name + '</div>' +
              '<span style="color:white;">Lat: ' + member.lat + '</span>' +
              '<span style="color:white">, Long: ' + member.lng + '</span>' +
              '</div>';  
          //Create Marker with Member Infos  
          marker =new google.maps.Marker({
            position: new google.maps.LatLng(member.lat, member.lng),
            map,
            title:member.name,
          });
          marker.addListener("click", ()=>{
            infowindow.setContent(content);
            infowindow.open(map,marker);
            infowindow.setPosition(new google.maps.LatLng(member.lat,member.lng));
          });
        });
      }
    </script>
@endsection
