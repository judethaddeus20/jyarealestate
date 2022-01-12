@extends('layouts.main')

@section('content')
  @include('partials.guest.header')
  
  <section id="portfolio" class="portfolio">  
    <div class="container">
      
        <header class="section-header">
          <section class="breadcrumbs bg-transparent text-dark">
            <div class="container">
              <ol>
              <li ><a class="text-dark" href="{{ url('/') }}">Home</a></li>
              <li>Propery Details</li>
              </ol>
            </div>
          </section>  
        </header>
      
      
      @livewire('all-properties')
    </div>
  </section>

  

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

