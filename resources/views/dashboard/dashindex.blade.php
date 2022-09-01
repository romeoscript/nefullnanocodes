@extends('dashboardlayout.dashlayout')
@include('csslayout.indexcss')

<link href="{{asset('assets/css/style.css')}}" rel="stylesheet" />
@section('body')

<div id="root">
    <div classe="App">
      <header class="header">
        <a href="{{route('index')}}"><img
          src="{{asset('assets/images/nanotech.png')}}"
          alt="logo"
          width="60"
          height="60"
          class="logo"
        />
    </a>
        <div>
          <h1>Nanocodes</h1>
          <h2>Programming</h2>
        </div>
        <div class="right">
          <img
            src="./assets/images/user.svg"
            alt="logo"
            width="32"
            height="32"
            class="me"
          />
          <div class="dropdown">
            <div class="drop"></div>
            <aside class="menu">
              <a>Tasks</a>
              <a>Results</a>
              <a>Go Premium</a>
              <a>Certificate</a>
              <a>Sign Out</a>
            </aside>
          </div>
        </div>
      </header>
      <section class="section">
        <div class="text">
          <p>
            Welcome <span>Chinedu!</span> <br />You are doing a good job
            <br />Keep Going!
          </p>
        </div>
        <div class="activity">
          <div>
            <h3>Activity</h3>
            <div class="doughnut">
              <div>
                <p>total Hours</p>
                <p>12:34:41</p>
              </div>
            </div>
          </div>
          <div class="container">
            <aside>
              <h5 style="--col: #a6a6a6">Java</h5>
              <h5 style="--col: #ffbf00">UI/UX</h5>
              <h5 style="--col: #5a9ad7">HTML</h5>
              <h5 style="--col: #ef7e32">CSS</h5>
            </aside>
          </div>
        </div>
        <div class="progress">
          <h3>Progress</h3>
          <div>
            <section>
              <div class="container">
                <div>
                  <h4>Java</h4>
                  <h4>73%</h4>
                </div>
                <progress value="73" max="100"></progress>
              </div>
              <div class="container">
                <div>
                  <h4>UI/UX</h4>
                  <h4>52%</h4>
                </div>
                <progress value="52" max="100"></progress>
              </div>
              <div class="container">
                <div>
                  <h4>HTML</h4>
                  <h4>81%</h4>
                </div>
                <progress value="81" max="100"></progress>
              </div>
              <div class="container">
                <div>
                  <h4>CSS</h4>
                  <h4>27%</h4>
                </div>
                <progress value="27" max="100"></progress>
              </div>
            </section>
          </div>
        </div>
      </section>
      <div class="course">
        <section class="recent">
          <h3>Recent</h3>
          <div class="container">
            <div class="item">
              <span class="play"></span>
              <video height="100%" width="30%" controls>
                <source src="" type="" />
              </video>
            </div>
            <div class="item">
              <span class="play"></span>
              <video height="100%" width="30%" controls>
                <source src="" type="" />
              </video>
            </div>
            <div class="item">
              <span class="play"></span>
              <video height="100%" width="30%" controls>
                <source src="" type="" />
              </video>
            </div>
            <div class="item">
              <span class="play"></span>
              <video height="100%" width="30%" controls>
                <source src="" type="" />
              </video>
            </div>
            <div class="item">
              <span class="play"></span>
              <video height="100%" width="30%" controls>
                <source src="" type="" />
              </video>
            </div>
            <div class="item">
              <span class="play"></span>
              <video height="100%" width="30%" controls>
                <source src="" type="" />
              </video>
            </div>
          </div>
        </section>
        <section class="watched">
          <h3>Watched</h3>
          <div>
            <span class="play"></span>
            <video height="90%" width="90%" controls>
              <source src="" type="" />
            </video>
          </div>
        </section>
      </div>
    </div>
  </div>
    <script src="./assets/js/script.js"></script>

@endsection