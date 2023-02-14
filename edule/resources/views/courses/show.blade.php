@extends('layouts.front')

@section('title')
    Course Destail
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
                    <li class="active">Courses Details</li>
                </ul>
                <h2 class="title">Courses <span> Details</span></h2>
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
    <div class="section section-padding mt-n10">
        <div class="container">
            <div class="row gx-10">
                <div class="col-lg-8">

                    <!-- Courses Details Start -->
                    <div class="courses-details">

                        <div class="courses-details-images">
                            <img style="max-height: 600px" src="{{ asset("uploads/courses/$course->image") }}"
                                alt="Courses Details">
                            <span class="tags">Finance</span>

                            <div class="courses-play">
                                {{-- <img src="{{ asset('edule/assets/images/courses/circle-shape.png') }}" alt="Play"> --}}
                                {{-- <a class="play video-popup" href="https://www.youtube.com/watch?v=Wif4ZkwC0AM"><i class="flaticon-play"></i></a> --}}
                            </div>
                        </div>

                        <h2 class="title">{{ $course->title }}</h2>

                        <div class="courses-details-admin">
                            <div class="admin-author">
                                <div class="author-thumb">
                                    <img src="{{ asset('edule/assets/images/author/author-01.jpg') }}" alt="Author">
                                </div>
                                <div class="author-content">
                                    <a class="name" href="#">Pamela Foster</a>
                                    <span class="Enroll">286 Enrolled Students</span>
                                </div>
                            </div>
                            <div class="admin-rating">
                                {{-- <span class="rating-count">4.9</span>
                                        <span class="rating-star">
                                                <span class="rating-bar" style="width: 80%;"></span>
                                        </span>
                                        <span class="rating-text">{{ $course->month }}</span> --}}
                            </div>
                        </div>

                        <!-- Courses Details Tab Start -->
                        <div class="courses-details-tab">

                            <!-- Details Tab Menu Start -->
                            <div class="details-tab-menu">
                                <ul class="nav justify-content-center">
                                    <li><button class="active" data-bs-toggle="tab"
                                            data-bs-target="#description">Description</button></li>
                                    <li><button data-bs-toggle="tab" data-bs-target="#instructors">Commont</button></li>
                                </ul>
                            </div>
                            <!-- Details Tab Menu End -->

                            <!-- Details Tab Content Start -->
                            <div class="details-tab-content">
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="description">

                                        <!-- Tab Description Start -->
                                        <div class="tab-description">
                                            <div class="description-wrapper">
                                                <h3 class="tab-title">Description:</h3>
                                                <p>{{ $course->description }}</p>
                                            </div>
                                        </div>
                                        <!-- Tab Description End -->

                                    </div>
                                    <div class="tab-pane fade" id="instructors">

                                        <!-- Tab Instructors Start -->
                                        <div class="tab-instructors">
                                            <h3 class="tab-title">Course Instructor:</h3>

                                            <div class="row">
                                                <div class="col-md-3 col-6">
                                                    <!-- Single Team Start -->
                                                    <div class="single-team">
                                                        <div class="team-thumb">
                                                            <img src="{{ asset('edule/assets/images/author/author-01.jpg') }}"
                                                                alt="Author">
                                                        </div>
                                                        <div class="team-content">
                                                            <div class="rating">
                                                                <span class="count">4.9</span>
                                                                <i class="icofont-star"></i>
                                                                <span class="text">(rating)</span>
                                                            </div>
                                                            <h4 class="name">Margarita James</h4>
                                                            <span class="designation">MSC, Instructor</span>
                                                        </div>
                                                    </div>
                                                    <!-- Single Team End -->
                                                </div>
                                                <div class="col-md-3 col-6">
                                                    <!-- Single Team Start -->
                                                    <div class="single-team">
                                                        <div class="team-thumb">
                                                            <img src="{{ asset('edule/assets/images/author/author-02.jpg') }}"
                                                                alt="Author">
                                                        </div>
                                                        <div class="team-content">
                                                            <div class="rating">
                                                                <span class="count">4.9</span>
                                                                <i class="icofont-star"></i>
                                                                <span class="text">(rating)</span>
                                                            </div>
                                                            <h4 class="name">Mitchell Colon</h4>
                                                            <span class="designation">BBA, Instructor</span>
                                                        </div>
                                                    </div>
                                                    <!-- Single Team End -->
                                                </div>
                                                <div class="col-md-3 col-6">
                                                    <!-- Single Team Start -->
                                                    <div class="single-team">
                                                        <div class="team-thumb">
                                                            <img src="{{ asset('edule/assets/images/author/author-03.jpg') }}"
                                                                alt="Author">
                                                        </div>
                                                        <div class="team-content">
                                                            <div class="rating">
                                                                <span class="count">4.9</span>
                                                                <i class="icofont-star"></i>
                                                                <span class="text">(rating)</span>
                                                            </div>
                                                            <h4 class="name">Sonya Gordon</h4>
                                                            <span class="designation">MBA, Instructor</span>
                                                        </div>
                                                    </div>
                                                    <!-- Single Team End -->
                                                </div>
                                                <div class="col-md-3 col-6">
                                                    <!-- Single Team Start -->
                                                    <div class="single-team">
                                                        <div class="team-thumb">
                                                            <img src="{{ asset('edule/assets/images/author/author-04.jpg') }}"
                                                                alt="Author">
                                                        </div>
                                                        <div class="team-content">
                                                            <div class="rating">
                                                                <span class="count">4.9</span>
                                                                <i class="icofont-star"></i>
                                                                <span class="text">(rating)</span>
                                                            </div>
                                                            <h4 class="name">Archie Neal</h4>
                                                            <span class="designation">BBS, Instructor</span>
                                                        </div>
                                                    </div>
                                                    <!-- Single Team End -->
                                                </div>
                                            </div>

                                            <div class="row gx-10">
                                                <div class="col-lg-6">
                                                    <div class="tab-rating-content">
                                                        <h3 class="tab-title">Rating:</h3>
                                                        <p>Lorem Ipsum is simply dummy text of printing and typesetting
                                                            industry. Lorem Ipsum has been the i dustry's standard dummy
                                                            text ever since the 1500 unknown printer took a galley of type.
                                                        </p>
                                                        <p>Lorem Ipsum is simply dummy text of printing and typesetting
                                                            industry text ever since</p>
                                                        <p>Lorem Ipsum is simply dummy text of printing and dustry's
                                                            standard dummy text ever since the 1500 unknown printer took a
                                                            galley of type.</p>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="tab-rating-box">
                                                        <span class="count">4.8 <i class="icofont-star"></i></span>
                                                        <p>Rating (86K+)</p>

                                                        <div class="rating-box-wrapper">
                                                            <div class="single-rating">
                                                                <span class="rating-star">
                                                                    <span class="rating-bar" style="width: 100%;"></span>
                                                                </span>
                                                                <div class="rating-progress-bar">
                                                                    <div class="rating-line" style="width: 75%;"></div>
                                                                </div>
                                                            </div>

                                                            <div class="single-rating">
                                                                <span class="rating-star">
                                                                    <span class="rating-bar" style="width: 80%;"></span>
                                                                </span>
                                                                <div class="rating-progress-bar">
                                                                    <div class="rating-line" style="width: 90%;"></div>
                                                                </div>
                                                            </div>

                                                            <div class="single-rating">
                                                                <span class="rating-star">
                                                                    <span class="rating-bar" style="width: 60%;"></span>
                                                                </span>
                                                                <div class="rating-progress-bar">
                                                                    <div class="rating-line" style="width: 500%;"></div>
                                                                </div>
                                                            </div>

                                                            <div class="single-rating">
                                                                <span class="rating-star">
                                                                    <span class="rating-bar" style="width: 40%;"></span>
                                                                </span>
                                                                <div class="rating-progress-bar">
                                                                    <div class="rating-line" style="width: 80%;"></div>
                                                                </div>
                                                            </div>

                                                            <div class="single-rating">
                                                                <span class="rating-star">
                                                                    <span class="rating-bar" style="width: 20%;"></span>
                                                                </span>
                                                                <div class="rating-progress-bar">
                                                                    <div class="rating-line" style="width: 40%;"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Tab Instructors End -->

                                    </div>
                                </div>
                            </div>
                            <!-- Details Tab Content End -->

                        </div>
                        <!-- Courses Details Tab End -->

                    </div>
                    <!-- Courses Details End -->
                    
                </div>




                <div class="col-lg-4">
                    <!-- Courses Details Sidebar Start -->
                    <div class="sidebar">

                        <!-- Sidebar Widget Information Start -->
                        <div class="sidebar-widget widget-information">
                            <div class="info-price">
                                <span class="price">{{ $course->price }}</span>
                            </div>
                            <div class="info-list">
                                <ul>
                                    {{-- <li><i class="icofont-man-in-glasses"></i> <strong>Reseption</strong> <span>Pamela Foster</span></li> --}}
                                    <li><i class="icofont-clock-time"></i> <strong>Duration</strong>
                                        <span>{{ $course->month }}</span></li>
                                    {{-- <li><i class="icofont-ui-video-play"></i> <strong>Lectures</strong> <span>29</span></li> --}}
                                    {{-- <li><i class="icofont-bars"></i> <strong>Level</strong> <span>Secondary</span></li> --}}
                                    {{-- <li><i class="icofont-book-alt"></i> <strong>Language</strong> <span>English</span></li> --}}
                                    <li><i class="icofont-certificate-alt-1"></i> <strong>Certificate</strong>
                                        <span>{{ $course->Certificate }}</span></li>
                                </ul>
                            </div>
                            <div class="info-btn">
                                <a href="#" class="btn btn-primary btn-hover-dark">Enroll Now</a>
                            </div>
                        </div>
                        <!-- Sidebar Widget Information End -->

                        <!-- Sidebar Widget Share Start -->
                        <div class="sidebar-widget">
                            <h4 class="widget-title">Share Course:</h4>

                            <ul class="social">
                                <li><a href="#"><i class="flaticon-facebook"></i></a></li>
                                <li><a href="#"><i class="flaticon-linkedin"></i></a></li>
                                <li><a href="#"><i class="flaticon-twitter"></i></a></li>
                                <li><a href="#"><i class="flaticon-skype"></i></a></li>
                                <li><a href="#"><i class="flaticon-instagram"></i></a></li>
                            </ul>
                        </div>
                        <!-- Sidebar Widget Share End -->

                    </div>
                    <!-- Courses Details Sidebar End -->
                </div>
            </div>
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
