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
        <aside class="aside_1"> <img src="./assets/images/call.png" alt=""> Call us </aside>
        <aside class="aside_2"> <img src="./assets/images/whatsapp.png" alt="">whatsapp </aside>
        <aside class="aside_3"> <img src="./assets/images/live.png" alt=""> Live Chart</aside>
        </div>
    </section>
 
  <script src="{{asset('assets/js/about.js')}}"></script>
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <script src="{{asset("assets/js/swiper-bundle.js")}}"></script>
@endsection