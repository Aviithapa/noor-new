
@extends('website.layout.app')

@section('content')
  

    <!-- Start Contact 
    ============================================= -->
    <div class="contact-form-area default-padding">
      <div class="container">
        <div class="row">
          <!-- Start Contact Form -->
          <div class="col-md-7 contact-form">
            <div class="content">
              <div class="heading">
                <h3>Let Us Know About Your Query!</h3>
              </div>
              <form
                action="assets/mail/contact.php"
                method="POST"
                class="contact-form"
              >
                <div class="col-md-12">
                  <div class="row">
                    <div class="form-group">
                      <input
                        class="form-control"
                        id="name"
                        name="name"
                        placeholder="Name"
                        type="text"
                      />
                      <span class="alert-error"></span>
                    </div>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="row">
                    <div class="form-group">
                      <input
                        class="form-control"
                        id="email"
                        name="email"
                        placeholder="Email*"
                        type="email"
                      />
                      <span class="alert-error"></span>
                    </div>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="row">
                    <div class="form-group">
                      <input
                        class="form-control"
                        id="phone"
                        name="phone"
                        placeholder="Phone"
                        type="text"
                      />
                      <span class="alert-error"></span>
                    </div>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="row">
                    <div class="form-group comments">
                      <textarea
                        class="form-control"
                        id="comments"
                        name="comments"
                        placeholder="Your Message *"
                      ></textarea>
                    </div>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="row">
                    <button type="submit" name="submit" id="submit">
                      Send Message <i class="fa fa-paper-plane"></i>
                    </button>
                  </div>
                </div>
                <!-- Alert Message -->
                <div class="col-md-12 alert-notification">
                  <div id="message" class="alert-msg"></div>
                </div>
              </form>
            </div>
          </div>
          <!-- End Contact Form -->
          <div class="col-md-5 office-info">
            <!-- Start Tab Contact Info -->
            <div class="tab-nvas">
              <ul class="nav nav-pills">
                <li class="active">
                  <a data-toggle="tab" href="#id1" aria-expanded="true">
                    Head Office
                  </a>
                </li>
                <li>
                  <a data-toggle="tab" href="#id2" aria-expanded="false">
                    Branch Office
                  </a>
                </li>
                <li>
                  <a data-toggle="tab" href="#id3" aria-expanded="false">
                    Branch Office
                  </a>
                </li>
              </ul>
            </div>
            <div class="tab-content pad-all-20p txt-center-mobile">
              <div id="id1" class="tab-pane active">
                <ul>
                  <li>
                    <img src="assets/img/office.jpeg" alt="Thumb" />
                  </li>
                  <li>
                    <div class="icon">
                      <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <div class="info">
                      <p>
                        Our Location
                        <span> Kotehsowr , Mahadevshtan-32</span>
                      </p>
                    </div>
                  </li>
                  <li>
                    <div class="icon">
                      <i class="fas fa-envelope-open"></i>
                    </div>
                    <div class="info">
                      <p>
                        Send Us Mail
                        <span>Noormultipurposecooperative@gmail.com</span>
                      </p>
                    </div>
                  </li>
                  <li>
                    <div class="icon">
                      <i class="fas fa-mobile-alt"></i>
                    </div>
                    <div class="info">
                      <p>
                        Call Us
                        <span>01-4155311</span>
                      </p>
                    </div>
                  </li>
                </ul>
              </div>
              <div id="id2" class="tab-pane">
                <ul>
                  <li>
                    <img src="assets/img/no-branch.jpeg" alt="Thumb" />
                  </li>
                  <li>
                    <div class="icon">
                      <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <div class="info">
                      <p>
                        Our Location
                        <span>################</span>
                      </p>
                    </div>
                  </li>
                  <li>
                    <div class="icon">
                      <i class="fas fa-envelope-open"></i>
                    </div>
                    <div class="info">
                      <p>
                        Send Us Mail
                        <span>Noormultipurposecooperative@gmail.com</span>
                      </p>
                    </div>
                  </li>
                  <li>
                    <div class="icon">
                      <i class="fas fa-mobile-alt"></i>
                    </div>
                    <div class="info">
                      <p>
                        Call Us
                        <span>01-4155311</span>
                      </p>
                    </div>
                  </li>
                </ul>
              </div>
              <div id="id3" class="tab-pane">
                <ul>
                  <li>
                    <img src="assets/img/no-branch.jpeg" alt="Thumb" />
                  </li>
                  <li>
                    <div class="icon">
                      <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <div class="info">
                      <p>
                        Our Location
                        <span>################</span>
                      </p>
                    </div>
                  </li>
                  <li>
                    <div class="icon">
                      <i class="fas fa-envelope-open"></i>
                    </div>
                    <div class="info">
                      <p>
                        Send Us Mail
                        <span>Noormultipurposecooperative@gmail.com</span>
                      </p>
                    </div>
                  </li>
                  <li>
                    <div class="icon">
                      <i class="fas fa-mobile-alt"></i>
                    </div>
                    <div class="info">
                      <p>
                        Call Us
                        <span>01-4155311</span>
                      </p>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
            <!-- End Tab Contact Info -->
          </div>
        </div>
      </div>
    </div>
    <!-- End Contact -->

    <!-- Start Maps Area 
    ============================================= -->
    <div class="maps-area-items">
      <div class="maps-box oh">
        <div class="google-maps">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d952.4678285420874!2d85.34165515681666!3d27.679612229204842!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb19edabaed455%3A0x178382f13ce18cec!2sM8HR%2BRVF%2C%20Kathmandu%2044600!5e1!3m2!1sen!2snp!4v1705472960987!5m2!1sen!2snp"
            loading="lazy"
          ></iframe>
        </div>
      </div>
    </div>
    <!-- End Maps Area -->

@endsection