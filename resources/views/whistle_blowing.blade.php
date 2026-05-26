@include('nav/header')

<body class="starter-page-page">

@include('nav/navbar2')

<main class="main">

<section class="news-detail-section" id="whistle">

    <!-- CONTENT -->

    <div class="container">

        <div class="news-content-wrapper2">

            <div class="news-content2">
                <div class="news-title">
                    <h4><b>Tata Cara Pengaduan Penyalahgunaan Wewenang atau Pelanggaran yang Dilakukan oleh Pejabat Publik Maupun Penyalahgunaan Wewenang atau Pelanggaran Oleh Pihak yang Mendapatkan Izin atau Perjanjian Kerja</b></h4>
                </div><br/>

            <p>    
                Berikut ini disampaikan Tata Cata Pengisian Formulir Pengaduan penyalahgunaan wewenang atau pelanggaran yang dilakukan oleh pejabat badan publik maupun pihak yang mendapatkan izin atau perjanjian kerja dari badan publik yang bersangkutan pada <b>Sekretariat Daerah Provinsi Jawa Tengah</b><br>
            
                <p><b>A.  	Materi pengaduan :</b></p>

                <ul>    
                    <li>Pelanggaran terhadap kode etik dan/atau pedoman perilaku aparat;</li>
                    <li>Penyalahgunaan wewenang/jabatan;</li>
                    <li>Pelanggaran sumpah jabatan;</li>
                    <li>Pelanggaran terhadap peraturan disiplin Pegawai Negeri Sipil;</li>
                    <li>Perbuatan tercela, yaitu perbuatan amoral, asusila, atau perbuatan yang tidak selayaknya dilakukan oleh seorang aparat maupun selaku anggota masyarakat;</li>
                    <li>Pelanggaran hukum, baik dilakukan dengan sengaja, maupun karena kelalaian dan ketidakpahaman;</li>
                    <li>Mal administrasi, yaitu terjadinya kesalahan, kekeliruan atau kelalaian yang bersifat administratif;</li>
                    <li>Pelayanan publik yang tidak memuaskan yang dapat merugikan pihak-pihak yang berkepentingan serta masyarakat secara umum;</li>
                </ul>
                <p><b>B.	Identitas Terlapor :</b></p>

                <ul>    
                    <li>Identitas aparat yang dilaporkan, termasuk jabatan, serta satuan kerja tempat Terlapor bertugas;</li>
                    <li>Perbuatan yang dilaporkan;</li>
                    <li>Menyertakan bukti atau keterangan yang dapat mendukung pengaduan yang disampaikan. Bukti atau keterangan ini termasuk nama, alamat, dan nomor kontak pihak lain yang dapat dimintai keterangan lebih lanjut untuk memperkuat pengaduan Pelapor;</li>
                </ul>

                <p><b>C.	Identitas Pelapor :</b></p>

                <ul>
                    <li>Pelapor sedapat mungkin diharuskan untuk mencantumkan identitasnya, namun demikian selama informasi dalam pengaduan yang disampaikan benar dan memiliki dasar yang kuat, pengaduan yang tidak mencantumkan identitasnya akan tetap ditindaklanjuti oleh Komite Etik.</li>
                </ul>

                <p><b>D.	Hak-Hak Terlapor :</b></p>

                <ul>    
                    <li>Membuktikan bahwa ia tidak bersalah dengan mengajukan saksi dan alat bukti lain;</li>
                    <li>Meminta Berita Acara Pemeriksaan (BAP) dirinya.</li>
                </ul>

                <p><b>E.	Hak-Hak Pelapor :</b></p>
                    
                <ul>
                    <li>Mendapatkan perlindungan kerahasiaan identitasnya;</li>
                    <li>Mendapatkan kesempatan untuk dapat memberikan keterangan secara bebas tanpa paksaan dari pihak manapun;</li>
                    <li>Mendapatkan informasi mengenai tahapan laporan pengaduan yang didaftarkannya;</li>
                    <li>Mendapatkan perlakuan yang sama dan setara dengan Terlapor dalam pemeriksaan.</li>
                </ul>

                <p><b>F.	Hak-Hak Komite Etik :</b></p>

                <ul>    
                    <li>Merahasiakan kesimpulan dan rekomendasi Laporan Hasil Pemeriksaan (LHP) kepada pihak Terlapor, Pelapor, dan pihak-pihak lain selain kepada pejabat yang  berwenang mengambil keputusan;</li>
                    <li>Menentukan jangka waktu yang memadai untuk menangani suatu pengaduan berdasarkan tingkat kesulitan penanganan dalam hal jangka waktu yang ditetapkan dalam pedoman ini terlampaui.</li>
                </ul>

                <p><b>G.	ALUR :</b></p>

                <ul>
                    <li><b>MELALUI MEDIA SOSIAL/EMAIL SKPD/BERSURAT KEPADA SKPD:</b></li>
                    
                        <li style="margin-left:20px;">Mengisi form pengaduan yang dapat diunduh di laman PPID Sekretariat Daerah Provinsi Jawa Tengah</li>
                        <li style="margin-left:20px;">Menyertakan bukti (berupa foto/video/bukti tertulis yang dapat dipertanggungjawabkan kebenarannya) atau keterangan yang dapat mendukung pengaduan yang disampaikan.</li>
                        <li style="margin-left:20px;">Bukti atau keterangan ini termasuk nama, alamat, dan nomor kontak pihak lain yang dapat dimintai keterangan lebih lanjut untuk memperkuat pengaduan Pelapor</li>
                    
                    <li><b>DATANG LANGSUNG/MANUAL:</b></li>
                    
                        <li style="margin-left:20px;">Menyertakan bukti (berupa foto/video/bukti tertulis yang dapat dipertanggungjawabkan kebenarannya) atau keterangan yang dapat mendukung pengaduan yang disampaikan.</li>
                        <li style="margin-left:20px;">Bukti atau keterangan ini termasuk nama, alamat, dan nomor kontak pihak lain yang dapat dimintai keterangan lebih lanjut untuk memperkuat pengaduan Pelapor.</li>
                    
                </ul>
            </p>  

            <div style="text-align:center; margin-top:20px;">
                <a href="{{url()->previous()}}" class="btn btn-warning align-middle"><span class="bi bi-arrow-bar-left"></span> Kembali</a>
                <a href="{{url('formWbs')}}" class="btn btn-primary"> Mulai Aduan <span class="bi bi-arrow-bar-right"></span> </a>
            </div>

            </div>
        </div>
    </div>

</section>

</main>

@include('nav/footer')