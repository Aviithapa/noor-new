          <div class="navbar-custom">
            <div class="topbar container-fluid">
                <div class="d-flex align-items-center gap-1">

                    <!-- Topbar Brand Logo -->
                    <div class="logo-topbar">
                        <!-- Logo light -->
                        <a href="{{ url('dashboard') }}" class="logo-light">
                            <span class="logo-lg">
                                <img src="{{ asset('noor/assets/img/logo.png') }}" alt="logo">
                            </span>
                            <span class="logo-sm">
                                <img src="{{ asset('noor/assets/img/logo.png') }}" alt="small logo">
                            </span>
                        </a>
                    </div>

                    <!-- Sidebar Menu Toggle Button -->
                    <button class="button-toggle-menu">
                        <i class="ri-menu-line"></i>
                    </button>
                
                </div>

                <ul class="topbar-menu d-flex align-items-center gap-3">
                    <li class="dropdown d-lg-none">
                        <a class="nav-link dropdown-toggle arrow-none" data-bs-toggle="dropdown" href="#" role="button"
                            aria-haspopup="false" aria-expanded="false">
                            <i class="ri-search-line fs-22"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-animated dropdown-lg p-0">
                            <form class="p-3">
                                <input type="search" class="form-control" placeholder="Search ..."
                                    aria-label="Recipient's username">
                            </form>
                        </div>
                    </li>

                    <li class="dropdown">
                        <a class="nav-link dropdown-toggle arrow-none nav-user" data-bs-toggle="dropdown" href="#" role="button"
                            aria-haspopup="false" aria-expanded="false">
                            <span class="account-user-avatar">
                                {{-- <img src="assets/images/users/avatar-1.jpg" alt="user-image" width="32" class="rounded-circle"> --}}
                            </span>
                            <span class="d-lg-block d-none">
                                <h5 class="my-0 fw-normal">{{ Auth::user()->name }} </h5>
                            </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated profile-dropdown">
                            <!-- item-->
                            <div class=" dropdown-header noti-title">
                                <h6 class="text-overflow m-0">Welcome !</h6>
                            </div>

                            {{-- <!-- item-->
                            <a href="pages-profile.html" class="dropdown-item">
                                <i class="ri-account-circle-line fs-18 align-middle me-1"></i>
                                <span>My Account</span>
                            </a>

                            <!-- item-->
                            <a href="pages-profile.html" class="dropdown-item">
                                <i class="ri-settings-4-line fs-18 align-middle me-1"></i>
                                <span>Settings</span>
                            </a>

                            <!-- item-->
                            <a href="pages-faq.html" class="dropdown-item">
                                <i class="ri-customer-service-2-line fs-18 align-middle me-1"></i>
                                <span>Support</span>
                            </a>

                            <!-- item-->
                            <a href="auth-lock-screen.html" class="dropdown-item">
                                <i class="ri-lock-password-line fs-18 align-middle me-1"></i>
                                <span>Lock Screen</span>
                            </a> --}}

                            <!-- item-->
                            <a href="{{ route('logout') }}" class="dropdown-item">
                                <i class="ri-logout-box-line fs-18 align-middle me-1"></i>
                                <span>Logout</span>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    
    <div class="leftside-menu">

            <!-- Brand Logo Dark -->
            <a href="{{ url('dashboard') }}" class="logo logo-dark" style="height: 120px; margin-top: -10px;">
                <span class="logo-lg">
                    <img src="{{ asset('noor/assets/img/logo.png') }}" alt="dark logo" style="height: 100%; width: 100px;">
                </span>
                <span class="logo-sm">
                    <img src="{{ asset('noor/assets/img/logo.png') }}" alt="small logo">
                </span>
            </a>

            <!-- Sidebar -left -->
            <div class="h-100" id="leftside-menu-container" data-simplebar style="border-top: 1px solid;">
                <!--- Sidemenu -->
                <ul class="side-nav">

                    {{-- <li class="side-nav-title">Main</li> --}}

                    <li class="side-nav-item">
                        <a href="{{ url('dashboard') }}" class="side-nav-link">
                            <i class="bi-speedometer"></i>
                            <span> Dashboard </span>
                        </a>
                    </li>


                     <li class="side-nav-item">
                        <a href="{{ url('cms/banner') }}" class="side-nav-link">
                            <i class="bi-calendar-week-fill"></i>
                            <span> Banner Management </span>
                        </a>
                    </li>
                     <li class="side-nav-item">
                        <a href="{{ url('cms/client') }}" class="side-nav-link">
                            <i class="bi-people"></i>
                            <span> Client Management </span>
                        </a>
                    </li>
                      <li class="side-nav-item">
                        <a href="{{ url('cms/csr') }}" class="side-nav-link">
                            <i class="bi-chat-left-dots"></i>
                            <span>CSR Management </span>
                        </a>
                    </li>
                      <li class="side-nav-item">
                        <a href="{{ url('cms/gallery') }}" class="side-nav-link">
                            <i class="bi-image"></i>
                            <span> Gallery Management </span>
                        </a>
                    </li>

                    <li class="side-nav-item">
                        <a href="{{ url('cms/news') }}" class="side-nav-link">
                            <i class="bi-newspaper"></i>
                            <span> News Management </span>
                        </a>
                    </li>
                     <li class="side-nav-item">
                        <a href="{{ url('cms/page') }}" class="side-nav-link">
                            <i class="bi-file"></i>
                            <span> Page Management </span>
                        </a>
                    </li>


                    <li class="side-nav-item">
                        <a href="{{ url('cms/post') }}" class="side-nav-link">
                            <i class="bi-markdown"></i>
                            <span> Post Management </span>
                        </a>
                    </li>
                      <li class="side-nav-item">
                        <a href="{{ url('cms/service') }}" class="side-nav-link">
                            <i class="bi-gear"></i>
                            <span> Service Management </span>
                        </a>
                    </li>
                  
                     <li class="side-nav-item">
                        <a href="{{ url('cms/team') }}" class="side-nav-link">
                            <i class="bi-chat-left-dots"></i>
                            <span> Team Management </span>
                        </a>
                    </li>

                     <li class="side-nav-item">
                        <a href="{{ url('cms/testimonial') }}" class="side-nav-link">
                            <i class="bi-chat-left-dots"></i>
                            <span> Testimonial Management </span>
                        </a>
                    </li>
                     
                    
                  

                    <li class="side-nav-item"> 
                           <a href="{{ route('logout') }}" class="side-nav-link">
                                <i class="bi-box-arrow-right "></i>
                                <span>Logout</span>
                            </a>
                    </li>

                      
                  
                </ul>
                <!--- End Sidemenu -->

                <div class="clearfix"></div>
            </div>
        </div>
        <!-- ========== Left Sidebar End ========== -->