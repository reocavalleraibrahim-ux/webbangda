<header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container position-relative d-flex align-items-center justify-content-between">
      
      <a href="/" class="logo-wrapper">

            <img src="{{ asset('image/jateng.png') }}"
                class="logo-img">

            <div class="logo-text">

                <h1>
                    Biro Administrasi <br>
                    Pembangunan Daerah
                </h1>

            </div>

        </a>

      <nav id="navmenu" class="navmenu me-2">
        <ul>
          <li><a href="{{url('/')}}#hero">Beranda</a></li>
          <li><a href="{{url('/')}}#tentang">Tentang Kami</a></li>
          <li><a href="{{url('/')}}#berita">Berita</a></li>
          <li><a href="{{url('/whistle_blowing#whistle')}}">Whistle Blowing System</a></li>
          <li><a href="{{url('/dokumenPublik')}}#dokumen">Dokumen Publik</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>
    </div>
  </header>