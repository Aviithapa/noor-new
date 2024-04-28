
@extends('website.layout.app')

@section('content')
  


    <!-- Start Portfolio
    ============================================= -->
    <div class="portfolio-area default-padding">
        <div class="container">
            <div class="portfolio-items-area text-center">
                <div class="row">
                    <div class="col-md-12 portfolio-content">
                        <div class="mix-item-menu active-theme text-center">
                            <button class="active" data-filter="*">Loan</button>
                            
                        </div>
                        <!-- End Mixitup Nav-->

                        <div class="row magnific-mix-gallery masonary">
                            <div id="portfolio-grid" class="portfolio-items col-3">


                                     @foreach($loan as $data)
                @if(isset($data->media))
                        @foreach ($data->media as $media)



                        <div class="pf-item branding photography">
                                    <div class="item-inner">
                                        <img src="{{getImage($media->path)}}" alt="Thumb"/>
                                        <div class="overlay">
                                            <div class="view-list">
                                                <a href="{{getImage($media->path)}}"" class="item popup-link"><i class="fa fa-expand"></i></a>
                                                <a href="#"><i class="fa fa-link"></i></a>
                                            </div>
                                        </div>        
                                    </div>
                                    <div class="info">
                                        <h4>{{ $data->title }}</h4>
                                         
                                        <p>
                                           {{ $data->exceprt }}
                                        </p>
                                    </div> 
                                </div>
    
                                
                    @endforeach
                    @endif
                    @endforeach
                                
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Portfolio -->
@endsection