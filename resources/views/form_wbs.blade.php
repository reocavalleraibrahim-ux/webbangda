@include('nav/header')

<body class="starter-page-page">

@include('nav/navbar2')

<main class="main">

<section class="news-detail-section" id="whistle">

    <!-- CONTENT -->

    <div class="container">
        @if ($errors->any())

        <div class="alert alert-danger">

            <ul>

                @foreach ($errors->all() as $error)

                    <li>{{ $error }}</li>

                @endforeach

            </ul>

        </div>

        @endif
        <div class="news-content-wrapper2">

            <div class="news-content2">
                <div class="news-title">
                    <h4><b>Formulir Aturan Penyalahgunaan Wewenang atau Pelanggaran Yang Dilakukan Oleh Pejabat dan/atau Pegawai di Lingkup Sekretariat Daerah Provinsi Jawa Tengah</b></h4>
                </div><br/>

            <p>    
                <form method="post" action="{{url('/kirimWbs')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="col-md-12">
                        <label for="name" class="form-label">Nama Pelapor</label>
                        <input type="text" class="form-control" id="nama_pelapor" name="nama_pelapor" >
                    </div>
                    <div class="col-md-12">
                        <label for="name" class="form-label">Nomor Identitas Diri</label>
                        <input type="text" class="form-control" id="no_identitas" name="no_identitas" >
                    </div>
                    <div class="col-md-12">
                        <label for="name" class="form-label">Alamat</label>
                        <textarea name="alamat" class="form-control" rows="4"></textarea>
                    </div>
                    <div class="col-md-12">
                        <label for="name" class="form-label">Pekerjaan</label>
                        <input type="text" class="form-control" id="pekerjaan" name="pekerjaan" >
                    </div>
                    <div class="col-md-12">
                        <label for="name" class="form-label">Nomor Kontak</label>
                        <input type="number" class="form-control" id="nomor_kontak" name="nomor_kontak" >
                    </div>
                    <div class="col-md-12">
                        <label for="name" class="form-label">Uraian Aduan</label>
                        <textarea name="uraian_aduan" class="form-control" rows="5"></textarea>
                    </div>
                    <div class="col-md-12">
                        <label for="name" class="form-label">Bukti Dukung</label>
                        <input type="file" name="bukti_dukung" id="bukti_dukung" class="form-control">
                    </div>
                    <div style="text-align:center; margin-top:20px;">
                        <a href="{{url()->previous()}}" class="btn btn-warning align-middle"><span class="bi bi-arrow-bar-left"></span> Kembali</a>
                        <input type="submit" value="Kirim" class="btn btn-primary">
                    </div>
                </form>
            </p>  

            </div>
        </div>
    </div>

</section>

</main>

@include('nav/footer')