
<nav class="navbar">
    <div class="content">

      <div class="logo" style="display: flex; justify-content:flex-start;align-items: center;">
         <a href="/">
        <img
        src="{{asset('assets/images/nanotech.png')}}"
        alt="logo"
        width="60"
        height="60"
        class="logo"
      />
    </a>
      <div>
        <a href="/" style="text-decoration: unset;"> <h1 style="margin: 0; text-align:left; font-size: 16px;" >Nanocodes</h1></a>
          <a href="/" style="text-decoration: unset;">  <h2 style="margin: 0; text-align:left; font-size: 16px">Programming</h2></a>
      </div>
      </div>
      <ul class="menu-list">
        <div class="icon cancel-btn">
          <i class="fa fa-times"></i>
        </div>

           <li><a href="{{route('shop.home.index')}}">SHOP ONLINE</a></li>
           <li><a href="{{route('index')}}#mine">SERVICES</a>
           </li>
           <li id="showcase"><a href="#">LEARN ONLINE</a>
            <ul class="enable">
              <li><a href="{{route('customer.session.index')}}">LOGIN</a></li>
              <li><a href="{{route('customer.register.index')}}">SIGN UP</a></li>
          </ul>
        </li>

           <li><a href="{{route('about')}}">ABOUT US</a></li>
           <li><a href="{{route('gallery')}}">Gallery</a></li>

           <li><a href="{{route('coinsell')}}">BUY/SELL CRYPTO</a></li>

           <li><a href="{{route('contact')}}">CONTACT  US</a></li>
           </li>

      </ul>
      <div class="icon menu-btn">
        <i class="fa fa-bars"></i>
      </div>
    </div>
  </nav>