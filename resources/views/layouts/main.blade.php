<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>JYA Real Estate</title>


  <!-- Favicons -->
  <link href="{{ asset('img/logo.png') }}" rel="icon">
  <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
  <!-- Scripts -->
  <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/@fortawesome/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
  <link href="{{ asset('select2') }}/select2.min.css" rel="stylesheet">
  <link href="{{ asset('css') }}/fancybox.css" rel="stylesheet">
  <!-- Template Main CSS File -->
  <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
 
  @livewireStyles
</head>
    <body>
      @yield('content')
      <script src="{{ asset('assets') }}/vendor/jquery/dist/jquery.min.js"></script>
      <script src="{{ asset('assets') }}/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
      
      <script src="{{ asset('assets') }}/vendor/purecounter/purecounter.js"></script>
      <script src="{{ asset('assets') }}/vendor/aos/aos.js"></script>
      <script src="{{ asset('assets') }}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
      <script src="{{ asset('assets') }}/vendor/glightbox/js/glightbox.min.js"></script>
      <script src="{{ asset('assets') }}/vendor/isotope-layout/isotope.pkgd.min.js"></script>
      <script src="{{ asset('assets') }}/vendor/swiper/swiper-bundle.min.js"></script>
      <script src="{{ asset('js') }}/fancybox.umd.js"></script>
      @livewireScripts
      <script>
        $(document).ready(function(){

        
          const swiper = new Swiper('.swiper', {  
          autoplay: {
            delay: 1750,
            disableOnInteraction: true
          },
          // If we need pagination
          pagination: {
              el: '.swiper-pagination',
              clickable: true
          },

          // Navigation arrows
          navigation: {
              nextEl: '.swiper-button-next',
              prevEl: '.swiper-button-prev',
          },
          });

          AOS.init({
            debounceDelay: 50, // the delay on debounce used while resizing window (advanced)
            throttleDelay: 99,
            delay: 0,
            
          });
          AOS.refreshHard();
        });
        Fancybox.bind('[data-fancybox="gallery"]', {
          caption: function (fancybox, carousel, slide) {
            return (
              `${slide.index + 1} / ${carousel.slides.length} <br />` + slide.caption
            );
          },
        });
        
        </script>
    </body>
</html>