@extends('visitorslayout.layout')
@include('csslayout.aboutcss')
@include('csslayout.aboutcss')
@section('body')
@include('csslayout.navbar')
<section class="buyflex qr-flex">
    <main class="center-qr">
        <aside class="center-kid">
          <p class="first-p">send cryptocurrencies</p>
            <div class="aside-content1">
            <div >
                <div style="display: flex;justify-content: flex-start;align-items: center;padding-left: 20px;">
                    <img src="./assets/images/qr-svgrepo-com 1.png" alt="" style="display: block;" > <span style="display: block;">scan address</span>
                </div>
                <img src="./assets/images/qrcode-svgrepo-com 1.png" alt="" class="qcode">
            </div>
            <div class="aside-content">
                <p style="text-align: right;"><img src="./assets/images/time.png" alt="" width="30px"> <span>15:59</span></p>
                <p>send: <strong>0.00994 BTC to</strong> </p>
                <p>to</p>
                <p>fegdsfhgfhgzgfhkl;’o;lkjhgdgfhjfd</p>
                <p style="cursor: pointer;"><img src="./assets/images/copy.png" alt=""> <span>copy address</span></p>
                <button style="display: block;">i have sent it</button>
            </div>
            </div>
        </aside>
        <img src="./assets/images/6617 1.png" alt="" class="qr-bg">
    </main>
  </section>


<script src="{{asset('assets/js/about.js')}}"></script>
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <script src="{{asset("assets/js/swiper-bundle.js")}}"></script>
@endsection
