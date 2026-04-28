@include('nav/header')

<body class="starter-page-page">

@include('nav/navbar')

  <main class="main">

    <section id="hero" class="hero section position-relative">

  <!-- Background Carousel -->
  <div id="carouselExampleFade" class="carousel slide carousel-fade position-absolute top-0 w-100 h-100" data-bs-ride="carousel" data-bs-interval="3000">
    <div class="carousel-inner h-100">

      <div class="carousel-item active h-100">
        <img src="{{asset('image/struktur.png')}}" class="d-block w-100 h-100 object-fit-cover">
      </div>

      <div class="carousel-item h-100">
        <img src="{{asset('image/struktur.png')}}" class="d-block w-100 h-100 object-fit-cover">
      </div>

      <div class="carousel-item h-100">
        <img src="{{asset('image/struktur.png')}}" class="d-block w-100 h-100 object-fit-cover">
      </div>

      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
            <span class="carousel-control-prev-icon btn btn-primary" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
            <span class="carousel-control-next-icon btn btn-primary" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
    </div>
  </div>

  <!-- Overlay biar teks kebaca -->
  <div class="position-absolute top-0 w-100 h-100" style="background: rgba(0,0,0,0.9);"></div>

  <!-- Content -->
  <div class="container position-relative text-white" style="z-index: 2;" data-aos="fade-up">

    <div class="row align-items-center" style="min-height: 400px;">

      <div class="col-lg-6">
        <div class="hero-content">


        </div>
      </div>

    </div>

  </div>

</section>

  <!-- About Section -->
    <section id="tentang" class="about section">

      <div class="container-fluid" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-5 align-items-center">

           <div class="col-xl-6 aos-init aos-animate" data-aos="fade-right" data-aos-delay="200">
            <div class="about-images-wrapper">
              <div class="image-main">
                <img src="{{asset('image/struktur.png')}}" alt="Business meeting" class="img-fluid">
              </div>
            </div>
          </div>
           
          <div class="col-xl-6 aos-init aos-animate" data-aos="fade-left" data-aos-delay="300">
            <div class="about-content">
              <div class="section-subtitle">Tentang Kami</div>
              <h2>Tugas dan Fungsi Kami</h2>
              <p class="lead-text">
                Biro Administrasi Pembangunan Daerah berperan dalam mengoordinasikan, mengendalikan, serta mengevaluasi pelaksanaan pembangunan daerah secara terintegrasi. Melalui sinergi lintas perangkat daerah dan penguatan administrasi pembangunan, kami memastikan setiap kebijakan berjalan efektif, terarah, dan akuntabel.
              </p>
              <p class="mb-4 description">
                Tugas dan Fungsi kami diatur dalam <b>Peraturan Gubernur Jawa tengah Nomor 1 Tahun 2026 tentang Kedudukan, Susunan, Organisasi, Tugas dan Fungsi, Serta Tata Kerja Sekretariat Daerah, Sekretariat Dewan Perwakilan Rakyat Daerah, Inspektorat dan Pembentukan Staf Ahli Gubernur</b>.
              </p>
              <div class="features-grid">
                <div class="feature-card">
                  <span>Tugas Pokok dan Fungsi</span>
                </div>
                <div class="feature-card">
                  <span>Maklumat Pelayanan</span>
                </div>
                <div class="feature-card">
                  <span>Standar Pelayanan</span>
                </div>
              </div>

            </div>
          </div>

        </div>

      </div>

    </section><!-- /About Section -->

    <!-- Portfolio Section -->
    <section id="berita" class="portfolio section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Berita Terbaru</h2>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="isotope-layout" data-default-filter="*" data-layout="fitRows" data-sort="original-order">

          <!--<div class="filters-wrapper" data-aos="fade-up" data-aos-delay="100">
            <ul class="portfolio-filters isotope-filters">
              <li data-filter="*" class="filter-active">All Projects</li>
              <li data-filter=".filter-web">Web Design</li>
              <li data-filter=".filter-mobile">Mobile Apps</li>
              <li data-filter=".filter-branding">Branding</li>
              <li data-filter=".filter-ui">UI/UX</li>
            </ul>
          </div>-->

          <div class="row g-4 isotope-container" data-aos="fade-up" data-aos-delay="200">

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-web">
              <div class="project-card">
                <div class="image-wrapper">
                  <img src="{{asset('orbit/img/portfolio/portfolio-2.webp')}}" alt="Project showcase" class="img-fluid" loading="lazy">
                  <div class="hover-overlay">
                    <div class="overlay-actions">
                      <a href="{{asset('orbit/img/portfolio/portfolio-2.webp')}}" class="glightbox action-btn" data-gallery="portfolio">
                        <i class="bi bi-eye"></i>
                      </a>
                      <a href="#" class="action-btn">
                        <i class="bi bi-link-45deg"></i>
                      </a>
                    </div>
                  </div>
                  <span class="category-badge">Web Design</span>
                </div>
                <div class="project-info">
                  <h3>Corporate Dashboard System</h3>
                  <p>Pellentesque habitant morbi tristique senectus et netus.</p>
                  <div class="project-meta">
                    <div class="tech-tags">
                      <span>Angular</span>
                      <span>Python</span>
                    </div>
                    <span class="year">2024</span>
                  </div>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-mobile">
              <div class="project-card featured">
                <div class="image-wrapper">
                  <img src="{{asset('orbit/img/portfolio/portfolio-4.webp')}}" alt="Project showcase" class="img-fluid" loading="lazy">
                  <div class="hover-overlay">
                    <div class="overlay-actions">
                      <a href="{{ asset('orbit/img/portfolio/portfolio-4.webp')}}" class="glightbox action-btn" data-gallery="portfolio">
                        <i class="bi bi-eye"></i>
                      </a>
                      <a href="#" class="action-btn">
                        <i class="bi bi-link-45deg"></i>
                      </a>
                    </div>
                  </div>
                  <span class="category-badge">Mobile Apps</span>
                  <span class="featured-badge"><i class="bi bi-star-fill"></i> Featured</span>
                </div>
                <div class="project-info">
                  <h3>Smart Finance Application</h3>
                  <p>Maecenas tempus tellus eget condimentum rhoncus.</p>
                  <div class="project-meta">
                    <div class="tech-tags">
                      <span>Swift</span>
                      <span>Kotlin</span>
                    </div>
                    <span class="year">2024</span>
                  </div>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
              <div class="project-card">
                <div class="image-wrapper">
                  <img src="{{asset('orbit/img/portfolio/portfolio-6.webp')}}" alt="Project showcase" class="img-fluid" loading="lazy">
                  <div class="hover-overlay">
                    <div class="overlay-actions">
                      <a href="{{asset('orbit/img/portfolio/portfolio-6.webp')}}" class="glightbox action-btn" data-gallery="portfolio">
                        <i class="bi bi-eye"></i>
                      </a>
                      <a href="#" class="action-btn">
                        <i class="bi bi-link-45deg"></i>
                      </a>
                    </div>
                  </div>
                  <span class="category-badge">Branding</span>
                </div>
                <div class="project-info">
                  <h3>Fashion Label Identity</h3>
                  <p>Donec quam felis ultricies nec pellentesque pretium.</p>
                  <div class="project-meta">
                    <div class="tech-tags">
                      <span>Photoshop</span>
                      <span>Illustrator</span>
                    </div>
                    <span class="year">2023</span>
                  </div>
                </div>
              </div>
            </div><!-- End Portfolio Item -->


          </div><!-- End Portfolio Container -->

        </div>

      </div>

    </section><!-- /Portfolio Section -->
  </main>

@include('nav/footer')