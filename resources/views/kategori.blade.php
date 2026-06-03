@include('nav/header')

<body class="starter-page-page">

@include('nav/navbar2')

  <main class="main">
    <!-- Portfolio Section -->
    <section id="dokumen" class="portfolio section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>{{$kat->nama_kategori}}</h2>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="isotope-layout" data-default-filter="*" data-layout="fitRows" data-sort="original-order">

          <div class="row g-4 isotope-container" data-aos="fade-up" data-aos-delay="200">
            <div class="col-lg-12 col-md-6 portfolio-item isotope-item filter-web">
            <table class="table table-bordered">
                <thead>
                    <th>NO</th>
                    <th>Nama Dokumen</th>
                    <th>Tahun</th>
                    <th>Link</th>
                </thead>
                <tbody>
                <?php $a = 1; ?>
                @foreach($data as $d)
                    <tr>
                        <td>{{$a}}</td>
                        <td>{{$d->nama_dokumen}}</td>
                        <td>{{$d->tahun}}</td>
                        <td><a href="{{ asset('storage/'.$d->dokumen) }}" target="blank"><span class="bi bi-file-earmark-fill"></span> Lihat Dokumen</a></td>
                    </tr>
                @endforeach
                <?php $a++;?>
                </tbody>
            </table>
          </div>
          </div><!-- End Portfolio Container -->
             <div style="text-align:center; margin-top:20px;">
                <a href="{{url()->previous()}}" class="btn btn-warning align-middle">Kembali</a>
            </div>
        </div>

      </div>

    </section><!-- /Portfolio Section -->
  </main>

@include('nav/footer')