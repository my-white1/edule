@extends('layouts.front')

@section('title')
    Courses
@endsection

@section('content')
    <!-- Page Banner Start -->
    <div class="section page-banner">

        <img class="shape-1 animation-round" src="{{ asset('edule/assets/images/shape/shape-8.png') }}" alt="Shape">

        <img class="shape-2" src="{{ asset('edule/assets/images/shape/shape-23.png') }}" alt="Shape">

        <div class="container">
            <!-- Page Banner Start -->
            <div class="page-banner-content">
                <ul class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li class="active">Courses</li>
                </ul>
                <h2 class="title"><span>Courses</span></h2>
            </div>
            <!-- Page Banner End -->
        </div>

        <!-- Shape Icon Box Start -->
        <div class="shape-icon-box">

            <img class="icon-shape-1 animation-left" src="{{ asset('edule/assets/images/shape/shape-5.png') }}"
                alt="Shape">

            <div class="box-content">
                <div class="box-wrapper">
                    <i class="flaticon-badge"></i>
                </div>
            </div>

            <img class="icon-shape-2" src="{{ asset('edule/assets/images/shape/shape-6.png') }}" alt="Shape">

        </div>
        <!-- Shape Icon Box End -->

        <img class="shape-3" src="{{ asset('edule/assets/images/shape/shape-24.png') }}" alt="Shape">

        <img class="shape-author" src="{{ asset('edule/assets/images/author/author-11.jpg') }}" alt="Shape">

    </div>
    <!-- Page Banner End -->

    <!-- Courses Start -->
    <div class="section section-padding">
        <div class="container">

            <!-- Courses Category Wrapper Start  -->
            <div class="courses-category-wrapper">
                <div class="courses-search search-2">
                    <input type="text" placeholder="Search here">
                    <button><i class="icofont-search"></i></button>
                </div>

                <ul class="category-menu">
                    <li><a class="active" href="#">All Courses</a></li>
                    {{-- <li><a href="#">Full-stack</a></li> --}}
                    {{-- <li><a href="#">Backend</a></li> --}}
                    {{-- <li><a href="#">Frontend</a></li> --}}
                </ul>
            </div>
            <!-- Courses Category Wrapper End  -->

            <!-- Courses Wrapper Start  -->
            <div class="courses-wrapper-02">
                <div class="row">
                    @foreach ($courses as $course)
                        <div class="col-lg-4 col-md-6">
                            <!-- Single Courses Start -->
                            <div class="single-courses">
                                <div class="courses-images">
                                    <a href="{{ route('course.show', $course->id) }}"><img
                                            src="{{ asset("uploads/courses/$course->image") }}" alt="Courses"></a>
                                </div>
                                <div class="courses-content">
                                    <div class="courses-author">
                                        <div class="author">
                                            <div class="author-thumb">
                                                <a href="#"><img
                                                        src="{{ asset('edule/assets/images/author/author-01.jpg') }}"
                                                        alt="Author"></a>
                                            </div>
                                            <div class="author-name">
                                                <a class="name" href="#">Jason Williams</a>
                                            </div>
                                        </div>
                                        <div class="tag">
                                            <a href="#">Science</a>
                                        </div>
                                    </div>

                                    <h4 class="title"><a
                                            href="{{ route('course.show', $course->id) }}">{{ $course->title }}</a>
                                    </h4>
                                    <div class="courses-meta">
                                        <span> <i class="icofont-clock-time"></i>
                                            {{ $course->created_at->format('m/d/Y') }}</span>
                                        <span> <i class="icofont-read-book"></i> {{ $course->month }} </span>
                                    </div>
                                    <div class="courses-price-review">
                                        <div class="courses-price">
                                            <span class="sale-parice">{{ $course->price }}</span>
                                            {{-- <span class="old-parice">$440.00</span> --}}
                                        </div>
                                        <div class="courses-review">
                                            {{-- <span class="rating-count">{{ $course->group->room->title }}</span> --}}
                                            {{-- <span class="rating-star">
                                                        <span class="rating-bar" style="width: 80%;"></span>
                                                    </span> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Courses End -->
                        </div>
                    @endforeach
                </div>
            </div>
            <!-- Courses Wrapper End  -->

        </div>
    </div>
    <!-- Courses End -->

    <!-- Download App Start -->
    <div class="section section-padding download-section">

        <div class="app-shape-1"></div>
        <div class="app-shape-2"></div>
        <div class="app-shape-3"></div>
        <div class="app-shape-4"></div>

        <div class="container">

            <!-- Download App Wrapper Start -->
            <div class="download-app-wrapper mt-n6">

                <!-- Section Title Start -->
                <div class="section-title section-title-white">
                    <h5 class="sub-title">Ready to start?</h5>
                    <h2 class="main-title">Download our mobile app. for easy to start your course.</h2>
                </div>
                <!-- Section Title End -->

                <img class="shape-1 animation-right" src="{{ asset('edule/assets/images/shape/shape-14.png') }}"
                    alt="Shape">

                <!-- Download App Button End -->
                <div class="download-app-btn">
                    <ul class="app-btn">
                        <li><a href="#"><img src="{{ asset('edule/assets/images/google-play.png') }}"
                                    alt="Google Play"></a></li>
                        <li><a href="#"><img src="{{ asset('edule/assets/images/app-store.png') }}"
                                    alt="App Store"></a></li>
                    </ul>
                </div>
                <!-- Download App Button End -->

            </div>
            <!-- Download App Wrapper End -->

        </div>
    </div>
    <!-- Download App End -->
@endsection
