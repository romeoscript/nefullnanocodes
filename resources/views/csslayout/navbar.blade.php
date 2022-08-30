
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