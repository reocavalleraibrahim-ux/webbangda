@include('nav/header')

<body class="starter-page-page">

@include('nav/navbar')

  <main class="main">

    <section id="hero" class="hero-section">

          <div class="hero-slider container-fluid">

              <!-- Carousel -->
              <div id="carouselExampleFade"
                  class="carousel slide carousel-fade h-100"
                  data-bs-ride="carousel"
                  data-bs-interval="3000">

                  <div class="carousel-inner h-100">

                      @foreach($slider as $key => $s)

                      <div class="carousel-item {{ $key == 0 ? 'active' : '' }} h-100">

                          <img src="{{ asset('storage/'.$s->name) }}"
                              class="d-block w-100 h-100 object-fit-cover">

                      </div>

                      @endforeach

                  </div>

                  <!-- Overlay -->
                  <div class="hero-overlay"></div>

                  <!-- Content -->
                  <div class="hero-content">


                  </div>

                  <!-- Button -->
                  <button class="carousel-control-prev"
                          type="button"
                          data-bs-target="#carouselExampleFade"
                          data-bs-slide="prev">

                      <span class="carousel-control-prev-icon"></span>

                  </button>

                  <button class="carousel-control-next"
                          type="button"
                          data-bs-target="#carouselExampleFade"
                          data-bs-slide="next">

                      <span class="carousel-control-next-icon"></span>

                  </button>

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

            @foreach($berita as $b)
            
            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-web">
              <div class="project-card">
                <div class="image-wrapper">
                  <img src="{{asset('storage/'.$b->thumbnail)}}" alt="Project showcase" class="img-fluid" loading="lazy">
                  <div class="hover-overlay">
                    <div class="overlay-actions">
                      <!--<a href="{{url('detailBerita/'.$b->id)}}" class="glightbox action-btn" data-gallery="portfolio">
                        <i class="bi bi-eye"></i>
                      </a>-->
                    </div>
                  </div>
                </div>
                <div class="project-info">
                  <h3>{{$b->judul}}</h3>
                  <p>{!! Str::words($b->isi,20) !!}</p>
                  <div class="project-meta">
                    <div class="tech-tags">
                      <a href="{{url('/detailBerita/'.$b->id)}}"><span>Selengkapnya >></span></a>
                    </div>
                    <span class="year">{{date('d F Y',strtotime($b->created_at))}}</span>
                  </div>
                </div>
              </div>
            </div><!-- End Portfolio Item -->
          
          @endforeach
              
          </div><!-- End Portfolio Container -->
            <div style="text-align:center; margin-top:20px;">
              <a href="{{url('/allBerita')}}" class="btn btn-primary align-middle">Semua Berita</a>
            </div>
        </div>

      </div>

    </section><!-- /Portfolio Section -->
  </main>

@include('nav/footer')