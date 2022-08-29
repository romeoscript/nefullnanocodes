<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>

    <link rel="stylesheet" href="{{asset('assets/css/index.css')}}" />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="stylesheet" href="{{asset('assets/css/navbar.css')}}">
    <link rel="stylesheet" href="./assets/css/swiper-bundle.min.css">
    <link rel="stylesheet" href="./assets/css/about.css">
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"
      integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400&display=swap"
      rel="stylesheet"
    />

  </head>

  <body>

      <header>
        <video class="videoscript" style="position: absolute; top:14%; left:0; right:0; width:100%; opacity: 0.4;" src="{{asset('assets/final advert video.mp4')}}" autoplay muted loop></video>
        <nav class="navbar">
          <div class="content">
            <div class="logo" style="display: flex; justify-content:flex-start;align-items: center;">
              <img
              src="{{asset('assets/images/nanotech.png')}}"
              alt="logo"
              width="60"
              height="60"
              class="logo"
            />
            <div>
              <h1 style="margin: 0; text-align:left; font-size: 16px;" >Nanocodes</h1>
              <h2 style="margin: 0; text-align:left; font-size: 16px">Programming</h2>
            </div>
            </div>
            <ul class="menu-list">
              <div class="icon cancel-btn">
                <i class="fa fa-times"></i>
              </div>
              <li><a href="{{route('index')}}">GET STARTED</a></li>
                 <li><a href="{{route('shop.home.index')}}">SHOP ONLINE</a></li>
                 <li><a href="#mine">SERVICES</a>
                 </li>
                 <li id="showcase"><a href="#">LEARN ONLINE</a>
                  <ul class="enable">
                    <li><a href="{{route('customer.checkout.login')}}">LOGIN</a></li>
                    <li><a href="{{route('customer.register.index')}}">SIGN UP</a></li>
                </ul>
              </li>

                 <li><a href="{{route('about')}}">ABOUT US</a></li>
                 <li><a href="{{route('coinsell')}}">BUY/SELL CRYPTO</a></li>


                 </li>
            </ul>
            <div class="icon menu-btn">
              <i class="fa fa-bars"></i>
            </div>
          </div>
        </nav>

        <div class="emtpy"></div>









      @yield('body')






      <footer>
        <section class="choose">
          <h2>Why Choose Us?</h2>
          <div class="chose">
            <div>
              <img src="{{asset('assets/images/Vector (3).png')}}" alt="" />

              <h3>CREATIVE</h3>
            </div>
            <div>
              <img src="{{asset('assets/images/Vector (2).png')}}" alt="" />
              <h3>SWIFT</h3>
            </div>
            <div>
              <img src="{{asset('assets/images/Group.png')}}" alt="" />
              <h3>PROFICIENT</h3>
            </div>
          </div>
        </section>
        <section class="client">
          <h2>Our Clients</h2>
          <div class="clients">
            <div>
              <p>
                <a href="#"><img src="{{asset('svg/Rectangle 45.svg')}}" alt="" /></a>
              </p>
            </div>
            <div>
              <p>
                <a href="#"><img src="{{asset('svg/Rectangle 44.svg')}}" alt="" /></a>
              </p>
            </div>
            <div>
              <p>
                <a href="#"><img src="{{asset('svg/Rectangle 43.svg')}}" alt="" /></a>
              </p>
            </div>
            <div>
              <p>
                <a href="#"><img src="{{asset('svg/Rectangle 42.svg')}}" alt="" /></a>
              </p>
            </div>
            <div>
              <p>
                <a href="#"><img src="{{asset('svg/phone icon 1.svg')}}" alt="" /></a>
              </p>
            </div>
            <div>
              <p>
                <a href="#"
                  ><img src="{{asset('svg/5ead53e91c42dd0004bbf8c8 1.svg')}}" alt=""
                /></a>
              </p>
            </div>
            <div>
              <p>
                <a href="#"
                  ><img src="{{asset('svg/59b5bc2a6dbe923c39853e02 1.svg')}}" alt=""
                /></a>
              </p>
            </div>
          </div>
        </section>
        <section class="contact">
          <div class="contactdiv">
            <div>
              <h3>Contact Us</h3>
              <address>
                Shop bO7 Patsyl Plaza, <br />
                Opp Kenechukwu Microfinance Bank <br />
                Nsukka,Enugu
              </address>
            </div>
            <div class="input">
              <input
                type="email"
                name=""
                id=""
                placeholder="Enter Email Address"
              />
              <button type="submit">Subscribe</button>
            </div>
          </div>
          <div class="icon-last">
            <p>
              <a href=""><i class="fa fa-phone" aria-hidden="true"></i></a>
            </p>
            <a href="">
              <i class="fa fa-facebook-official" aria-hidden="true"></i
            ></a>
            <a href="">
              <i class="fa fa-twitter-square" aria-hidden="true"></i
            ></a>
            <a href=""> <i class="fa fa-instagram" aria-hidden="true"></i></a>
          </div>
        </section>
        <div class="line">
          <div id="line"></div>
        </div>
        <h4>Nanocodes Programming @ 2021</h4>
      </footer>
    </div>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init({
        offset: 300,
        duration: 1000,
      });
    </script>

    <script src="{{asset('assets/js/index.js')}}"></script>
  </body>
</html>
