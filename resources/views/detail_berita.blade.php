@include('nav/header')

<body class="starter-page-page">

@include('nav/navbar2')

<main class="main">

<section class="news-detail-section" id="berita">

    <!-- HERO IMAGE -->

    <div class="news-hero">

        <img src="{{ asset('storage/'.$berita->thumbnail) }}"
             alt="{{$berita->judul}}">

        <div class="overlay"></div>

        <div class="hero-content container">

            <div class="news-meta">

                <span>
                    <i class="bi bi-calendar-event"></i>

                    {{ date('d F Y', strtotime($berita->created_at)) }}
                </span>

            </div>

            <h1>

                {{$berita->judul}}

            </h1>

        </div>

    </div>

    <!-- CONTENT -->

    <div class="container">

        <div class="news-content-wrapper">

            <div class="news-content">

                {!! $berita->isi !!}

            </div>

        </div>
      <div style="text-align:center; margin-top:20px;">
        <a href="{{url()->previous()}}" class="btn btn-warning align-middle">Kembali</a>
      </div>
    </div>

</section>

</main>

@include('nav/footer')