
@extends('website.layout.app')

@section('content')
   

    <!-- Start Portfolio
    ============================================= -->
    <div class="portfolio-details default-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12 carousel">
                    <div class="pf-thum-carousel owl-carousel owl-thumb">
                        <img src="assets/img/1500x500.png" alt="Thumb">
                        <img src="assets/img/1500x500.png" alt="Thumb">
                        <img src="assets/img/1500x500.png" alt="Thumb">
                    </div>
                </div>
                <div class="col-md-12 conetnt">
                    <h3>{{ $saving->title }} </h3>
                    {!! $saving->content !!}
                    
                    </div>
                </div>
                <div class="col-md-12 portfolio-area related-projects default-padding-top">
                    <div class="heading">
                        <h3>Our Saving Accounts</h3>
                    </div>
                    <div class="prelated-project-items owl-carousel owl-theme">
                        <div class="pf-item branding photography">
                            <div class="item-inner">
                                <img src="assets/img/800x600.png" alt="Thumb"/>
                                <div class="overlay">
                                    <div class="view-list">
                                        <a href="assets/img/800x600.png" class="item popup-link"><i class="fa fa-eye"></i></a>
                                        <a href="#"><i class="fa fa-link"></i></a>
                                    </div>
                                </div>        
                            </div>
                            <div class="info">
                                <h4>Startup Funding</h4>
                                <ul>
                                    <li>
                                        <a href="#">finance</a>
                                    </li>
                                    <li>
                                        <a href="#">accounting</a>
                                    </li>
                                </ul>
                                <p>
                                    It esteems luckily mr or picture placing drawing no. Apartments frequently or motionless on reasonable projecting expression. Way mrs end gave tall walk fact bed.
                                </p>
                            </div> 
                        </div>
                        <div class="pf-item video development">
                            <div class="item-inner">
                                <img src="assets/img/800x600.png" alt="Thumb"/>
                                <div class="overlay">
                                    <div class="view-list">
                                        <a href="assets/img/800x600.png" class="item popup-link"><i class="fa fa-eye"></i></a>
                                        <a href="#"><i class="fa fa-link"></i></a>
                                    </div>
                                </div>           
                            </div>
                            <div class="info">
                                <h4>Accounting Advisory</h4>
                                <ul>
                                    <li>
                                        <a href="#">finance</a>
                                    </li>
                                    <li>
                                        <a href="#">accounting</a>
                                    </li>
                                </ul>
                                <p>
                                    It esteems luckily mr or picture placing drawing no. Apartments frequently or motionless on reasonable projecting expression. Way mrs end gave tall walk fact bed.
                                </p>
                            </div> 
                        </div>
                        <div class="pf-item design photography">
                            <div class="item-inner">
                                <img src="assets/img/800x600.png" alt="Thumb"/>
                                <div class="overlay">
                                    <div class="view-list">
                                        <a href="assets/img/800x600.png" class="item popup-link"><i class="fa fa-eye"></i></a>
                                        <a href="#"><i class="fa fa-link"></i></a>
                                    </div>
                                </div>           
                            </div>
                            <div class="info">
                                <h4>Merger & Acquisition</h4>
                                <ul>
                                    <li>
                                        <a href="#">finance</a>
                                    </li>
                                    <li>
                                        <a href="#">accounting</a>
                                    </li>
                                </ul>
                                <p>
                                    It esteems luckily mr or picture placing drawing no. Apartments frequently or motionless on reasonable projecting expression. Way mrs end gave tall walk fact bed.
                                </p>
                            </div> 
                        </div>
                        <div class="pf-item branding video">
                            <div class="item-inner">
                                <img src="assets/img/800x600.png" alt="Thumb"/>
                                <div class="overlay">
                                    <div class="view-list">
                                        <a href="assets/img/800x600.png" class="item popup-link"><i class="fa fa-eye"></i></a>
                                        <a href="#"><i class="fa fa-link"></i></a>
                                    </div>
                                </div>           
                            </div>
                            <div class="info">
                                <h4>Business Matching</h4>
                                <ul>
                                    <li>
                                        <a href="#">finance</a>
                                    </li>
                                    <li>
                                        <a href="#">accounting</a>
                                    </li>
                                </ul>
                                <p>
                                    It esteems luckily mr or picture placing drawing no. Apartments frequently or motionless on reasonable projecting expression. Way mrs end gave tall walk fact bed.
                                </p>
                            </div> 
                        </div>
                        <div class="pf-item design photography">
                            <div class="item-inner">
                                <img src="assets/img/800x600.png" alt="Thumb"/>
                                <div class="overlay">
                                    <div class="view-list">
                                        <a href="assets/img/800x600.png" class="item popup-link"><i class="fa fa-eye"></i></a>
                                        <a href="#"><i class="fa fa-link"></i></a>
                                    </div>
                                </div>           
                            </div>
                            <div class="info">
                                <h4>Assets For Technology</h4>
                                <ul>
                                    <li>
                                        <a href="#">finance</a>
                                    </li>
                                    <li>
                                        <a href="#">accounting</a>
                                    </li>
                                </ul>
                                <p>
                                    It esteems luckily mr or picture placing drawing no. Apartments frequently or motionless on reasonable projecting expression. Way mrs end gave tall walk fact bed.
                                </p>
                            </div> 
                        </div>
                        <div class="pf-item branding design development">
                            <div class="item-inner">
                                <img src="assets/img/800x600.png" alt="Thumb"/>
                                <div class="overlay">
                                    <div class="view-list">
                                        <a href="assets/img/800x600.png" class="item popup-link"><i class="fa fa-eye"></i></a>
                                        <a href="#"><i class="fa fa-link"></i></a>
                                    </div>
                                </div>           
                            </div>
                            <div class="info">
                                <h4>Startup Funding</h4>
                                <ul>
                                    <li>
                                        <a href="#">finance</a>
                                    </li>
                                    <li>
                                        <a href="#">accounting</a>
                                    </li>
                                </ul>
                                <p>
                                    It esteems luckily mr or picture placing drawing no. Apartments frequently or motionless on reasonable projecting expression. Way mrs end gave tall walk fact bed.
                                </p>
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Portfolio -->

@endsection