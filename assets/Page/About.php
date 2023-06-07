<!-- <?php
session_start();


include "../proses/koneksi_db.php";

?> -->


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>About Us</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../img/favicon.png" rel="icon">
  <link href="../img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../vendor/aos/aos.css" rel="stylesheet">
  <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round"> 
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  
  
  
  

  <!-- Template Main CSS File -->
  <link href="../css/about.css" rel="stylesheet">
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <a class="logo me-auto" href="#"><img src="../Image/HimaLogo.png" alt="logo"></a>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href="../../index.php">Home</a></li>
          <li><a class="nav-link scrollto" href="Informasi.php">Informasi</a></li>
          <li><a class="nav-link scrollto" href="kabinet.php">Kabinet</a></li>
          <li><a class="nav-link scrollto" href="Peminjaman.php">Peminjaman</a></li>
          <li><a class="nav-link scrollto "href="Pemilu.php" >Pemilu</a></li>
          <li><a class="nav-link scrollto active" >About</a></li>
          
          <?php
          if (isset($_SESSION['session'])) {
              if($_SESSION["session_admin"]== true){
                echo '<li><a class="getstarted scrollto" id="login" href="tabel\dashboard.php">Admin</a></li>';
              }else{
              echo '<li><a class="getstarted scrollto" id="login" href="Profile.php">Profile</a></li>';
              }
          }  
            else {
                // Tidak ada session login aktif, tampilkan tombol login
                echo '<li><a class="getstarted scrollto" id="login" href="Login.php">Get Started</a></li>';
            }
          ?>

        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

<section id="faq" class="faq">

<div class="container" data-aos="fade-up">

  <div class="section-title" data-aos="fade-up">
          <h2>F.A.Q</h2>
          <p>Frequently Asked Questions</p>
  </div>

  <div class="row">
    <div class="col-lg-6">
      <!-- F.A.Q List 1-->
      <div class="accordion accordion-flush" id="faqlist1">
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-1">
              Bagaimana Cara Untuk Join Kepengurusan Himpunan Mahaiswa Rekayasa Perangkat Lunak?
            </button>
          </h2>
          <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
            <div class="accordion-body">
              Perekrutan kepengurusan HIMARPL dilakukan sekali setiap tahun setelah periode kepengurusan sebelumnya berakhir. 
            </div>
          </div>
        </div>

        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-2">
              Apa Saja Syarat Untuk Join Kepengurusan HIMARPL?
            </button>
          </h2>
          <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
            <div class="accordion-body">
              Mahasiswa yang telah lulus Mokaku dan Mabim RPL, melakukan pendaftaran dan wawancara saat perekrutan  
            </div>
          </div>
        </div>

        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-3">
              Apa Saja Benefit Bergabung dalam Kepengurusan HIMARPL?
            </button>
          </h2>
          <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
            <div class="accordion-body">
              Banyak sekali benefit yang bisa didapatkan setelah bergabung dalam kepengurusan HIMARPL, diantaranya adalah menambah pengalaman berorganisasi, meningkatkan skill kepemimpinan, melatih kemampuan bicara, berbagi pengalaman dengan pengurus lainnya dan membangun relasi.  
            </div>
          </div>
        </div>

      </div>
    </div>

    <div class="col-lg-6">

      <!-- F.A.Q List 2-->
      <div class="accordion accordion-flush" id="faqlist2">

        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2-content-1">
              Apakah Boleh Meminjam Banyak Barang Sekaligus?
            </button>
          </h2>
          <div id="faq2-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
            <div class="accordion-body">
              Boleh, selagi dalam batas wajar dan disertai dengan keterangan peminjaman yang jelas.  
            </div>
          </div>
        </div>

        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2-content-2">
              Bagaimna Jika Barang Telat Dikembalikan?
            </button>
          </h2>
          <div id="faq2-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
            <div class="accordion-body">
              Akan ada sanksi biaya denda bagi mahasiswa yang telat dalam mengembalikan barang pinjamannya. 
            </div>
          </div>
        </div>

        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2-content-3">
              Saya Kok Tidak Bisa Voting Pemilihan Ketua Himpunan Rekayasa Perangkat Lunak?
            </button>
          </h2>
          <div id="faq2-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
            <div class="accordion-body">
              Fitur pemilihan hanya bisa diakses oleh mahasiswa aktif Rekayasa Perangkat Lunak saja. Namun jika kalian merupakan mahasiswa aktif mahasiswa RPL namun tetap tidak bisa, silahkan menghubungi kontak pengurus dibawah.  
            </div>
          </div>
        </div>

      </div>
    </div>

  </div>

</div>

</section><!-- End F.A.Q Section -->

<!-- ======= Testimonials Section ======= -->
<section id="testimonials" class="testimonials">

<div class="container" data-aos="fade-up">

  <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="200">
    <div class="swiper-wrapper">

      <div class="swiper-slide">
        <div class="testimonial-item">
          <div class="stars">
            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
          </div>
          <p>
            Himpunan Mahasiswa Rekayasa Perangkat Lunak memberikan banyak sekali feedback dan benefit bagi saya, mulai dari kemampuan memimpin hingga membentuk relasi baru.
          </p>
          <div class="profile mt-auto">
            <img src="../Image/rama_01.png" class="testimonial-img" alt="">
            <h3>Ramaditya Firdaus</h3>
            <h4>Programmer</h4>
          </div>
        </div>
      </div><!-- End testimonial item -->

      <div class="swiper-slide">
        <div class="testimonial-item">
          <div class="stars">
            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
          </div>
          <p>
            Secara langsung membentuk karakter mahasiswa menjadi insan yang bertanggung jawab melalui berbagai proker yang ada.
          </p>
          <div class="profile mt-auto">
            <img src="../Image/cherry_01.png" class="testimonial-img" alt="">
            <h3>Cherry Adya Zahra</h3>
            <h4>Mahaiswa</h4>
          </div>
        </div>
      </div><!-- End testimonial item -->

      <div class="swiper-slide">
        <div class="testimonial-item">
          <div class="stars">
            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
          </div>
          <p>
            Himpunan Mahasiswa Rekayasa Perangkat Lunak menjadi wadah bagi mahasiswa untuk mencurahkan keluhan, aspirasi maupun media untuk mengasah kemampuan diri.
          </p>
          <div class="profile mt-auto">
            <img src="../Image/rafid_01.png" class="testimonial-img" alt="">
            <h3>Muhammad Rafid Miftah Fadhil</h3>
            <h4>Ketua DP</h4>
          </div>
        </div>
      </div><!-- End testimonial item -->

      <div class="swiper-slide">
        <div class="testimonial-item">
          <div class="stars">
            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
          </div>
          <p>
            Memberikan kesan yang positif, pengurus yang ramah-ramah dalam membantu permasalahan yang dialami mahasiswa.
          </p>
          <div class="profile mt-auto">
            <img src="../Image/faiz_01.png" class="testimonial-img" alt="">
            <h3>Faiz Junsyar</h3>
            <h4>Mahasiswa</h4>
          </div>
        </div>
      </div><!-- End testimonial item -->

      <div class="swiper-slide">
        <div class="testimonial-item">
          <div class="stars">
            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
          </div>
          <p>
            Himpunan Mahasiswa Rekayasa Perangkat Lunak menjadi wadah bagi mahasiswa untuk mencurahkan keluhan, aspirasi maupun media untuk mengasah kemampuan diri.  
          </p>
          <div class="profile mt-auto">
            <img src="../Image/rafid_01.png" class="testimonial-img" alt="">
            <h3>Muhammad Rafid Miftah Fadhil</h3>
            <h4>Mahaiswa</h4>
          </div>
        </div>
      </div><!-- End testimonial item -->

    </div>
    <div class="swiper-pagination"></div>
  </div>

</div>

</section><!-- End Testimonials Section -->

 <!-- ======= Contact Section ======= -->
 <section id="contact" class="contact">

<div class="container" data-aos="fade-up">

  <div class="section-title" data-aos="fade-up">
        <p>Contact Us</p>
  </div>

  <div class="row gy-4">

    <div class="col-lg-6">

      <div class="row gy-4">
        <div class="col-md-6">
          <div class="info-box">
            <i class="bi bi-geo-alt"></i>
            <h3>Address</h3>
            <p>Jl. Pendidikan No.15, Cibiru Wetan<br>
               Kec. Cileunyi, Kab. Bandung 40625</p>
          </div>
        </div>
        <div class="col-md-6">
          <div class="info-box">
            <i class="bi bi-telephone"></i>
            <h3>Call Us</h3>
            <p>+62 851 5663 8465<br>+62 212 0000 0354</p>
          </div>
        </div>
        <div class="col-md-6">
          <div class="info-box">
            <i class="bi bi-envelope"></i>
            <h3>Email Us</h3>
            <p>himarpl@gmail.com<br>ramadityafirdaus@upi.edu</p>
          </div>
        </div>
        <div class="col-md-6">
          <div class="info-box">
            <i class="bi bi-clock"></i>
            <h3>Open Hours</h3>
            <p>Monday - Friday<br>8:00AM - 05:00PM</p>
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

            <button type="submit">Send Message</button>
          </div>

        </div>
      </form>

    </div>

  </div>

</div>

</section><!-- End Contact Section -->


 <!-- ======= Footer ======= -->
<footer style="padding:0;" id="footer">

<div class="footer-top">
  <div class="container">
    <div class="row">

      <div class="col-lg-3 col-md-6 footer-contact">
        <h3>HIMARPL</h3>
        <p>
          Jl. Pendidikan No.15, Cibiru Wetan<br>
          Kec. Cileunyi, Kabupaten Bandung<br>
          Jawa Barat 40625 <br><br>
          <strong>Phone:</strong> +62 851 5663 8465<br>
          <strong>Email:</strong> himarpl@gmail.com<br>
        </p>
      </div>

      <div class="col-lg-3 col-md-6 footer-links">
        <h4>Useful Links</h4>
        <ul>
          <li><i class="bx bx-chevron-right active"></i> <a href="#">Home</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="assets/Page/Informasi.php">Informasi</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="assets/Page/Kabinet.php">Kabinet</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="assets/Page/About.php">About</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="assets/Page/Pemilu.php">Pemilu</a></li>
        </ul>
      </div>

      <div class="col-lg-3 col-md-6 footer-links">
        <h4>Our Services</h4>
        <ul>
          <li><i class="bx bx-chevron-right"></i> <a >Advokasi</a></li>
          <li><i class="bx bx-chevron-right"></i> <a >Bantuan</a></li>
        </ul>
      </div>

      <div class="col-lg-3 col-md-6 footer-links">
        <h4>Our Social Networks</h4>
        <p>Follow Berbagai Informasi Lainnya di Platform Lainnya</p>
        <div class="social-links mt-3">
          <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
          <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
          <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
          <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
          <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div>
      </div>

    </div>
  </div>
</div>
</footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <script src="../vendor/aos/aos.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../vendor/glightbox/js/glightbox.min.js"></script>
  <script src="../vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../vendor/swiper/swiper-bundle.min.js"></script>
  <script src="../vendor/php-email-form/validate.js"></script>

  <script src="../js/main.js"></script>

 

<script>
(function() {
  "use strict";

  /**
   * Easy selector helper function
   */
  const select = (el, all = false) => {
    el = el.trim()
    if (all) {
      return [...document.querySelectorAll(el)]
    } else {
      return document.querySelector(el)
    }
  }

  /**
   * Easy event listener function
   */
  const on = (type, el, listener, all = false) => {
    if (all) {
      select(el, all).forEach(e => e.addEventListener(type, listener))
    } else {
      select(el, all).addEventListener(type, listener)
    }
  }

  /**
   * Easy on scroll event listener 
   */
  const onscroll = (el, listener) => {
    el.addEventListener('scroll', listener)
  }

  /**
   * Navbar links active state on scroll
   */
  let navbarlinks = select('#navbar .scrollto', true)
  const navbarlinksActive = () => {
    let position = window.scrollY + 200
    navbarlinks.forEach(navbarlink => {
      if (!navbarlink.hash) return
      let section = select(navbarlink.hash)
      if (!section) return
      if (position >= section.offsetTop && position <= (section.offsetTop + section.offsetHeight)) {
        navbarlink.classList.add('active')
      } else {
        navbarlink.classList.remove('active')
      }
    })
  }
  window.addEventListener('load', navbarlinksActive)
  onscroll(document, navbarlinksActive)

  /**
   * Scrolls to an element with header offset
   */
  const scrollto = (el) => {
    let header = select('#header')
    let offset = header.offsetHeight

    if (!header.classList.contains('header-scrolled')) {
      offset -= 10
    }

    let elementPos = select(el).offsetTop
    window.scrollTo({
      top: elementPos - offset,
      behavior: 'smooth'
    })
  }

  /**
   * Toggle .header-scrolled class to #header when page is scrolled
   */
  let selectHeader = select('#header')
  if (selectHeader) {
    const headerScrolled = () => {
      if (window.scrollY > 100) {
        selectHeader.classList.add('header-scrolled')
      } else {
        selectHeader.classList.remove('header-scrolled')
      }
    }
    window.addEventListener('load', headerScrolled)
    onscroll(document, headerScrolled)
  }

  /**
   * Back to top button
   */
  let backtotop = select('.back-to-top')
  if (backtotop) {
    const toggleBacktotop = () => {
      if (window.scrollY > 100) {
        backtotop.classList.add('active')
      } else {
        backtotop.classList.remove('active')
      }
    }
    window.addEventListener('load', toggleBacktotop)
    onscroll(document, toggleBacktotop)
  }

  /**
   * Mobile nav toggle
   */
  on('click', '.mobile-nav-toggle', function(e) {
    select('#navbar').classList.toggle('navbar-mobile')
    this.classList.toggle('bi-list')
    this.classList.toggle('bi-x')
  })

  /**
   * Mobile nav dropdowns activate
   */
  on('click', '.navbar .dropdown > a', function(e) {
    if (select('#navbar').classList.contains('navbar-mobile')) {
      e.preventDefault()
      this.nextElementSibling.classList.toggle('dropdown-active')
    }
  }, true)

  /**
   * Scrool with ofset on links with a class name .scrollto
   */
  on('click', '.scrollto', function(e) {
    if (select(this.hash)) {
      e.preventDefault()

      let navbar = select('#navbar')
      if (navbar.classList.contains('navbar-mobile')) {
        navbar.classList.remove('navbar-mobile')
        let navbarToggle = select('.mobile-nav-toggle')
        navbarToggle.classList.toggle('bi-list')
        navbarToggle.classList.toggle('bi-x')
      }
      scrollto(this.hash)
    }
  }, true)

  /**
   * Scroll with ofset on page load with hash links in the url
   */
  window.addEventListener('load', () => {
    if (window.location.hash) {
      if (select(window.location.hash)) {
        scrollto(window.location.hash)
      }
    }
  });

  /**
   * Clients Slider
   */
  new Swiper('.clients-slider', {
    speed: 400,
    loop: true,
    autoplay: {
      delay: 5000,
      disableOnInteraction: false
    },
    slidesPerView: 'auto',
    pagination: {
      el: '.swiper-pagination',
      type: 'bullets',
      clickable: true
    },
    breakpoints: {
      320: {
        slidesPerView: 2,
        spaceBetween: 40
      },
      480: {
        slidesPerView: 3,
        spaceBetween: 60
      },
      640: {
        slidesPerView: 4,
        spaceBetween: 80
      },
      992: {
        slidesPerView: 6,
        spaceBetween: 120
      }
    }
  });

  /**
   * Porfolio isotope and filter
   */
  window.addEventListener('load', () => {
    let portfolioContainer = select('.portfolio-container');
    if (portfolioContainer) {
      let portfolioIsotope = new Isotope(portfolioContainer, {
        itemSelector: '.portfolio-item',
        layoutMode: 'fitRows'
      });

      let portfolioFilters = select('#portfolio-flters li', true);

      on('click', '#portfolio-flters li', function(e) {
        e.preventDefault();
        portfolioFilters.forEach(function(el) {
          el.classList.remove('filter-active');
        });
        this.classList.add('filter-active');

        portfolioIsotope.arrange({
          filter: this.getAttribute('data-filter')
        });
        aos_init();
      }, true);
    }

  });

  /**
   * Initiate portfolio lightbox 
   */
  const portfolioLightbox = GLightbox({
    selector: '.portfokio-lightbox'
  });

  /**
   * Portfolio details slider
   */
  new Swiper('.portfolio-details-slider', {
    speed: 400,
    autoplay: {
      delay: 5000,
      disableOnInteraction: false
    },
    pagination: {
      el: '.swiper-pagination',
      type: 'bullets',
      clickable: true
    }
  });

  /**
   * Testimonials slider
   */
  new Swiper('.testimonials-slider', {
    speed: 600,
    loop: true,
    autoplay: {
      delay: 5000,
      disableOnInteraction: false
    },
    slidesPerView: 'auto',
    pagination: {
      el: '.swiper-pagination',
      type: 'bullets',
      clickable: true
    },
    breakpoints: {
      320: {
        slidesPerView: 1,
        spaceBetween: 40
      },

      1200: {
        slidesPerView: 3,
      }
    }
  });

  /**
   * Animation on scroll
   */
  function aos_init() {
    AOS.init({
      duration: 1000,
      easing: "ease-in-out",
      once: true,
      mirror: false
    });
  }
  window.addEventListener('load', () => {
    aos_init();
  });

  /**
   * Initiate Pure Counter 
   */
  new PureCounter();

})();

</script>


</body>

</html>