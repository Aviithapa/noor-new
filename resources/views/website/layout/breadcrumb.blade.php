 <!-- Start Breadcrumb 
    ============================================= -->

          
  @if(isset($pageData->media) && $slug !== 'index')
    
       <div class="breadcrumb-area shadow dark bg-fixed text-center padding-xl text-light" style="background-image: url({{getImage($team->image)}})">
    
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-sm-6 text-left">
              <h1>{{ $pageData->title }}</h1>
            </div>
            <div class="col-md-6 col-sm-6 text-right">
              <ul class="breadcrumb">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li class="active">{{ $pageData->title }}</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
  @endif
    <!-- End Breadcrumb -->