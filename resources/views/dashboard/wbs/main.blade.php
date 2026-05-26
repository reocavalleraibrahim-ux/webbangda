@extends('dashboard.layout.app')

@section('title','Whistle Blowing System')

@section('content')
    <div class="col-xl-12 col-md-8">
            <div class="card Recent-Users table-card">
              <div class="card-header">
                @if (session('success'))
                  <br>
                  <br>
                  <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                  </div>
                @endif  
              </div>
              <div class="card-body px-0 py-3">
                <div class="container table-responsive">
                  <table class="table table-hover mb-0" id="example2">
                    <thead>
                        <th>Nama Pelapor</th>
                        <th>Nomor Identitas</th>
                        <th>Alamat</th>
                        <th>Pekerjaan</th>
                        <th>Nomor Kontak</th>
                        <th>Uraian Aduan</th>
                        <th>Bukti Dukung</th>
                        <th>Verifikasi</th>
                        <th>Aksi</th>
                    </thead>
                    <tbody>
                        @foreach($wbs as $w)
                            <tr>
                                <td>{{$w->nama_pelapor}}</td>
                                <td>{{$w->no_identitas}}</td>
                                <td>{{$w->alamat}}</td>
                                <td>{{$w->pekerjaan}}</td>
                                <td>{{$w->nomor_kontak}}</td>
                                <td>{{$w->uraian_aduan}}</td>
                                <td><a href="{{asset('storage/'.$w->bukti_dukung)}}" target="blank">Lihat Bukti Dukung</a></td>
                                <td style="text-align:center;">
                                    @if($w->verifikasi == 1)
                                        <span class="ph ph-check" style="color:green;"></span>
                                    @else
                                        <span class="ph ph-x" style="color:red;"></span>
                                    @endif
                                </td>
                                <td>
                                <form action="{{ url('wbs/verif', $w->id) }}" method="POST" style="display:inline" onsubmit="return confirm('Verifikasi Aduan?')">
                                @csrf
                                @method('PUT')
                                    <button type="submit" class="badge me-2 bg-blue-700 text-white f-12" style="border:none;">Verifikasi</button>
                                </form>
                                <form action="{{ route('wbs.destroy', $w->id) }}" method="POST" style="display:inline" onsubmit="return confirm('Yakin Menghapus Aduan?')">
                                @csrf
                                @method('DELETE')
                                    <button type="submit" class="badge me-2 bg-red-500 text-white f-12" style="border:none;">Hapus</button>
                                </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>


@endsection