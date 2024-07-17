
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

                        @foreach ($savings as $data)
                        <div class="pf-item branding photography">
                            <div class="item-inner">
                                <img src="{{ getImage($data->image) }}" alt="Thumb"/>
                                <div class="overlay">
                                    <div class="view-list">
                                        <a href="{{ getImage($data->image) }}" class="item popup-link" height="360"><i class="fa fa-eye"></i></a>
                                        <a href="{{ url('form') }}"><i class="fa fa-link"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="info">
                                <h4>{{ $data->title }}</h4>

                                <p>
                                    {{ $data->excerpt }}
                                </p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Portfolio -->

@endsection
