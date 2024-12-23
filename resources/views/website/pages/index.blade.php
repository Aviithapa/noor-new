@extends('website.layout.app')

@section('content')
    <!-- Start Banner
                    ============================================= -->
    <div class="banner-area">
        <div id="bootcarousel" class="carousel slide animate_text carousel-fade" data-ride="carousel">
            <!-- Wrapper for slides -->
            <div class="carousel-inner text-light carousel-zoom">
                @foreach ($banners as $index => $banner)
                    <div class="item {{ $loop->first ? 'active' : '' }}">

                        <div class="slider-thumb bg-fixed"
                            style="background-image: url({{ getImage($banner->image) }}); opacity: 2"></div>
                        <div class="box-table shadow theme">
                            <div class="box-cell">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-9">
                                            <div class="content">
                                                <h1 data-animation="animated slideInLeft">
                                                    {{ $banner->title }}
                                                </h1>
                                                <p>{{ $banner->excerpt }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach


            </div>
            <!-- End Wrapper for slides -->

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#bootcarousel" data-slide="prev">
                <i class="fa fa-angle-left"></i>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#bootcarousel" data-slide="next">
                <i class="fa fa-angle-right"></i>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <!-- End Banner -->

    <!-- Start About
                    ============================================= -->
    <div class="about-area services-include default-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6 default info">
                    <h2>
                        {{ $about->title }}
                    </h2>
                    <p>
                        {{ $about->excerpt }}
                    </p>
                    <div class="bottom-info">
                        <ul>
                            <li>
                                <a class="btn btn-theme effect btn-sm" href="{{ url('contact') }}">contact us</a>
                            </li>
                            <li><i class="fas fa-phone"></i> 01-4155311</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 services text-center">
                    <div class="col-md-6 equal-height">
                        <a href="{{ url('saving') }}">
                            <i class="flaticon-service"></i>
                            <h4>Saving Account</h4>
                        </a>
                    </div>
                    <div class="col-md-6 equal-height">
                        <a href="{{ url('saving') }}">
                            <i class="flaticon-profits"></i>
                            <h4>Fixed Saving</h4>
                        </a>
                    </div>
                    <div class="col-md-6 equal-height">
                        <a href="{{ url('loan') }}">
                            <i class="flaticon-id"></i>
                            <h4>Loan Type</h4>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- End About -->
    <!-- Start Services
                    ============================================= -->
    <section class="services-area default-padding-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="service-carousel text-center text-light owl-carousel owl-theme">
                        @foreach ($services as $service)
                            <div class="service-item">
                                <div class="info-box">
                                    <img src="{{ getImage($service->image) }}" alt="Thumb" height="360" />
                                    <div class="overlay">
                                        <div class="box">
                                            <div class="content">
                                                <div class="overlay-content">
                                                    <h4><a href="#">{{ $service->title }}</a></h4>
                                                    <p>
                                                        {{ $service->excerpt }}
                                                    </p>
                                                    <a href="{{ url('loan') }}">Read More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End services area-->

    <!-- Start Statistics
                    ============================================= -->
    <div class="statistics-area">
        <div class="container-fluid container-box oh">
            <div class="col-md-6 thumb bg-cover">
                {{-- <video width="100%" height="500px" muted controls> --}}
                    <iframe width="100%" height="500px" src="https://www.youtube.com/embed/fnXhmhOYTos?si=h_rGfykpIaSMk_li" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                {{-- </video> --}}
            </div>
            <div class="col-md-6 info">
                <h2>Our Statistics Rate</h2>
                <p>
                    A critical statistic for cooperative organizations is the membership
                    growth rate, measuring the increase or decrease in the number of
                    members over a specific period. Cooperatives monitor financial
                    metrics such as revenue, profit margins, and cash flow to assess
                    their economic sustainability. Statistics related to member
                    engagement and participation, such as attendance at meetings and
                    involvement in decision-making processes, provide insights into the
                    cooperative's democratic functioning.
                </p>
                <div class="skills-section">
                    <!-- Progress Bar Start -->
                    <div class="progress-box">
                        <h5>Membership Growth <span class="pull-right">88%</span></h5>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" data-width="87"></div>
                        </div>
                    </div>
                    <div class="progress-box">
                        <h5>Financial Performance <span class="pull-right">95%</span></h5>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" data-width="96"></div>
                        </div>
                    </div>
                    <div class="progress-box">
                        <h5>Member Participation<span class="pull-right">82%</span></h5>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" data-width="82"></div>
                        </div>
                    </div>
                    <!-- End Progressbar -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Statistics  -->

    <!-- Start Business Growth
                    ============================================= -->
    <div class="business-groth-area default-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="https://play.google.com/store/apps/details?id=banking.nextgen.noor" target="blank"><img
                            class="playStore" src="{{ asset('noor/assets/img/google play 1.jpg') }}" alt="gp" /></a>
                </div>
                <div class="col-md-3">
                    <a href="https://apps.apple.com/au/app/noor-ismart/id6473667090" target="blank"><img class="playStore"
                            src="{{ asset('noor/assets/img/apple store.jpg') }}" alt="gp" /></a>
                </div>
                <div class="col-md-6">
                    <div>
                        <span>
                            <img src="{{ asset('noor/assets/img/mobile.jpeg') }}" alt="Clients" />
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Business Growth -->

    <!-- Clients
                    ============================================= -->
    @include('website.layout.clients')
    <!-- End Clients -->
@endsection
