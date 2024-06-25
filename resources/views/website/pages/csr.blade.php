@extends('website.layout.app')

@section('content')
    <!-- Start Team Members
            ============================================= -->
    <div class="team-members-area item-white default-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12 team-member-info">
                    <div class="team-carousel-items owl-carousel owl-theme">

                        @foreach ($csr as $data)
                            <div class="item">
                                <div class="col-md-6 thumb">
                                    <img src="{{ getImage($data->image) }}" alt="Team" height="350px">
                                </div>
                                <div class="col-md-6 info title">
                                    <h3>{{ $data->title }}</h3>

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
    <!-- End Team Members -->
@endsection
