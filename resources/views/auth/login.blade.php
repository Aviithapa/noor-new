
@extends('website.layout.app')

@section('content')
   

<!-- Start Breadcrumb 
    ============================================= -->
    <div
      class="breadcrumb-area shadow dark bg-fixed text-center padding-xl text-light"
      style="background-image: url({{ asset('noor/assets/img/contact.jpeg') }})"
    >
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-sm-6 text-left">
            <h1>Login</h1>
          </div>
          <div class="col-md-6 col-sm-6 text-right">
            <ul class="breadcrumb">
              <li><a href="#">Home</a></li>
              <li class="active">Login</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- End Breadcrumb -->




    <!-- ==========signin Section start Here========== -->
    <div class="account padding-top padding-bottom">
        <div class=" container">
            <div class="row g-5 align-items-center flex-md-row-reverse">
                <div class="col-lg-5">
                    <div class="account__wrapper">
                       <form action="{{ url('/login') }}" method="POST">
                        <div class="form-floating mb-4">
                                <label for="floatingInput">Email address</label>
                                <input type="email" name="email" class="form-control" id="floatingInput"
                                    placeholder="name@example.com">
                            </div>
                            <div class="form-floating mb-4">
                                <label for="floatingPassword">Password</label>
                                <input type="password" name="password"  class="form-control" id="floatingPassword"
                                    placeholder="Password">
                            </div>
                           
                            <div class="form-group" style="margin-top: 10px;">
                                <button class="btn btn-primary"><span>Signin Now</span></button>
                            </div>
                        </form>
                      
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="account-img">
                        <img src="assets/images/account/sign-in.png" alt="shape-image">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ==========signin Section ends Here========== -->

@endsection