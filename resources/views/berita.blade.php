@include('nav/header')

<body class="starter-page-page">

@include('nav/navbar2')

  <main class="main">
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
            <div class="d-flex justify-content-center mt-5">

                {{$berita->links()}}

            </div>
        </div>

      </div>

    </section><!-- /Portfolio Section -->
  </main>

@include('nav/footer')