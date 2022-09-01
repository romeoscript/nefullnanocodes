@extends('visitorslayout.layout')
@include('csslayout.aboutcss')
@include('csslayout.aboutcss')
@section('body')
@include('csslayout.navbar')
<main class="container">
    <section class="sec1">
        <h3>Who We Are</h3>
        <div class="grid">
            <div>
                <img src="./assets/images/landing page art 1.png" alt="" srcset="">
            </div>
            <div>
                <p>
                    Nanocodes technology is a tech firm which provides premium
                    information technology for clients , including these pragmatic ones looking to learn information essentials ! professional skills like programming [all language level], graphic designs , digital marketing ,cryptocurrencies, android studio, web design ,
                    UI/UX designs  other carreer -worthy information technology
                    practices. Quality is the common characteristics of Nanocodes
                     deliveries , it would be worth a shot, to access our support
                     panel and make a call to nanocodes today! or visit B07 patsyl
                      plaza opposite Kenechukwu microfinance ank ,Nsukka to have a
                      taste of something superior


            </div>
        </div>
    </section>
    <!-- about-table -->
   <section class="about-table">
      <table>
        <caption>WHAT WE DO</caption>
        @if ($services != null)
    @foreach ($services as $service )
    <tr>
        <td>{{$service->service}}</td>
        <td>NEGOTIABLE</td>
      </tr>
    @endforeach

    @else
    <b>NO service set or found</b>

    @endif


      </table>
      <table>
        <caption>WHAT WE TEACH</caption>
        @if ($courses != null)
        @foreach ($courses as $course )
        <tr>
            <td>{{$course->course}}</td>
            <td> &#8358;{{$course->price}} </td>
          </tr>
        @endforeach

        @else
        <b>NO Course set or found</b>

        @endif

      </table>
   </section>
   <!-- about-table-end -->
   <section class="testimonials">
    <h2 style="color:#8f087f">THE TEAM</h2>
    <div class="slider-container swiper mySwiper">
      <div class="swiper-wrapper slider-content">


        {{-- @if ($allstaff != null)

        @foreach ($allstaff as $staff )

        <div class="swiper-slide slider-card">
            <div class="card-content">
              <div class="image">
                <img src="{{asset('storage/profile/'.$staff->pic)}}" alt="">
              </div>
              <div class="rating">
                <span class="name">{{$staff->name}}</span>
                <span class="testimony">{{$staff->description}}</span>
              </div>
            </div>
          </div>

        @endforeach

        @else
        <b>No staff set</b>

        @endif
 --}}




        <div class="swiper-slide slider-card">
          <div class="card-content">
            <div class="image">
              <img src="./assets/images/ano.jpg" alt="">
            </div>
            <div class="rating">
              <span class="name">Romeo</span>
              <span class="testimony">Lorem ipsum dolor sit amet <br>Lorem ipsum dolor sit amet.</span>
            </div>
          </div>
        </div>
        <div class="swiper-slide slider-card">
          <div class="card-content">
            <div class="image">
              <img src="./assets/images/ano.jpg" alt="">
            </div>
            <div class="rating">
              <span class="name">Romeo</span>
              <span class="testimony">Lorem ipsum dolor sit amet <br>Lorem ipsum dolor sit amet.</span>
            </div>
          </div>
        </div>
        <div class="swiper-slide slider-card">
          <div class="card-content">
            <div class="image">
              <img src="./assets/images/ano.jpg" alt="">
            </div>
            <div class="rating">
              <span class="name">Romeo</span>
              <span class="testimony">Lorem ipsum dolor sit amet <br>Lorem ipsum dolor sit amet.</span>
            </div>
          </div>
        </div>
        <div class="swiper-slide slider-card">
          <div class="card-content">
            <div class="image">
              <img src="./assets/images/ano.jpg" alt="">
            </div>
            <div class="rating">
              <span class="name">Romeo</span>
              <span class="testimony">Lorem ipsum dolor sit amet <br>Lorem ipsum dolor sit amet.</span>
            </div>
          </div>
        </div>
        <div class="swiper-slide slider-card">
          <div class="card-content">
            <div class="image">
              <img src="./assets/images/ano.jpg" alt="">
            </div>
            <div class="rating">
              <span class="name">Romeo</span>
              <span class="testimony">Lorem ipsum dolor sit amet <br>Lorem ipsum dolor sit amet.</span>
            </div>
          </div>
        </div>
        <div class="swiper-slide slider-card">
          <div class="card-content">
            <div class="image">
              <img src="./assets/images/ano.jpg" alt="">
            </div>
            <div class="rating">
              <span class="name">Romeo</span>
              <span class="testimony">Lorem ipsum dolor sit amet <br>Lorem ipsum dolor sit amet.</span>
            </div>
          </div>
        </div>
        <div class="swiper-slide slider-card">
          <div class="card-content">
            <div class="image">
              <img src="./assets/images/ano.jpg" alt="">
            </div>
            <div class="rating">
              <span class="name">Romeo</span>
              <span class="testimony">Lorem ipsum dolor sit amet <br>Lorem ipsum dolor sit amet.</span>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-pagination"></div>
      </div>

  </section>

  <script src="{{asset('assets/js/about.js')}}"></script>
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <script src="{{asset("assets/js/swiper-bundle.js")}}"></script>
@endsection