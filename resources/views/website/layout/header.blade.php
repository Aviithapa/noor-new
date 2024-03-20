  <!-- Header 
    ============================================= -->
    <header>
      <!-- Start Navigation -->
      <nav class="navbar navbar-default navbar-sticky bootsnav">
        <div class="container">
          <!-- Start Header Navigation -->
          <div class="navbar-header">
            <button
              type="button"
              class="navbar-toggle"
              data-toggle="collapse"
              data-target="#navbar-menu"
            >
              <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="{{url('/')}}">
              <img
                src="{{ asset('noor/assets/img/logo.png') }}"
                class="logo logo-display"
                alt="Logo"
                height="50"
              />
            </a>
          </div>
          <!-- End Header Navigation -->

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="navbar-menu">
            <ul
              class="nav navbar-nav"
              data-in="#"
              data-out="#"
              style="margin: 0px 14%;"
            >
              <li>
                <a href="{{url('/')}}">Home</a>
              </li>
              <li>
                <a href="{{url('/about')}}">About</a>
              </li>
              <li>
                <a href="{{url('/csr')}}">CSR</a>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                  >Products</a
                >
                <ul class="dropdown-menu">
                  <li><a href="{{url('/loan')}}">Loan</a></li>
                  <li><a href="{{url('/saving')}}">Saving</a></li>
                </ul>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                  >Team</a
                >
                <ul class="dropdown-menu">
                  <li>
                    <a href="{{url('/bod')}}">Board Of Directors</a>
                  </li>
                  <li><a href="{{url('/team')}}">Management Team</a></li>
                </ul>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                  >Services</a
                >
                <ul class="dropdown-menu">
                  <li>
                    <a href="{{url('/form')}}">Online Form</a>
                  </li>
                  <li>
                    <a href="{{url('/mobile-banking')}}">Mobile Banking</a>
                  </li>
                
                </ul>
              </li>
             
              <li>
                <a href="{{url('/contact')}}">contact</a>
              </li>
            </ul>
              <ul class="nav navbar-nav"
              data-in="#"
              data-out="#"
               
              style="float: right;">
              <li>
                <a href="#"><i class="fab fa-facebook-f" style="font-size: 20px;"></i></a>
              </li>
            </ul>
          
          </div>
          <!-- /.navbar-collapse -->

          
        </div>
      </nav>
      <!-- End Navigation -->
    </header>
    <!-- End Header -->
     <!-- Start Header Top 
    ============================================= -->
    <div class="top-bar-area bg-theme text-light">
      <div class="container">
        <div class="row">
          <div class="col-md-12" style="display:flex; justify-content: center;">
            <div class="info box">
              <ul>
                <li>
                  <div class="icon">
                    <i class="fas fa-map-marker-alt"></i>
                  </div>
                  <div class="info">
                    <p>Koteshwor , Mahadevsthan -32</p>
                  </div>
                </li>
                <li>
                  <div class="icon">
                    <i class="fas fa-envelope-open"></i>
                  </div>
                  <div class="info">
                    <p>Noormultipurposecooperative@gmail.com</p>
                  </div>
                </li>
                <li>
                  <div class="icon">
                    <i class="fas fa-mobile-alt"></i>
                  </div>
                  <div class="info">
                    <p>01-4155311</p>
                  </div>
                </li>
              </ul>
            </div>
          </div>
          {{-- <div class="topbar-social col-md-1">
            <ul class="text-right">
              <li>
                <a href="#"><i class="fab fa-facebook-f"></i></a>
              </li>
            </ul>
          </div> --}}
        </div>
      </div>
    </div>
    <!-- End Header Top -->