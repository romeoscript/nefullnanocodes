@extends('visitorslayout.layout')
@include('csslayout.indexcss')
@section('body')
<header>
  <video class="videoscript" style="position: absolute; top:14%; left:0; right:0; width:100%; opacity: 0.4;" src="./assets/final advert video.mp4" autoplay muted loop></video>
 @include('csslayout.navbar')

  <div class="emtpy"></div>
  <!-- wrapper -->

  <div class="wrapper">
    <div class="first-chid">
      <p class="fancy" data-aos="slide-left">
        <span>explore</span> the <span>world</span> <br />of
        <span>ict</span>
      </p>
      <button><a href="#go-down">get started</a></button>
    </div>
    <div data-aos="slide-right" class="furst">
      <img
        src="./assets/images/young-african-american-woman-with-laptop-sitting-floor-presenting-idea-while-looking-smiling-towards_1368-125956_1-removebg-preview.png"
        alt=""
        class="young"
        ;
      />
    </div>
  </div>
</header>
<!-- wrapper-ends -->
<!-- box-model starts -->
<div class="boxmom" data-aos="flip-right" id="go-down">
  <div class="box-model">
    <p>nanocodes cryptocurrencies exchange</p>
    <hr />
    <div class="innerbox-model-h">
      <h5>buy</h5>
      <h5>sell</h5>
    </div>
    <div class="main-innerbox">
      <select name="cars" id="crypto">
        <option value="bitcoin">BTC</option>
        <option value="etherium">ETH</option>
      </select>
      <input type="text" />
      <input type="text" placeholder="CONTACT US FOR CRYPTOCURRENCY TRANSACTIONS" />
      <button>sell</button>
    </div>
  </div>
</div>
<!-- box-model ends -->

<div class="who-we-are">
  <h2>who we are</h2>
  <p data-aos="zoom-in">
    NANOCODES PROGRAMMING LIMITED is a tech firm currently based in
    arguably the most chilling towns in ENUGU STATE, nsukka focused on
    optimal and quintessential delivery in whatever we do, the
    satisfaction of our customers one plus paramount information
    technology is the major of nanacodes programming , at this company we
    strive to solve the everyday IT problems of our customers, while
    providing comfort and reassuring them, that with nanocodes no problem
    is really a problem,as working everyday in this establisment are
    experts in various fields of IT ready to tackle any problem, through
    the use of tested and trusted methods , providing not just a solution
    and coonfort to customers , but advice on what to do should a similar
    problem arise again. providing you with a go to solution for all IT
    problems,as well as provision of IT services optimally, chanelling
    excellence through professionals in various areas of IT:including
    cryptocurrencies,digital marketing,graphic design, pdf
    production,website building, content creation of most sorts ,
    provision of top flight electrical and IT gadgets for customer retial
    and to put and extra flavour on ready cake,
  </p>
</div>

<div class="more-description">
  <div>
    <img
      src="./assets/images/landing page art 1.png"
      alt=""
      width="400px"
      data-aos="slide-right"
    />
  </div>
  <div class="text">
    <p data-aos="slide-left">
      Nanocodes programming limited provides , premuim academic services ,
      we provide necessary resources and a classroom as well as
      prfessionals in most fields of IT to teach students who have a knack
      for IT or computers in general--- information technology essentials
      , which will turn them into respected professionals and owners of
      respected techfirms like Nanocodes tomorrow! integral IT components
      such as programming , web design , blogging , digital marketing,
      graphic desing , crypto classes and a host of mouth watering and
      highly lucrative IT components which you , your family or loved ones
      could enjoy someday. Just step into B07 Patsyl plaza opposite
      Kenechukwu microfinance bank ,Nsukka , Enugu Nigeria and choose how
      we serve you!.
    </p>
  </div>
</div>

<br><br><br><br>



<div class="boxmode-mom" id="mine">
  <ul>
    <li>What We Do</li>
    <li></li>
  </ul>
  <div class="service-boxmodel">
    @if ($services != null)
    @foreach ($services as $service )


    <div class="boxes">
        <img
          src="{{asset('storage/serviceimages/'.$service->serviceimage)}}"
          alt="{{$service->service}} Image"
          class="boximage"
          data-aos="fade-down-right"
        />
        <h2>
          {{$service->service}}
        </h2>
        <p>
         {{$service->servicedescription}}
        </p>
      </div>

    @endforeach

    @else
    <b>NO service set or found</b>

    @endif

{{--
    <div class="boxes">
      <img
        src="./assets/images/ui.jpg  "
        alt=""
        class="boximage"
        data-aos="fade-up"
      />
      <h2>
        learn how to create amazing mobile friendly apps at a cost that
        would blow your mind
      </h2>
      <p>mobile <br />development</p>
    </div>

    <div class="boxes">
      <img
        src="./assets/images/dev.jpg"
        alt=""
        class="boximage"
        data-aos="fade-up"
      />
      <h2>
        coding is our thing , and building a resposive and user friendly
        sites is part of what we love doing
      </h2>
      <p>
        web design <br />
        and development
      </p>
    </div>
    <div class="boxes">
      <img
        src="./assets/images/design.jpg"
        alt=""
        class="boximage"
        data-aos="fade-down-left"
      />
      <h2>
        create amazing designs which are appealing to the eyes and get to
        learn alongside our amazing students
      </h2>
      <p>UI/UX <br />design</p>
    </div>
    <div class="boxes">
      <img
        src="./assets/images/cryto.jpg"
        alt=""
        class="boximage"
        data-aos="fade-up"
      />
      <h2>
        we trading with ease, futures and spots trading also binary
        trading , we dont relent
      </h2>
      <p>
        CRYPTO CURRENCY <br />
        TRADING
      </p>
    </div>
    <div class="boxes">
      <img
        src="./assets/images/ano.jpg"
        alt=""
        class="boximage"
        data-aos="fade-up"
      />
      <h2>
        get your business registered , we are always here to serve you
        better
      </h2>
      <p>business registration <br />& branding</p>
    </div>
    <div class="boxes">
      <img
        src="./assets/images/class.jpg"
        alt=""
        class="boximage"
        data-aos="fade-up-left"
      />
      <h2>
        be mentored one on one and get the best for every course you
        choose
      </h2>
      <p>TUTORIALS</p>
    </div>
    <div class="boxes">
      <img
        src="./assets/images/hib.jpg"
        alt=""
        class="boximage"
        data-aos="fade-up-right"
      />
      <h2>
        we create hybrid apps for daily usage we base on making our
        clients happy
      </h2>
      <p>HYBRID APP DESING <br />DEVELOPMENT</p>
    </div> --}}
  </div>
</div>





<div class="boxmode-mom" id="mine">
    <ul>

      <li>What We Teach</li>
    </ul>
    <div class="service-boxmodel">
        @if ($courses != null)
    @foreach ($courses as $course )


    <div class="boxes">
        <a href="{{route('course',$course->id)}}" target="_blank" rel="noopener noreferrer">
        <img
          src="{{asset('storage/course/'.$course->courseimage)}}"
          alt="{{$course->course}} Image"
          class="boximage"
          data-aos="fade-down-right"
        />
        <h2>
          {{$course->course}}
        </h2>
        <p>
         {{$course->description}}
        </p>
    </a>
      </div>



    @endforeach

    @else
    <b>NO Course set or found</b>

    @endif




    </div>
  </div>



<div class="glass-mum">
  <div class="glassy" data-aos="zoom-out-up">
    <div class="first-count">
      <p id="counter3"></p>
      <p>students</p>
    </div>
  </div>
  <div class="glassy" data-aos="zoom-out-up">
    <div class="first-count">
      <p id="counter2"></p>
      <p>completed projects</p>
    </div>
  </div>
  <div class="glassy" data-aos="zoom-out-up">
    <div class="first-count">
      <p id="counter"></p>
      <p>happy clients</p>
    </div>
  </div>
</div>

<!-- <div class="all-countingfooters">
  <div class="countingmum">
    <div class="counting-numbers">
      <div class="first-count">
        <p id="counter"></p>
        <p>happy clients</p>
      </div>
      <div class="first-count">
        <p id="counter2"></p>
        <p>completed projects</p>
      </div>
      <div class="first-count">
        <p id="counter3"></p>
        <p>students</p>
      </div>
    </div>
  </div> -->

<!-- <h2>why choose us?</h2>
  <div class="whyusdiv">
    <h2>creative</h2>
    <h2>swift</h2>
    <h2>proficient</h2>
  </div>
</div> -->

@endsection