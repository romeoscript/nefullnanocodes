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
       <a href="tel:+2348133306121"><aside class="aside_1"> <img src="./assets/images/call.png" alt=""> Call us </aside></a>
        <a href="https://api.whatsapp.com/send?phone=8124946594&text=Good%20day!%20please%20i%20need%20assistance"><aside class="aside_2"> <img src="./assets/images/whatsapp.png" alt="">whatsapp </aside></a>
        <aside class="aside_3"> <img src="./assets/images/live.png" alt=""> Live Chart</aside>
        </div>
    </section>
    <div class="card-father">
        <div class="login-card login-info">
          {{-- <div class="box-model">
            <div class="icon">
              <i class="fa fa-map-marker" aria-hidden="true"></i>
            </div>
            <div class="call-icon">
              <p><i class="fa fa-whatsapp" aria-hidden="true"></i></p>
              <p><i class="fa fa-telegram" aria-hidden="true"></i></p>
              <p><i class="fa fa-phone" aria-hidden="true"></i></p>
            </div>
          </div> --}}

          <div class="box-model">
            <div class="icon">
              <img src="./assets/images/Customer care 2.png" alt="" />
            </div>
            <div class="call-icon ico border">
                <h3>Enquiries</h3>
              <form action="{{route('contactcreate')}}" method="post">
                <input type="text" placeholder="Name" name="name" value="" /><br />
                <input type="email" placeholder="E-mail"  name="email" value=""/><br />
                <input type="text" placeholder="Subject" name="subject" value=""/><br />
                <textarea name="message" value=""
                  cols="20"
                  rows="5"
                  placeholder="how can we help"
                  ?
                ></textarea
                ><br />
                <button type="submit">Chat</button>
              </form>
            </div>
          </div>
          <div class="box-model">
            <div class="icon">
              <i class="fa fa-envelope-square" aria-hidden="true"></i>
            </div>
            <div class="call-icon ico">
                <h3>Offers</h3>
              <form action="{{route('contactcreate')}}" method="POST">
                @csrf
                <input type="text" placeholder="Name" name="name" value="" /><br />
                <input type="email" placeholder="E-mail"  name="email" value=""/><br />
                <input type="text" placeholder="Business Name" name="subject" value=""/><br/>
                <textarea name="message" value=""
                  cols="20"
                  rows="5"
                  placeholder="Tell us about your business"
                  ?
                ></textarea
                ><br />
                <button type="submit">E-mail</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  <script src="{{asset('assets/js/about.js')}}"></script>
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <script src="{{asset("assets/js/swiper-bundle.js")}}"></script>
@endsection