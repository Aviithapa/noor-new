
@extends('website.layout.app')

@section('content')
 

    <!-- Start Team Members
    ============================================= -->
    <div class="team-members-area item-white default-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12 team-member-info">
                    <div class="team-carousel-items owl-carousel owl-theme">
                         @foreach($teams as $team)
                      <div class="item">
                          <div class="col-md-6 thumb">
                              <img src="{{getImage($team->image)}}" alt="Team">
                          </div>
                          <div class="col-md-6 info title">
                              <h3>{{ $team->title }}</h3>
                              <h5>{{ $team->excerpt }}</h5>
                              <p>
                                  {!! $team->content !!}
                              </p>
                              <ul>
                                  <li>
                                      <a href="{{ $team->meta_link }}" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                  </li>
                                  {{-- <li>
                                      <a href="#"><i class="fab fa-twitter"></i></a>
                                  </li>
                                  <li>
                                      <a href="#"><i class="fab fa-linkedin"></i></a>
                                  </li>
                                  <li>
                                      <a href="#"><i class="fab fa-pinterest"></i></a>
                                  </li> --}}
                              </ul>
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