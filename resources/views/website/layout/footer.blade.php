  <!-- Start Footer 
    ============================================= -->
    <footer class="default-padding-top text-light">
      <div class="container">
        <div class="row">
          <div class="f-items fv1">
            <div class="col-md-4 item">
              <div class="f-item">
                <h4>About Us</h4>
                <p>
                 {!! $footerAbout->content !!}
                </p>
                <p>
                  <span
                    >Please write your email and get our amazing updates, news
                    and support</span
                  >
                </p>
                <div class="subscribe">
                  <form action="#">
                    <div class="input-group stylish-input-group">
                      <input
                        type="email"
                        name="email"
                        class="form-control"
                        placeholder="Enter your e-mail here"
                      />
                      <span class="input-group-addon">
                        <button type="submit">
                          <i class="fa fa-paper-plane"></i>
                        </button>
                      </span>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <div class="col-md-4 item">
              <div class="f-item link full">
                <h4>Our Support</h4>
                <ul>
                  <li><a href="#">Notice</a></li>
                  <li><a href="#">Gallery</a></li>
                  <li><a href="#">News and Events</a></li>
                  <li><a href="#">Share and Rights issue</a></li>
                </ul>
              </div>
            </div>
            <div class="col-md-4 item">
              <div class="f-item business-hours">
                <h4>Business Hours</h4>
                <p>
                  Noor Multipurpose Cooperative working hours typically align
                  with standard business hours, ensuring accessibility for
                  members. Flexibility may be observed based on sector,
                  community engagement, and adherence to local regulations and
                  holidays.
                </p>
                <ul>
                  <li>Sunday-Thursday <span>10am to 2pm</span></li>
                  <li>Friday <span>10am to 1pm</span></li>
                  <li>Saturday <span>Closed</span></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Start Footer Bottom -->
      <div class="footer-bottom">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="col-md-6 logo">
                <img src="{{ asset('noor/assets/img/logo.png') }}" alt="Logo" />
              </div>
              <div class="col-md-6 footer-bottom-menu text-right">
                <ul>
                  <li><a href="{{ url('terms-conditions') }}">Terms of Use</a></li>
                  <li><a href="{{ url('privacy-policy') }}">Privacy Policy</a></li>
                  <li><a href="{{ url('contact') }}">Contact Us</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- End Footer Bottom -->
    </footer>
    <!-- End Footer -->