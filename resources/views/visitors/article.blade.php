@extends('visitorslayout.layout')
@include('csslayout.aboutcss')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
    integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
@include('csslayout.aboutcss')
@section('body')
    @include('csslayout.navbar')
    <section class="heading">
        <div class="article_header">
            <main class="article-content">
                <h1>{{ $courses->course }}</h1>
                <span><i class="fa fa-graduation-cap" aria-hidden="true"></i>
                    {{ $paidcourses != null ? $paidcourses->count() : 0 }} Students</span><span><i class="fa fa-briefcase"
                        aria-hidden="true"></i>Access duration {{ $courses->maxduation }}</span><span><i class="fa fa-users"
                        aria-hidden="true"></i>{{ $reviews != null ? $reviews->count() : 0 }} Reviews </span>
                <h2>Price &#8358;{{ $courses->price }}</h2>
            </main>
            <main class="article-img">
                <img src="{{ asset('storage/course/' . $courses->courseimage) }}" alt="">
                </figure>

        </div>
    </section>
    <!-- blog-post-section -->
    <section class="blog__post">
        <div class="blog_post_item1">
            <main>
                <h3>what you will learn</h3>
                <ul>
                    @if ($wywl)
                        @foreach ($wywl as $l)
                            <li>{{ $l->youwilllearn }}</li>
                        @endforeach
                    @endif

                </ul>
            </main>
            <main>
                <h3>requirments</h3>
                <ul>

                    <li>{{ $courses->prerequisite }}</li>

                </ul>
                <h3>description</h3>
                <ul>
                    <p>
                        <li>{{ $courses->description }}</li>
                    </p>


                </ul>
            </main>
        </div>
        <div class="blog_post_item2">
            <div
                class="accord"style="display:flex;justify-content:center;align-items:center;margin:10px;flex-direction:column;">
                <h1>Courses outline
                </h1>
                <div class="spannty-cont">
                    <div class="spain"></div>
                    <div class="spanny"></div>
                    <div class="spain"></div>
                </div>
                <div class="accordion">
                    @if ($coutline != null)
                        @foreach ($coutline as $outline)
                            <div class="accordion-content">
                                <header>
                                    <span class="title">{{ $outline->outline }}?</span>
                                    <i class="fa-solid fa-plus"></i>
                                </header>

                                <p class="description">
                                    {{ $outline->description }} </p>
                            </div>
                        @endforeach
                    @endif




                </div>
    </section>

    <section class="review_instruct">
        <div class="review__item">
            <div style="display:flex; justify-content:space-between;padding: 10px;">
                <h4>Reviews</h4>
                <p style="font-size: 16px"><a href="#">See More</a></p>
            </div>
            @if ($reviews != null)
                @foreach ($reviews as $r)
                    <main class="rew" style="display: flex;align-items: center;">
                        <img src="{{ asset('storage/reviewpic/'.$r->pic) }}" alt=""
                            style="display: block;width:60px;height:60px;border-radius: 50%;margin-right: 10px;">
                        <div>
                            <span style="display: block;">
                                @for ($i = 0; $i < $r->star; $i++)
                                    <i class="fa-solid fa-star"></i>
                                @endfor
                            </span>
                            <h4>{{ $r->name }}</h4>
                            <p>{{ $r->review }}</p>
                        </div>
                    </main>
                @endforeach
            @endif



        </div>
        <div class="review__item1">
            <h4>Instructor</h4>
            <div class="instructor">
                <main class="ins__prof">
                    <h3>{{ $tutor ? $tutor->name : 'NOT AVAILABLE' }}</h3>
                </main>
                <img src="{{ asset('storage/profile/'.($tutor ? $tutor->pic : 'NOT AVAILABLE' )) }}" alt="">
                <main class="ins__prof1">
                    <p>{{ $tutor ? $tutor->description : 'NOT AVAILABLE' }}</p>
                </main>
                <main class="teacher_icon">
                    <a href="facebook.com/{{ $tutor ? $tutor->facebook : 'NOT AVAILABLE' }}">
                        <i class="fa-brands fa-facebook"></i></a>
                    <a href="twitter.com/{{ $tutor ? $tutor->twitter : 'NOT AVAILABLE' }}"> <i
                            class="fa-brands fa-twitter"></i></a>
                    <a
                        href="https://api.whatsapp.com/send?phone=8124946594&text=Good%20day!%20please%20i%20need%20assistance">
                        <i class="fa-brands fa-whatsapp"></i></a>
                    <a href="instagram.com/{{ $tutor ? $tutor->instagram : 'NOT AVAILABLE' }}"> <i
                            class="fa-brands fa-instagram"></i></a>
                </main>
            </div>
        </div>
    </section>
    <script src="{{ asset('assets/js/about.js') }}"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="{{ asset('assets/js/swiper-bundle.js') }}"></script>
@endsection
