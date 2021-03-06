@extends('layouts.customer.customerLendingHome')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="section_title text-center mb-50">
                    <h3>Explore Our Solutions</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-4 col-md-4">
                <div class="single_service service_bg_1">
                    <div class="service_hover">
                        <img src="{{asset('customerLendingHome/img/svg_icon/legal-paper.svg')}}" alt="">
                        <h3>Invoicing</h3>
                        <div class="hover_content">
                            <div class="hover_content_inner">
                                <h4>Invoicing</h4>
                                <p>These cases are perfectly simple and easy to distinguish. In a free hour power.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-4">
                <div class="single_service service_bg_2">
                    <div class="service_hover">
                        <img src="img/svg_icon/case.svg" alt="">
                        <h3>Business Growth</h3>
                        <div class="hover_content">
                            <div class="hover_content_inner">
                                <h4>Business Growth</h4>
                                <p>These cases are perfectly simple and easy to distinguish. In a free hour power.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-4">
                <div class="single_service service_bg_3">
                    <div class="service_hover">
                        <img src="{{asset('customerLendingHome/img/svg_icon/survey.svg')}}" alt="">
                        <h3>Problem Solving</h3>
                        <div class="hover_content">
                            <div class="hover_content_inner">
                                <h4>Problem Solving</h4>
                                <p>These cases are perfectly simple and easy to distinguish. In a free hour power.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="about_area ">
        <div class="container-fluid p-0">
            <div class="row no-gutters align-items-center">
                <div class="col-xl-6 col-lg-6">
                    <div class="about_image">
                        <img src="{{asset('customerLendingHome/img/about/about.png')}}" alt="">
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="about_info">
                        <h3>The Largest Business Expert</h3>
                        <p>These cases are perfectly simple and easy to distinguish. In a free hour, <br> when our power of choice is untrammelled and when nothing prevents <br> our being able to do what we like best.</p>
                        <ul>
                            <li> Apartments frequently or motionless. </li>
                            <li> Duis aute irure dolor in reprehenderit in voluptate. </li>
                            <li> Voluptatem quia voluptas sit aspernatur.</li>
                        </ul>

                        <div class="about_btn">
                            <a class="boxed-btn3" href="#">About Us</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!--/ about  -->

    <!-- counter  -->
    <div class="counter_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-md-4">
                    <div class="single_counter text-center">
                        <h3> <span class="counter" >520</span> <span>+</span> </h3>
                        <span>Total Projects</span>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4">
                    <div class="single_counter text-center">
                        <h3> <span class="counter" >244</span>  </h3>
                        <span>On Going Projects</span>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4">
                    <div class="single_counter text-center">
                        <h3> <span class="counter" >95</span> <span>%</span> </h3>
                        <span>Job Success</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ counter  -->


    <!-- gallery -->
    <div class="gallery_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title text-center mb-50">
                        <h3>Our Recent Works</h3>
                        <p>These cases are perfectly simple and easy to distinguish. In a free <br> hour, when our power of choice is untrammelled.</p>
                    </div>
                </div>
            </div>

            <div class="row grid">
                <div class="col-xl-4 col-lg-6 grid-item cat1 col-md-6">
                    <div class="single-gallery mb-20">
                        <div class="portfolio-img">
                            <img src="{{asset('customerLendingHome/img/gallery/1.png')}}" alt="">
                        </div>
                        <div class="gallery_hover">
                            <a  href="portfolio_details.html" class="hover_inner">
                                <h3>Product Branding</h3>
                                <span>Branding</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 grid-item cat3 cat4 col-md-6">
                    <div class="single-gallery mb-20">
                        <div class="portfolio-img">
                            <img src="{{asset('customerLendingHome/img/gallery/2.png')}}" alt="">
                        </div>
                        <div class="gallery_hover">
                            <a  href="portfolio_details.html" class="hover_inner">
                                <h3>Product Branding</h3>
                                <span>Branding</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 grid-item cat4 col-md-6">
                    <div class="single-gallery mb-20">
                        <div class="portfolio-img">
                            <img src="{{asset('customerLendingHome/img/gallery/3.png')}}" alt="">
                        </div>
                        <div class="gallery_hover">
                            <a  href="portfolio_details.html" class="hover_inner">
                                <h3>Product Branding</h3>
                                <span>Branding</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-6 grid-item cat2 col-md-6">
                    <div class="single-gallery mb-20">
                        <div class="portfolio-img">
                            <img src="{{asset('customerLendingHome/img/gallery/4.png')}}" alt="">
                        </div>
                        <div class="gallery_hover">
                            <a  href="portfolio_details.html" class="hover_inner">
                                <h3>Product Branding</h3>
                                <span>Branding</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 grid-item cat2 col-md-6">
                    <div class="single-gallery mb-20">
                        <div class="portfolio-img">
                            <img src="{{asset('customerLendingHome/img/gallery/5.png')}}" alt="">
                        </div>
                        <div class="gallery_hover">
                            <a  href="portfolio_details.html" class="hover_inner">
                                <h3>Product Branding</h3>
                                <span>Branding</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="More_Works_btn text-center">
                        <a class="boxed-btn3-green-2" href="#">More Works</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ gallery -->

    <!-- about wrap  -->
    <div class="about_wrap_area about_bg_1">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-md-6 col-lg-4">
                    <div class="single_service_wrap text-center">
                        <img src="{{asset('customerLendingHome/img/svg_icon/controls.svg')}}" alt="">
                        <h3>Unlimited Control</h3>
                        <p>These cases are perfectly simple and easy to </p>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-lg-4">
                    <div class="single_service_wrap text-center">
                        <img src="{{asset('customerLendingHome/img/svg_icon/bar-chart.svg')}}" alt="">
                        <h3>Rapidly Growth</h3>
                        <p>These cases are perfectly simple and easy to </p>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-lg-4">
                    <div class="single_service_wrap text-center">
                        <img src="{{asset('customerLendingHome/img/svg_icon/puzzle.svg')}}" alt="">
                        <h3>Problem Solving</h3>
                        <p>These cases are perfectly simple and easy to </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ about wrap  -->


    <!-- financial_solution -->
    <div class="financial_solution_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <div class="financial_active owl-carousel">
                        <div class="single_finalcial_wrap">
                            <h3>Gives you the best Financial <br>
                                solution for business</h3>
                            <p>These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best.</p>
                        </div>
                        <div class="single_finalcial_wrap">
                            <h3>Gives you the best Financial <br>
                                solution for business</h3>
                            <p>These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best.</p>
                        </div>
                        <div class="single_finalcial_wrap">
                            <h3>Gives you the best Financial <br>
                                solution for business</h3>
                            <p>These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="finance_thumb">
                        <img src="{{asset('customerLendingHome/img/about/finance.png')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ financial_solution -->

    <div class="testmonial_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-10 offset-xl-1">
                    <div class="testmonial_active2 owl-carousel">
                        <div  class="single_slider text-center" data-dot='<img src="{{asset('customerLendingHome/img/testmonial/1.png')}}" alt="#" ' >
                            <p>These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able.</p>
                            <div class="author_name text-center">
                                <h4>Robert Jonson</h4>
                                <span> Business Owner</span>
                            </div>
                        </div>
                        <div  class="single_slider text-center" data-dot='<img src="{{asset('customerLendingHome/img/testmonial/1.png')}}" alt="#" ' >
                            <p>These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able.</p>
                            <div class="author_name text-center">
                                <h4>Robert Jonson</h4>
                                <span> Business Owner</span>
                            </div>
                        </div>
                        <div  class="single_slider text-center" data-dot='<img src="{{asset('customerLendingHome/img/testmonial/1.png')}}" alt="#" ' >
                            <p>These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able.</p>
                            <div class="author_name text-center">
                                <h4>Robert Jonson</h4>
                                <span> Business Owner</span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- project  -->
    <div class="project_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="project_info text-center">
                        <h3>Do you Have any Project?</h3>
                        <p>Nam libero tempore, cum soluta nobis est eligendi optio <br>
                            cumque nihil impedit quo minus.</p>
                        <a href="#" class="boxed-btn3-white">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
