@extends('layouts.main')

@section('content')
  @include('partials.guest.header')
  @include('modals.loan')
  @include('modals.tour')
  <!--  Portfolio Section  -->
  <section id="portfolio" class="portfolio">  
    <div class="container mt-4 pt-4">
      <div class="row">
        <header class="section-header">
        </header>
      </div>
      @livewire('properties')
    </div>
  </section>
  <!--  Services Section  -->
  <section id="services" class="services">
    <div class="container" data-aos="fade-up">
      <header class="section-header">
        <h2>Services</h2>
        <p></p>
      </header>
      <div class="row gy-2">
        <div class="col-lg-6 col-md-6" data-aos="fade-up" data-aos-delay="200">
          <div class="service-box blue">
            <i class="ri-discuss-line icon"></i>
            <h3>Free Housing Loan Assistance</h3>
            <p>
              We offer free housing loan assistance to all our clients. 
              To ensure soft transaction from your house reservation up to your house turnover
            </p>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#loanModal">
            <span>Continue</span>
            <i class="bi bi-arrow-right"></i>
          </button>
        </div>
      </div>
      <div class="col-lg-6 col-md-6" data-aos="fade-up" data-aos-delay="300">
        <div class="service-box orange">
          <i class="ri-discuss-line icon"></i>
          <h3>Free Site Tour</h3>
          <p>1 hour 30 minutes and up we are providing free site tour service to prospect buyers of our property listings</p>
          <!-- Button trigger modal -->
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tourModal">
            
            <span>Continue</span>
            <i class="bi bi-arrow-right"></i>
          </button>   
        </div>
      </div>
    </div>
  </section>
    <!-- End Services Section -->

  <!--  Hero Section  -->
  <section id="hero" class="hero d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center">
          <h1 data-aos="fade-up">YOUR DREAM HOME? <br>WE CAN MAKE IT REAL.</h1>
          <h2 data-aos="fade-up" data-aos-delay="400"></h2>
          <div data-aos="fade-up" data-aos-delay="600">
            <div class="text-center text-lg-start">
              <a href="#about" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                <span>Get Started</span>
                <i class="bi bi-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
          <img src="assets/img/properties/sample-1.jpg" class="img-fluid" alt="">
        </div>
      </div>
    </div>
  </section>

  <main id="main">
    <!--  About Section  -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">
        <div class="row gx-0">
          <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
            <div class="content">
              <h3>Who We Are</h3>
              <h2>We make dreams alive</h2>
              <p>
                  Offering different kind of services and assistance
              </p>
            </div>
          </div>
          <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
            <img src="assets/img/properties/who-are-we.jpg" class="img-fluid" alt="">
          </div>
        </div>
      </div>
    </section>

    <!--  Features Section  -->
    <section id="features" class="features">
      <div class="container" data-aos="fade-up">
        <header class="section-header">
          <h2>Features</h2>
          <p></p>
        </header>
        <div class="row">
          <div class="col-lg-6">
            <img src="assets/img/features.png" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 mt-5 mt-lg-0 d-flex">
            <div class="row align-self-center gy-4">
              <div class="col-md-6" data-aos="zoom-out" data-aos-delay="200">
                <div class="feature-box d-flex align-items-center">
                  <i class="bi bi-check"></i>
                  <h3>3D Walkaround</h3>
                </div>
              </div>
              <div class="col-md-6" data-aos="zoom-out" data-aos-delay="300">
                <div class="feature-box d-flex align-items-center">
                  <i class="bi bi-check"></i>
                  <h3>Real time data</h3>
                </div>
              </div>
              <div class="col-md-6" data-aos="zoom-out" data-aos-delay="400">
                <div class="feature-box d-flex align-items-center">
                  <i class="bi bi-check"></i>
                  <h3>Virtual Assistant</h3>
                </div>
              </div>
              <div class="col-md-6" data-aos="zoom-out" data-aos-delay="500">
                <div class="feature-box d-flex align-items-center">
                  <i class="bi bi-check"></i>
                  <h3>Auto Computation</h3>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    

    <!--  Team Section  -->
    <section id="team" class="team">
      <div class="container" data-aos="fade-up">
        <header class="section-header">
          <h2>Founder</h2>
          <p></p>
        </header>
        <div class="row">
          <div class="d-flex justify-content-center" data-aos="fade-up" data-aos-delay="200">
            <div class="member">
              <div class="member-img">
                <img src="images/JaycelAlameda.jpg" class="img-fluid" alt="Jaycel Alameda Image">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href="https://www.facebook.com/jaycel.alameda" target="_blank"><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Jaycel Alameda</h4>
                <span>Chief Executive Officer</span>
                <p>
                  Mrs. Jaycel is a Real Estate Broker & Appraiser with a vision of bringing your dream property to life
                </p>
              </div>
            </div>
          </div>
        </div>

      </div>

    </section>

    <!--  Contact Section  -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">
        <header class="section-header">
          <h2>Contact</h2>
          <p>Contact Us</p>
        </header>
        <div class="row gy-4">
          <div class="col-lg-6">
            <div class="row gy-4">
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-geo-alt"></i>
                  <h3>Address</h3>
                  <p>Barangay 6, Magsaysay Street 8700 Malaybalay,<br>Philippines, 9000</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-telephone"></i>
                  <h3>Call Us</h3>
                  <p>0905 812 8936</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-envelope"></i>
                  <h3>Email Us</h3>
                  <p>jyarealestateservices@gmail.com</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-clock"></i>
                  <h3>Open Hours</h3>
                  <p>Monday - Friday<br>9:00AM - 05:00PM</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <form action="forms/contact.php" method="post" class="php-email-form">
              <div class="row gy-4">

                <div class="col-md-6">
                  <input type="text" name="name" class="form-control" placeholder="Your Name" required>
                </div>

                <div class="col-md-6 ">
                  <input type="email" class="form-control" name="email" placeholder="Your Email" required>
                </div>

                <div class="col-md-12">
                  <input type="text" class="form-control" name="subject" placeholder="Subject" required>
                </div>

                <div class="col-md-12">
                  <textarea class="form-control" name="message" rows="6" placeholder="Message" required></textarea>
                </div>

                <div class="col-md-12 text-center">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>

                  <button type="submit" class="bg-dark">Send Message</button>
                </div>

              </div>
            </form>

          </div>

        </div>

      </div>

    </section>

  </main>

  <!--  Footer  -->
  <footer id="footer" class="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-5 col-md-12 footer-info">
            <p class="logo d-flex align-items-center">
              <img src="{{ asset('img/logo.png') }}" alt="">
              <span>JYA Real Estate Services</span>
            </p>
            <p>Your dream house comes true</p>
            <div class="social-links mt-3">
              <a href="#" class="twitter" target="_blank"><i class="bi bi-twitter"></i></a>
              <a href="https://www.facebook.com/bukidnonrealestateservice/" class="facebook" target="_blank"><i class="bi bi-facebook"></i></a>
              <a href="#" class="instagram" target="_blank"><i class="bi bi-instagram"></i></a>
              <a href="#" class="linkedin" target="_blank"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
          <div class="col-lg-2 col-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bi bi-chevron-right"></i> <a href="https://www.facebook.com/bukidnonrealestateservice/" target="_blank">Facebook</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#" target="_blank">Twitter</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#" target="_blank">Instagram</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#" target="_blank">LinkedIn</a></li>
            </ul>
          </div>
          <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
            <h4>Contact Us</h4>
            <p>
              Barangay 6, Magsaysay Street 8700, <br>
              Malaybalay, 9000<br>
              Philippines <br><br>
              <strong>Phone:</strong> 0905 812 8936<br>
              <strong>Email:</strong> jyarealestateservices@gmail.com<br>
            </p>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>JYA Real Estate Service</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        Designed by <a href="https://www.facebook.com/bukidnonrealestateservice/">JYA Real Estate Service</a>
      </div>
    </div>
  </footer>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/js/main.js"></script>
  @livewireScripts

  
@endsection

