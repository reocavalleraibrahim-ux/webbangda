<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Signage Agenda & Progress APBD</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

  <div class="background-glow"></div>
  <div class="background-glow2"></div>

  <div class="container">

    <div class="topbar">
      <div class="branding">
        <div class="logo"><img src="{{asset('image/jateng.png')}}"></div>
        <div>
          <h1>Biro Administrasi Pembangunan Daerah</h1>
        </div>
      </div>

      <div class="datetime">
        <div class="time" id="clock">00:00:00</div>
        <div class="date" id="date"></div>
      </div>
    </div>

    <div class="content">

    <div class="agendaSection">
      <div class="card">
        <div class="section-title">
          <h2>Agenda Hari Ini</h2>
          <div class="badge">{{$jmlagenda}} Agenda</div>
        </div>
      
      @if($jmlagenda <= 5)
        <div class="agenda-list">
          @foreach($agenda as $a)
          <div class="agenda-item" style="border-color:{{$a->kode_warna}};">
            <div class="agenda-info">
              <h3>{{$a->nama_agenda}}</h3>
              <p>{{$a->tempat}} • {{$a->nama_bagian}} - {{$a->nama_pengarah}}</p>
            </div>
            <div class="agenda-time">
              <strong>{{$a->waktu}}</strong>
              WIB
            </div>
          </div>
          @endforeach
        </div>
      @else
      <div class="agenda-wrapper">
        <div class="agenda-list">
          @foreach($agenda as $a)
          <div class="agenda-item" style="border-color:{{$a->kode_warna}};">
            <div class="agenda-info">
              <h3>{{$a->nama_agenda}}</h3>
              <p>{{$a->tempat}} • {{$a->nama_bagian}} - {{$a->nama_pengarah}}</p>
            </div>
            <div class="agenda-time">
              <strong>{{$a->waktu}}</strong>
              WIB
            </div>
          </div>
          @endforeach
          @foreach($agenda as $a)
          <div class="agenda-item" style="border-color:{{$a->kode_warna}};">
            <div class="agenda-info">
              <h3>{{$a->nama_agenda}}</h3>
              <p>{{$a->tempat}} • {{$a->nama_bagian}} - {{$a->nama_pengarah}}</p>
            </div>
            <div class="agenda-time">
              <strong>{{$a->waktu}}</strong>
              WIB
            </div>
          </div>
          @endforeach
        </div>
      </div>  
      @endif    

    </div>    
    </div>

      <div class="card">
        <div class="section-title">
          <h2>Capaian APBD</h2>
          <div class="badge">Cut-off : {!! $tanggal_apbd->isi !!}</div>
        </div>

        <div class="stats">

          <div class="stat-box">
            <h3>Pendapatan</h3>
            <div class="progress-wrapper">
              <div class="progress-header">
                <h4><b>Rp. {{number_format($real_pendapatan,0,',','.')}} </b> / Rp. {{number_format($total_pendapatan,0,',','.')}}</h4>
                <span><?php if($real_pendapatan <> 0){ echo number_format(($real_pendapatan / $total_pendapatan)*100,2);}else{echo '0';}?>%</span>
              </div>
              <div class="progress-bar">
                <div class="progress-fill" style="width:<?php if($real_pendapatan <> 0){ echo number_format(($real_pendapatan / $total_pendapatan)*100,2);}else{echo '0';}?>%"></div>
              </div>
            </div>
          </div>

          <div class="stat-box">
            <h3>Belanja</h3>
            <div class="progress-wrapper">
              <div class="progress-header">
                <h4><b>Rp. {{number_format($real_belanja,0,',','.')}} </b> / Rp. {{number_format($total_belanja,0,',','.')}}</h4>
                <span><?php if($real_belanja <> 0){ echo number_format(($real_belanja / $total_belanja)*100,2);}else{echo '0';}?>%</span>
              </div>
              <div class="progress-bar">
                <div class="progress-fill" style="width:<?php if($real_belanja <> 0){ echo number_format(($real_belanja / $total_belanja)*100,2,'.','');}else{echo '0';}?>%"></div>
              </div>
            </div>
          </div>
        </div>

        

        <div class="table-wrapper">
          <table border=0 class="tabelApbd">
            <thead>
              <tr>
                <th class="headerOpd" rowspan=2>Perangkat Daerah</th>
                <th class="headerAngka" rowspan=2>Anggaran <br> Pendapatan</th>
                <th colspan=2>Realisasi Pendapatan</th>
                <th class="headerAngka" rowspan=2>Anggaran <br> Belanja</th>
                <th colspan=2>Realisasi Belanja</th>
              </tr>
              <tr>
                <th class="headerAngka">Rp.</th>
                <th class="headerAngka">%</th>
                <th class="headerAngka">Rp.</th>
                <th class="headerAngka">%</th>
              </tr>
            </thead>
          </table>
        </div>
        <div class="tbody-scroll">
          <table class="tabelApbd">
            <tbody>
              @foreach($apbd as $ap)
              <tr>
                <td class="opd">{{$ap->perangkat_daerah}}</td>
                <td class="angka">{{number_format($ap->anggaran_pendapatan,0,',','.')}}</td>
                <td class="angka">{{number_format($ap->realisasi_pendapatan,0,',','.')}}</td>
                <td class="persen"><div class="percentBox"><?php if($ap->realisasi_pendapatan <> 0){ echo number_format(($ap->realisasi_pendapatan / $ap->anggaran_pendapatan)*100,2);}else{echo '0';}?>%</div></td>
                <td class="angka">{{number_format($ap->anggaran_belanja,0,',','.')}}</td>
                <td class="angka">{{number_format($ap->realisasi_belanja,0,',','.')}}</td>
                <td class="persen"><div class="percentBox"><?php if($ap->realisasi_belanja <> 0){ echo number_format(($ap->realisasi_belanja / $ap->anggaran_belanja)*100,2);}else{echo '0';}?>%</div></td>
              </tr>
              @endforeach
              @foreach($apbd as $ap)
              <tr>
                <td class="opd">{{$ap->perangkat_daerah}}</td>
                <td class="angka">{{number_format($ap->anggaran_pendapatan,0,',','.')}}</td>
                <td class="angka">{{number_format($ap->realisasi_pendapatan,0,',','.')}}</td>
                <td class="persen"><div class="percentBox"><?php if($ap->realisasi_pendapatan <> 0){ echo number_format(($ap->realisasi_pendapatan / $ap->anggaran_pendapatan)*100,2);}else{echo '0';}?>%</div></td>
                <td class="angka">{{number_format($ap->anggaran_belanja,0,',','.')}}</td>
                <td class="angka">{{number_format($ap->realisasi_belanja,0,',','.')}}</td>
                <td class="persen"><div class="percentBox"><?php if($ap->realisasi_belanja <> 0){ echo number_format(($ap->realisasi_belanja / $ap->anggaran_belanja)*100,2);}else{echo '0';}?>%</div></td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>

      </div>

    </div>

  </div>

  <script src="{{ asset('js/app.js') }}"></script>

</body>
</html>
