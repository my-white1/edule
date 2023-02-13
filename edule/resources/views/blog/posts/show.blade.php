@extends('layouts.front')

@section('title')
    Post Show
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
                    <li class="active">Blog</li>
                </ul>
                <h2 class="title">The principles every <span>UI/UX</span> designer needs.</h2>
            </div>
            <!-- Page Banner End -->
        </div>

        <!-- Shape Icon Box Start -->
        <div class="shape-icon-box">

            <img class="icon-shape-1 animation-left" src="{{ asset('edule/assets/images/shape/shape-5.png') }}" alt="Shape">

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

    <!-- Blog Details Start -->
    <div class="section section-padding mt-n10">
        <div class="container">

            <div class="row flex-row-reverse gx-10">
                <div class="col-lg-12">

                    <!-- Blog Details Wrapper Start -->
                    <div class="blog-details-wrapper">
                        <div class="blog-details-admin-meta">
                            <div class="author">
                                <div class="author-thumb">
                                    <a href="#"><img src="{{ asset('edule/assets/images/author/author-01.jpg') }}" alt="Author"></a>
                                </div>
                                <div class="author-name">
                                    <a class="name" href="#">Jason Williams</a>
                                </div>
                            </div>
                            <div class="blog-meta">
                                <span> <i class="icofont-calendar"></i> 21 March, 2021</span>
                                <span> <i class="icofont-heart"></i> 2,568+ </span>
                                <span class="tag"><a href="#">Science</a></span>
                            </div>
                        </div>

                        <h2 class="title">I will touch upon the Intrinsic and germane type as think that these are the most applicable to UX design.</h2>

                        <div class="blog-details-description">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>

                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting ndustry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s when an unknown printer took a galley of type and crambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularsed in the 1960 with release containing Lorem Ipsum passages desktop publishing software.</p>

                            <img src="assets/images/blog/blog-details.jpg" alt="Blog Details">

                            <h3>Intrinsic Cognitive Load</h3>

                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>

                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularsed in the 1960 with release containing Lorem Ipsum passages desktop publishing software.</p>

                            <h3>A very nice example of Hick’s Law that applies to user experience design are lists:</h3>

                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularsed in the 1960 with release containing Lorem Ipsum passages desktop publishing software.</p>

                            <h3>Law of Proximity</h3>

                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularsed in the 1960 with release containing Lorem Ipsum passages desktop publishing software.</p>

                            <blockquote class="blockquote">
                                <span class="quote">“</span>
                                <p>Lorem Ipsum is simply dummy text of the printing and types industry's standard dummy text ever since the 1500s when scrambled it to make a type specimen book.</p>
                            </blockquote>

                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularsed in the 1960 with release containing Lorem Ipsum passages desktop publishing software.</p>

                        </div>


                        <div class="blog-details-label">
                            <h4 class="label">Share:</h4>
                            <ul class="social">
                                <li><a href="#"><i class="flaticon-facebook"></i></a></li>
                                <li><a href="#"><i class="flaticon-linkedin"></i></a></li>
                                <li><a href="#"><i class="flaticon-twitter"></i></a></li>
                                <li><a href="#"><i class="flaticon-skype"></i></a></li>
                                <li><a href="#"><i class="flaticon-instagram"></i></a></li>
                            </ul>
                        </div>

                    </div>
                    <!-- Blog Details Wrapper End -->

                    <!-- Blog Details Comment End -->
                    <div class="blog-details-comment">
                        <div class="comment-wrapper">
                            <h3 class="title">Comments (03)</h3>

                            <ul class="comment-items">
                                <li>
                                    <!-- Single Comment Start -->
                                    <div class="single-comment">
                                        <div class="comment-author">
                                            <div class="author-thumb">
                                                <img src="{{ asset('edule/assets/images/author/author-01.jpg') }}" alt="Author">
                                            </div>
                                            <div class="author-content">
                                                <h4 class="name">Sara Alexander</h4>
                                                <div class="meta">
                                                    <span class="designation">Product Designer, USA</span>
                                                    <span class="time">35 minutes ago</span>
                                                </div>
                                            </div>
                                        </div>
                                        <p>Lorem Ipsum has been the industry's standard dummy text since the 1500 when unknown printer took a galley type and scrambled to make type specimen’s book has survived not five centuries but also the leap into electronic type and book.</p>
                                        <a href="#" class="reply"> <i class="icofont-reply"></i> Reply</a>
                                    </div>
                                    <!-- Single Comment End -->

                                    <ul class="comment-reply">
                                        <li>
                                            <!-- Single Comment Start -->
                                            <div class="single-comment">
                                                <div class="comment-author">
                                                    <div class="author-thumb">
                                                        <img src="{{ asset('edule/assets/images/author/author-03.jpg') }}" alt="Author">
                                                    </div>
                                                    <div class="author-content">
                                                        <h4 class="name">Robert Morgan</h4>
                                                        <div class="meta">
                                                            <span class="designation">Product Designer, USA</span>
                                                            <span class="time">35 minutes ago</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <p>Lorem Ipsum has been the industry's standard dumm text since the 1500 when printer took a galley type and scrambled to make type specimen book survived centuries but also the electronic type and book.</p>
                                                <a href="#" class="reply"> <i class="icofont-reply"></i> Reply</a>
                                            </div>
                                            <!-- Single Comment End -->
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <!-- Single Comment Start -->
                                    <div class="single-comment">
                                        <div class="comment-author">
                                            <div class="author-thumb">
                                                <img src="{{ asset('edule/assets/images/author/author-07.jpg') }}" alt="Author">
                                            </div>
                                            <div class="author-content">
                                                <h4 class="name">Rochelle Hunt</h4>
                                                <div class="meta">
                                                    <span class="designation">Product Designer, USA</span>
                                                    <span class="time">35 minutes ago</span>
                                                </div>
                                            </div>
                                        </div>
                                        <p>Lorem Ipsum has been the industry's standard dummy text since the 1500 when unknown printer took a galley type and scrambled to make type specimen’s book has survived not five centuries but also the leap into electronic type and book.</p>
                                        <a href="#" class="reply"> <i class="icofont-reply"></i> Reply</a>
                                    </div>
                                    <!-- Single Comment End -->
                                </li>
                            </ul>
                        </div>
                        <div class="comment-form">
                            <h3 class="title">Leave a comment</h3>

                            <!-- Form Wrapper Start -->
                            <div class="form-wrapper">
                                <form action="#">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <!-- Form Wrapper Start -->
                                            <div class="single-form">
                                                <input type="text" placeholder="Name">
                                            </div>
                                            <!-- Form Wrapper End -->
                                        </div>
                                        <div class="col-md-6">
                                            <!-- Form Wrapper Start -->
                                            <div class="single-form">
                                                <input type="email" placeholder="Email">
                                            </div>
                                            <!-- Form Wrapper End -->
                                        </div>
                                        <div class="col-md-12">
                                            <!-- Form Wrapper Start -->
                                            <div class="single-form">
                                                <textarea placeholder="Massage"></textarea>
                                            </div>
                                            <!-- Form Wrapper End -->
                                        </div>
                                        <div class="col-md-12">
                                            <!-- Form Wrapper Start -->
                                            <div class="single-form text-center">
                                                <button class="btn btn-primary btn-hover-dark">Submit Now</button>
                                            </div>
                                            <!-- Form Wrapper End -->
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- Form Wrapper End -->
                        </div>
                    </div>
                    <!-- Blog Details Comment End -->

                </div>
               
            </div>

        </div>
    </div>
    <!-- Blog Details End -->

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

                <img class="shape-1 animation-right" src="{{ asset('edule/assets/images/shape/shape-14.png') }}" alt="Shape">

                <!-- Download App Button End -->
                <div class="download-app-btn">
                    <ul class="app-btn">
                        <li><a href="#"><img src="{{ asset('edule/assets/images/google-play.png') }}" alt="Google Play"></a></li>
                        <li><a href="#"><img src="{{ asset('edule/assets/images/app-store.png') }}" alt="App Store"></a></li>
                    </ul>
                </div>
                <!-- Download App Button End -->

            </div>
            <!-- Download App Wrapper End -->

        </div>
    </div>
    <!-- Download App End -->

    @endsection