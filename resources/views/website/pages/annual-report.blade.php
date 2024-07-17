
@extends('website.layout.app')

@section('content')

<div class="portfolio-details default-padding">
    <div class="container">
        <div class="row">

            <div class="col-md-12 portfolio-area related-projects default-padding-top">
                <div class="heading">
                    <h3>Our Annual Report</h3>
                </div>
                <div class="row">
                    @foreach ($annualReport  as  $report)
                        <div class="col-md-4">
                            <div class="pf-item branding photography">
                                <div class="" style="text-align: center;">
                                    <a href="{{  getImage($report->image)  }}" target="_blank">
                                    <img src="{{ asset('assets/images/document.png') }}" alt="Thumb"/>
                                    </a>


                                        <a href="{{  getImage($report->image)  }}" target="_blank"> <h4>{{ $report->title }}</h4>      </a>

                                </div>

                            </div>
                        </div>
                    @endforeach


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
