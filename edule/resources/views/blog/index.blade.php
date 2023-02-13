@extends('layouts.front')

@section('title')
    Blog
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
            <h2 class="title">Our <span>Blog</span></h2>
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

<!-- Blog Start -->
<div class="section section-padding mt-n10">
    <div class="container">

        <!-- Blog Wrapper Start -->
        <div class="blog-wrapper">
            <div class="row">
                <div class="col-lg-4 col-md-6">

                    <!-- Single Blog Start -->
                    <div class="single-blog">
                        <div class="blog-image">
                            <a href="{{ route('blog.show', 1) }}"><img src="{{ asset('edule/assets/images/blog/blog-01.jpg') }}" alt="Blog"></a>
                        </div>
                        <div class="blog-content">
                            <div class="blog-author">
                                <div class="author">
                                    <div class="author-thumb">
                                        <a href="#"><img src="{{ asset('edule/assets/images/author/author-01.jpg') }}" alt="Author"></a>
                                    </div>
                                    <div class="author-name">
                                        <a class="name" href="#">Jason Williams</a>
                                    </div>
                                </div>
                                <div class="tag">
                                    <a href="#">Science</a>
                                </div>
                            </div>

                            <h4 class="title"><a href="blog-details-left-sidebar.html">Data Science and Machine Learning with Python - Hands On!</a></h4>

                            <div class="blog-meta">
                                <span> <i class="icofont-calendar"></i> 21 March, 2021</span>
                                <span> <i class="icofont-heart"></i> 2,568+ </span>
                            </div>

                            <a href="blog-details-left-sidebar.html" class="btn btn-secondary btn-hover-primary">Read More</a>
                        </div>
                    </div>
                    <!-- Single Blog End -->

                </div>
                <div class="col-lg-4 col-md-6">

                    <!-- Single Blog Start -->
                    <div class="single-blog">
                        <div class="blog-image">
                            <a href="blog-details-left-sidebar.html"><img src="{{ asset('edule/assets/images/blog/blog-02.jpg') }}" alt="Blog"></a>
                        </div>
                        <div class="blog-content">
                            <div class="blog-author">
                                <div class="author">
                                    <div class="author-thumb">
                                        <a href="#"><img src="{{ asset('edule/assets/images/author/author-02.jpg') }}" alt="Author"></a>
                                    </div>
                                    <div class="author-name">
                                        <a class="name" href="#">Pamela Foster</a>
                                    </div>
                                </div>
                                <div class="tag">
                                    <a href="#">UX Design</a>
                                </div>
                            </div>

                            <h4 class="title"><a href="blog-details-left-sidebar.html">Create Amazing Color Schemes for Your UX Design Projects</a></h4>

                            <div class="blog-meta">
                                <span> <i class="icofont-calendar"></i> 21 March, 2021</span>
                                <span> <i class="icofont-heart"></i> 2,568+ </span>
                            </div>

                            <a href="blog-details-left-sidebar.html" class="btn btn-secondary btn-hover-primary">Read More</a>
                        </div>
                    </div>
                    <!-- Single Blog End -->

                </div>
                <div class="col-lg-4 col-md-6">

                    <!-- Single Blog Start -->
                    <div class="single-blog">
                        <div class="blog-image">
                            <a href="blog-details-left-sidebar.html"><img src="{{ asset('edule/assets/images/blog/blog-03.jpg') }}" alt="Blog"></a>
                        </div>
                        <div class="blog-content">
                            <div class="blog-author">
                                <div class="author">
                                    <div class="author-thumb">
                                        <a href="#"><img src="{{ asset('edule/assets/images/author/author-03.jpg') }}" alt="Author"></a>
                                    </div>
                                    <div class="author-name">
                                        <a class="name" href="#">Patricia Collins</a>
                                    </div>
                                </div>
                                <div class="tag">
                                    <a href="#">Business</a>
                                </div>
                            </div>

                            <h4 class="title"><a href="blog-details-left-sidebar.html">Culture & Leadership: Strategies for a Successful Business</a></h4>

                            <div class="blog-meta">
                                <span> <i class="icofont-calendar"></i> 21 March, 2021</span>
                                <span> <i class="icofont-heart"></i> 2,568+ </span>
                            </div>

                            <a href="blog-details-left-sidebar.html" class="btn btn-secondary btn-hover-primary">Read More</a>
                        </div>
                    </div>
                    <!-- Single Blog End -->

                </div>
                <div class="col-lg-4 col-md-6">

                    <!-- Single Blog Start -->
                    <div class="single-blog">
                        <div class="blog-image">
                            <a href="blog-details-left-sidebar.html"><img src="{{ asset('edule/assets/images/blog/blog-04.jpg') }}" alt="Blog"></a>
                        </div>
                        <div class="blog-content">
                            <div class="blog-author">
                                <div class="author">
                                    <div class="author-thumb">
                                        <a href="#"><img src="{{ asset('edule/assets/images/author/author-04.jpg') }}" alt="Author"></a>
                                    </div>
                                    <div class="author-name">
                                        <a class="name" href="#">Archie Neal</a>
                                    </div>
                                </div>
                                <div class="tag">
                                    <a href="#">Science</a>
                                </div>
                            </div>

                            <h4 class="title"><a href="blog-details-left-sidebar.html">Data Science and Machine Learning with Python - Hands On!</a></h4>

                            <div class="blog-meta">
                                <span> <i class="icofont-calendar"></i> 21 March, 2021</span>
                                <span> <i class="icofont-heart"></i> 2,568+ </span>
                            </div>

                            <a href="blog-details-left-sidebar.html" class="btn btn-secondary btn-hover-primary">Read More</a>
                        </div>
                    </div>
                    <!-- Single Blog End -->

                </div>
                <div class="col-lg-4 col-md-6">

                    <!-- Single Blog Start -->
                    <div class="single-blog">
                        <div class="blog-image">
                            <a href="blog-details-left-sidebar.html"><img src="{{ asset('edule/assets/images/blog/blog-05.jpg') }}" alt="Blog"></a>
                        </div>
                        <div class="blog-content">
                            <div class="blog-author">
                                <div class="author">
                                    <div class="author-thumb">
                                        <a href="#"><img src="{{ asset('edule/assets/images/author/author-05.jpg') }}" alt="Author"></a>
                                    </div>
                                    <div class="author-name">
                                        <a class="name" href="#">Randal Ramsey</a>
                                    </div>
                                </div>
                                <div class="tag">
                                    <a href="#">UX Design</a>
                                </div>
                            </div>

                            <h4 class="title"><a href="blog-details-left-sidebar.html">Create Amazing Color Schemes for Your UX Design Projects</a></h4>

                            <div class="blog-meta">
                                <span> <i class="icofont-calendar"></i> 21 March, 2021</span>
                                <span> <i class="icofont-heart"></i> 2,568+ </span>
                            </div>

                            <a href="blog-details-left-sidebar.html" class="btn btn-secondary btn-hover-primary">Read More</a>
                        </div>
                    </div>
                    <!-- Single Blog End -->

                </div>
                <div class="col-lg-4 col-md-6">

                    <!-- Single Blog Start -->
                    <div class="single-blog">
                        <div class="blog-image">
                            <a href="blog-details-left-sidebar.html"><img src="{{ asset('edule/assets/images/blog/blog-06.jpg') }}" alt="Blog"></a>
                        </div>
                        <div class="blog-content">
                            <div class="blog-author">
                                <div class="author">
                                    <div class="author-thumb">
                                        <a href="#"><img src="{{ asset('edule/assets/images/author/author-06.jpg') }}" alt="Author"></a>
                                    </div>
                                    <div class="author-name">
                                        <a class="name" href="#">Rochelle Thomas</a>
                                    </div>
                                </div>
                                <div class="tag">
                                    <a href="#">Business</a>
                                </div>
                            </div>

                            <h4 class="title"><a href="blog-details-left-sidebar.html">Culture & Leadership: Strategies for a Successful Business</a></h4>

                            <div class="blog-meta">
                                <span> <i class="icofont-calendar"></i> 21 March, 2021</span>
                                <span> <i class="icofont-heart"></i> 2,568+ </span>
                            </div>

                            <a href="blog-details-left-sidebar.html" class="btn btn-secondary btn-hover-primary">Read More</a>
                        </div>
                    </div>
                    <!-- Single Blog End -->

                </div>
                <div class="col-lg-4 col-md-6">

                    <!-- Single Blog Start -->
                    <div class="single-blog">
                        <div class="blog-image">
                            <a href="blog-details-left-sidebar.html"><img src="{{ asset('edule/assets/images/blog/blog-07.jpg') }}" alt="Blog"></a>
                        </div>
                        <div class="blog-content">
                            <div class="blog-author">
                                <div class="author">
                                    <div class="author-thumb">
                                        <a href="#"><img src="{{ asset('edule/assets/images/author/author-07.jpg') }}" alt="Author"></a>
                                    </div>
                                    <div class="author-name">
                                        <a class="name" href="#">Della Salazar</a>
                                    </div>
                                </div>
                                <div class="tag">
                                    <a href="#">Science</a>
                                </div>
                            </div>

                            <h4 class="title"><a href="blog-details-left-sidebar.html">Data Science and Machine Learning with Python - Hands On!</a></h4>

                            <div class="blog-meta">
                                <span> <i class="icofont-calendar"></i> 21 March, 2021</span>
                                <span> <i class="icofont-heart"></i> 2,568+ </span>
                            </div>

                            <a href="blog-details-left-sidebar.html" class="btn btn-secondary btn-hover-primary">Read More</a>
                        </div>
                    </div>
                    <!-- Single Blog End -->

                </div>
                <div class="col-lg-4 col-md-6">

                    <!-- Single Blog Start -->
                    <div class="single-blog">
                        <div class="blog-image">
                            <a href="blog-details-left-sidebar.html"><img src="{{ asset('edule/assets/images/blog/blog-08.jpg') }}" alt="Blog"></a>
                        </div>
                        <div class="blog-content">
                            <div class="blog-author">
                                <div class="author">
                                    <div class="author-thumb">
                                        <a href="#"><img src="{{ asset('edule/assets/images/author/author-08.jpg') }}" alt="Author"></a>
                                    </div>
                                    <div class="author-name">
                                        <a class="name" href="#">Ricardo Patrick</a>
                                    </div>
                                </div>
                                <div class="tag">
                                    <a href="#">UX Design</a>
                                </div>
                            </div>

                            <h4 class="title"><a href="blog-details-left-sidebar.html">Create Amazing Color Schemes for Your UX Design Projects</a></h4>

                            <div class="blog-meta">
                                <span> <i class="icofont-calendar"></i> 21 March, 2021</span>
                                <span> <i class="icofont-heart"></i> 2,568+ </span>
                            </div>

                            <a href="blog-details-left-sidebar.html" class="btn btn-secondary btn-hover-primary">Read More</a>
                        </div>
                    </div>
                    <!-- Single Blog End -->

                </div>
                <div class="col-lg-4 col-md-6">

                    <!-- Single Blog Start -->
                    <div class="single-blog">
                        <div class="blog-image">
                            <a href="blog-details-left-sidebar.html"><img src="{{ asset('edule/assets/images/blog/blog-09.jpg') }}" alt="Blog"></a>
                        </div>
                        <div class="blog-content">
                            <div class="blog-author">
                                <div class="author">
                                    <div class="author-thumb">
                                        <a href="#"><img src="{{ asset('edule/assets/images/author/author-09.jpg') }}" alt="Author"></a>
                                    </div>
                                    <div class="author-name">
                                        <a class="name" href="#">Kurt Stewart</a>
                                    </div>
                                </div>
                                <div class="tag">
                                    <a href="#">Business</a>
                                </div>
                            </div>

                            <h4 class="title"><a href="blog-details-left-sidebar.html">Culture & Leadership: Strategies for a Successful Business</a></h4>

                            <div class="blog-meta">
                                <span> <i class="icofont-calendar"></i> 21 March, 2021</span>
                                <span> <i class="icofont-heart"></i> 2,568+ </span>
                            </div>

                            <a href="blog-details-left-sidebar.html" class="btn btn-secondary btn-hover-primary">Read More</a>
                        </div>
                    </div>
                    <!-- Single Blog End -->

                </div>
            </div>
        </div>
        <!-- Blog Wrapper End -->

        <!-- Page Pagination End -->
        <div class="page-pagination">
            <ul class="pagination justify-content-center">
                <li><a href="#"><i class="icofont-rounded-left"></i></a></li>
                <li><a class="active" href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#"><i class="icofont-rounded-right"></i></a></li>
            </ul>
        </div>
        <!-- Page Pagination End -->

    </div>
</div>
<!-- Blog End -->

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