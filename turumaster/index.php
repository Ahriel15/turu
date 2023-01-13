<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Klinik Gigi Anda</title>

  <!-- 
    - favicon
  -->
  <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="./assets/css/style.css">

  <!-- 
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:wght@600;700;800&family=Roboto:wght@400;500;600&display=swap"
    rel="stylesheet">
</head>

<body id="top">

  <!-- 
    - #HEADER
  -->

  <header class="header">

    <div class="header-top">
      <div class="container">

        <ul class="contact-list">

          <li class="contact-item">
            <ion-icon name="mail-outline"></ion-icon>

            <a href="mailto:Asrildre7@outlook.com" class="contact-link">tatazurel@gmail.com</a>
          </li>

          <li class="contact-item">
            <ion-icon name="call-outline"></ion-icon>

            <a href="tel:+6282216101452" class="contact-link">+62822-1610-1452</a>
          </li>

        </ul>

        <ul class="social-list">

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-facebook"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-instagram"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-twitter"></ion-icon>
            </a>
          </li>

          <li>
            <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" class="social-link">
              <ion-icon name="logo-youtube"></ion-icon>
            </a>
          </li>

        </ul>

      </div>
    </div>

    <div class="header-bottom" data-header>
      <div class="container">

        <a href="#" class="logo">Gigi Anda.</a>

        <nav class="navbar container" data-navbar>
          <ul class="navbar-list">

            <li>
              <a href="#home" class="navbar-link" data-nav-link>Beranda</a>
            </li>

            <li>
              <a href="#service" class="navbar-link" data-nav-link>Layanan</a>
            </li>
            
            <li>
              <a href="#" class="navbar-link" data-nav-link>Kontak</a>
            </li>

          </ul>
        </nav>

        <a href="form.php" class="btn">Lakukan Konsultasi</a>

        <button class="nav-toggle-btn" aria-label="Toggle menu" data-nav-toggler>
          <ion-icon name="menu-sharp" aria-hidden="true" class="menu-icon"></ion-icon>
          <ion-icon name="close-sharp" aria-hidden="true" class="close-icon"></ion-icon>
        </button>

      </div>
    </div>

  </header>





  <main>
    <article>

      <!-- 
        - #HERO
      -->

      <section class="section hero" id="home" style="background-image: url('./assets/images/hero-bg.png')"
        aria-label="hero">
        <div class="container">

          <div class="hero-content">

            <p class="section-subtitle">Selamat Datang di Tukang Gigi Anda</p>

            <h1 class="h1 hero-title">Kami Mengklaim Bahwa Kami Adalah Salah Satu Klinik Terbaik</h1>

            <p class="hero-text">
             Sudah membuka klinik lebih dari 10 tahun.
            </p>

      

          </div>

          <figure class="hero-banner">
            <img src="./assets/images/hero-banner.png" width="587" height="839" alt="hero banner" class="w-100">
          </figure>

        </div>
      </section>





      <!-- 
        - #SERVICE
      -->

      <section class="section service" id="service" aria-label="service">
        <div class="container">

          <p class="section-subtitle text-center">Layanan Kami</p>

          <h2 class="h2 section-title text-center">Apa Yang Kami Sediakan</h2>

          <ul class="service-list">

            <li>
              <div class="service-card">

                <div class="card-icon">
                  <img src="./assets/images/service-icon-1.png" width="100" height="100" loading="lazy"
                    alt="service icon" class="w-100">
                </div>

                <div>
                  <h3 class="h3 card-title">Perawatan Saluran Akar Gigi</h3>

                  <p class="card-text">
                  Perawatan untuk mengatasi gigi yang terinfeksi tanpa perlu mencabutnya
                  </p>
                </div>

              </div>
            </li>

            <li>
              <div class="service-card">

                <div class="card-icon">
                  <img src="./assets/images/service-icon-2.png" width="100" height="100" loading="lazy"
                    alt="service icon" class="w-100">
                </div>

                <div>
                  <h3 class="h3 card-title">Pembersihan Gigi</h3>

                  <p class="card-text">
                    Layanan membersihkan plak, karang pada gigi, dll.
                  </p>
                </div>

              </div>
            </li>

            <li>
              <div class="service-card">

                <div class="card-icon">
                  <img src="./assets/images/service-icon-3.png" width="100" height="100" loading="lazy"
                    alt="service icon" class="w-100">
                </div>

                <div>
                  <h3 class="h3 card-title">Kosmetik Gigi</h3>

                  <p class="card-text">
                  Pemasangan Behel, Veener, Crown, dan lain-lain.
                  </p>
                </div>

              </div>
            </li>

            <li class="service-banner">
              <figure>
                <img src="./assets/images/service-banner.png" width="409" height="467" loading="lazy"
                  alt="service banner" class="w-100">
              </figure>
            </li>

            <li>
              <div class="service-card">

                <div class="card-icon">
                  <img src="./assets/images/service-icon-4.png" width="100" height="100" loading="lazy"
                    alt="service icon" class="w-100">
                </div>

                <div>
                  <h3 class="h3 card-title">Konsultasi Kebersihan Mulut</h3>

                  <p class="card-text">
                   Dimana dokter memberi saran dan bimbingan untuk merawat gigi pasca perawatan
                  </p>
                </div>

              </div>
            </li>

            <li>
              <div class="service-card">

                <div class="card-icon">
                  <img src="./assets/images/service-icon-5.png" width="100" height="100" loading="lazy"
                    alt="service icon" class="w-100">
                </div>

                <div>
                  <h3 class="h3 card-title">Implant Gigi</h3>

                  <p class="card-text">
                Penanaman gigi dengan metode implant 
                  </p>
                </div>

              </div>
            </li>

            <li>
              <div class="service-card">

                <div class="card-icon">
                  <img src="./assets/images/service-icon-6.png" width="100" height="100" loading="lazy"
                    alt="service icon" class="w-100">
                </div>

                <div>
                  <h3 class="h3 card-title">Pengecekan Lubang Gigi</h3>

                  <p class="card-text">
                  Pasien akan dicek giginya untuk menentukan tindakan apa yang akan dilakukan selanjutnya.
                  </p>
                </div>

              </div>
            </li>

          </ul>

        </div>
      </section>





      <!-- 
        - #DOCTOR
      -->

      <section class="section doctor" aria-label="doctor">
        <div class="container">

          <p class="section-subtitle text-center">Dokter Kami</p>

          <h2 class="h2 section-title text-center">Dokter yang berpengalaman</h2>

          <ul class="has-scrollbar">

            <li class="scrollbar-item">
              <div class="doctor-card">

                <div class="card-banner img-holder" style="--width: 460; --height: 500;">
                  <img src="./assets/images/doctor-1.jpg" width="460" height="500" loading="lazy" alt="Howard Holmes"
                    class="img-cover">
                </div>

                <h3 class="h3">
                  <a href="#" class="card-title">Alex Oldyoung</a>
                </h3>

                <p class="card-subtitle">Menjadi dokter gigi tidak mengakibatkan stress sama sekali<br><br> -alex, 30 tahun.</p>

                <ul class="card-social-list">

                  <li>
                    <a href="#" class="card-social-link">
                      <ion-icon name="logo-facebook"></ion-icon>
                    </a>
                  </li>

                  <li>
                    <a href="#" class="card-social-link">
                      <ion-icon name="logo-twitter"></ion-icon>
                    </a>
                  </li>

                  <li>
                    <a href="#" class="card-social-link">
                      <ion-icon name="logo-instagram"></ion-icon>
                    </a>
                  </li>

                </ul>

              </div>
            </li>

            <li class="scrollbar-item">
              <div class="doctor-card">

                <div class="card-banner img-holder" style="--width: 460; --height: 500;">
                  <img src="./assets/images/doctor-2.jpg" width="460" height="500" loading="lazy" alt="Ella Thompson"
                    class="img-cover">
                </div>

                <h3 class="h3">
                  <a href="#" class="card-title">Ivan A Cat</a>
                </h3>

                <p class="card-subtitle">What am i doing here??<br><br><br><br><br></p>

                <ul class="card-social-list">

                  <li>
                    <a href="#" class="card-social-link">
                      <ion-icon name="logo-facebook"></ion-icon>
                    </a>
                  </li>

                  <li>
                    <a href="#" class="card-social-link">
                      <ion-icon name="logo-twitter"></ion-icon>
                    </a>
                  </li>

                  <li>
                    <a href="#" class="card-social-link">
                      <ion-icon name="logo-instagram"></ion-icon>
                    </a>
                  </li>

                </ul>

              </div>
            </li>

            <li class="scrollbar-item">
              <div class="doctor-card">

                <div class="card-banner img-holder" style="--width: 460; --height: 500;">
                  <img src="./assets/images/doctor-3.webp" width="460" height="500" loading="lazy" alt="Vincent Cooper"
                    class="img-cover">
                </div>

                <h3 class="h3">
                  <a href="#" class="card-title">Megamind</a>
                </h3>

                <p class="card-subtitle">Hee em, mau saya copot giginya?<br><br><br><br></p>

                <ul class="card-social-list">

                  <li>
                    <a href="#" class="card-social-link">
                      <ion-icon name="logo-facebook"></ion-icon>
                    </a>
                  </li>

                  <li>
                    <a href="#" class="card-social-link">
                      <ion-icon name="logo-twitter"></ion-icon>
                    </a>
                  </li>

                  <li>
                    <a href="#" class="card-social-link">
                      <ion-icon name="logo-instagram"></ion-icon>
                    </a>
                  </li>

                </ul>

              </div>
            </li>

            <li class="scrollbar-item">
              <div class="doctor-card">

                <div class="card-banner img-holder" style="--width: 460; --height: 500;">
                  <img src="./assets/images/doctor-4.png" width="460" height="500" loading="lazy" alt="Danielle Bryant"
                    class="img-cover">
                </div>

                <h3 class="h3">
                  <a href="#" class="card-title">Danielle Bryant</a>
                </h3>

                <p class="card-subtitle">Dentist<br><br><br><br><br></p>

                <ul class="card-social-list">

                  <li>
                    <a href="#" class="card-social-link">
                      <ion-icon name="logo-facebook"></ion-icon>
                    </a>
                  </li>

                  <li>
                    <a href="#" class="card-social-link">
                      <ion-icon name="logo-twitter"></ion-icon>
                    </a>
                  </li>

                  <li>
                    <a href="#" class="card-social-link">
                      <ion-icon name="logo-instagram"></ion-icon>
                    </a>
                  </li>

                </ul>

              </div>
            </li>

          </ul>

        </div>
      </section>





      <!-- 
        - #CTA
      -->

      <section class="section cta" aria-label="cta">
        <div class="container">

          <figure class="cta-banner">
            <img src="./assets/images/cta-banner.webp" width="1056" height="1076" loading="lazy" alt="cta banner"
              class="w-100">
          </figure>

          <div class="cta-content">

            <p class="section-subtitle">Lakukan Konsultasi Sekarang juga!</p>

            <h2 class="h2 section-title">Kami Siap Melayani Anda</h2>

            <a href="#" class="btn">Lakukan Konsultasi</a>

          </div>

        </div>
      </section>





     

  <!-- 
    - #FOOTER
  -->

  <footer class="footer">

    <div class="footer-top section">
      <div class="container">

        <div class="footer-brand">

          <a href="#" class="logo">Gigi Anda</a>

          <p class="footer-text">
            Jika anda mau mencoba layanan kami, kami dengan bersedia melayani anda pada pukul.
          </p>

          <div class="schedule">
            <div class="schedule-icon">
              <ion-icon name="time-outline"></ion-icon>
            </div>

            <span class="span">
              Senin - Sabtu:<br>
              9:00am - 10:00Pm
            </span>
          </div>

        </div>

        <ul class="footer-list">

          <li>
            <p class="footer-list-title">Other Links</p>
          </li>

          <li>
            <a href="#" class="footer-link">
              <ion-icon name="add-outline"></ion-icon>

              <span class="span">Beranda</span>
            </a>
          </li>

          <li>
            <a href="#" class="footer-link">
              <ion-icon name="add-outline"></ion-icon>

              <span class="span">Layanan</span>
            </a>
          </li>


        </ul>

        <ul class="footer-list">

          <li>
            <p class="footer-list-title">Our Services</p>
          </li>

          <li>
            <a href="#" class="footer-link">
              <ion-icon name="add-outline"></ion-icon>

              <span class="span">Perawatan Saluran Akar Gigi</span>
            </a>
          </li>

          <li>
            <a href="#" class="footer-link">
              <ion-icon name="add-outline"></ion-icon>

              <span class="span">Perbersihan Gigi</span>
            </a>
          </li>

          <li>
            <a href="#" class="footer-link">
              <ion-icon name="add-outline"></ion-icon>

              <span class="span">Kosmetik Gigi</span>
            </a>
          </li>

          <li>
            <a href="#" class="footer-link">
              <ion-icon name="add-outline"></ion-icon>

              <span class="span">Konsultasi Kebersihan Mulut</span>
            </a>
          </li>

          <li>
            <a href="#" class="footer-link">
              <ion-icon name="add-outline"></ion-icon>

              <span class="span">Implant Gigi</span>
            </a>
          </li>

          <li>
            <a href="#" class="footer-link">
              <ion-icon name="add-outline"></ion-icon>

              <span class="span">Pengecekan Lubang Gigi</span>
            </a>
          </li>

        </ul>

        <ul class="footer-list">

          <li>
            <p class="footer-list-title">Hubungi Kami</p>
          </li>

          <li class="footer-item">
            <div class="item-icon">
              <ion-icon name="location-outline"></ion-icon>
            </div>

            <address class="item-text">
              Jl. Pangeran Hidayatullah Sungai Jingah,
              Banjarmasin Utara, Kota Banjarmasin, Kalimantan Selatan
            </address>
          </li>

          <li class="footer-item">
            <div class="item-icon">
              <ion-icon name="call-outline"></ion-icon>
            </div>

            <a href="tel:+917052101786" class="footer-link">+62822-1610-1452</a>
          </li>

          <li class="footer-item">
            <div class="item-icon">
              <ion-icon name="mail-outline"></ion-icon>
            </div>

            <a href="mailto:tatazurel@gmail.com" class="footer-link">tatazurel@gmail.com</a>
          </li>

        </ul>

      </div>
    </div>

    <div class="footer-bottom">
      <div class="container">

        <p class="copyright">
          &copy; 2022 All Rights Reserved.
        </p>

        <ul class="social-list">

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-facebook"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-instagram"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-twitter"></ion-icon>
            </a>
          </li>

        </ul>

      </div>
    </div>

  </footer>





  <!-- 
    - #BACK TO TOP
  -->

  <a href="#top" class="back-top-btn" aria-label="back to top" data-back-top-btn>
    <ion-icon name="caret-up" aria-hidden="true"></ion-icon>
  </a>





  <!-- 
    - custom js link
  -->
  <script src="./assets/js/script.js" defer></script>

  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>
