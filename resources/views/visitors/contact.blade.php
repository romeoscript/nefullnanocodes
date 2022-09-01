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
    <div class="card-father">
        <div class="login-card login-info">
          <div class="box-model">
            <div class="icon">
              <i class="fa fa-map-marker" aria-hidden="true"></i>
            </div>
            <div class="call-icon">
              <p><i class="fa fa-whatsapp" aria-hidden="true"></i></p>
              <p><i class="fa fa-telegram" aria-hidden="true"></i></p>
              <p><i class="fa fa-phone" aria-hidden="true"></i></p>
            </div>
          </div>

          <div class="box-model">
            <div class="icon">
              <img src="./assets/images/Customer care 2.png" alt="" />
            </div>
            <div class="call-icon ico border">
              <form action="">
                <input type="text" placeholder="Name" /><br />
                <input type="email" placeholder="E-mail" /><br />
                <textarea
                  cols="20"
                  rows="5"
                  placeholder="how can we help"
                  ?
                ></textarea
                ><br />
                <button>Chat</button>
              </form>
            </div>
          </div>
          <div class="box-model">
            <div class="icon">
              <i class="fa fa-envelope-square" aria-hidden="true"></i>
            </div>
            <div class="call-icon ico">
              <form action="">
                <input type="text" placeholder="Name" /><br />
                <input type="email" placeholder="E-mail" /><br />
                <textarea
                  cols="20"
                  rows="5"
                  placeholder="how can we help"
                  ?
                ></textarea
                ><br />
                <button>E-mail</button>
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