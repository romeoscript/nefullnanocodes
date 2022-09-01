@extends('visitorslayout.layout')
@include('csslayout.aboutcss')
@include('csslayout.aboutcss')
@section('body')
@include('csslayout.navbar')
<main class="container">
    <section class="contact__client">
        <h1>contact us</h1>
        <div>
        <img src="./assets/images/customer_service 1.png" alt="">
        </div>
    </section>
 
  <script src="{{asset('assets/js/about.js')}}"></script>
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <script src="{{asset("assets/js/swiper-bundle.js")}}"></script>
@endsection