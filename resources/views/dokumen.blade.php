@include('nav/header')

<body class="starter-page-page">

@include('nav/navbar2')

  <main class="main">
    <!-- Portfolio Section -->
    <section id="dokumen" class="portfolio section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Dokumen Publik</h2>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="isotope-layout" data-default-filter="*" data-layout="fitRows" data-sort="original-order">

          <div class="row g-4 isotope-container" data-aos="fade-up" data-aos-delay="200">
            <div class="col-lg-12 col-md-6 portfolio-item isotope-item filter-web">
            <ul class="dokumen" >
            @foreach($kategori as $k)
                <li><span class="bi bi-file-earmark-fill"></span> &nbsp;<a href="{{url('/kat/'.$k->id)}}">{{$k->nama_kategori}}</a></li>
            @endforeach
            </ul>
          </div>
          </div><!-- End Portfolio Container -->
            
        </div>

      </div>

    </section><!-- /Portfolio Section -->
  </main>

@include('nav/footer')