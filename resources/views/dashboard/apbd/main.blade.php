@extends('dashboard.layout.app')

@section('title','APBD')

@section('content')
    <div class="col-xl-12 col-md-8">
            <div class="card Recent-Users table-card">
              <div class="card-header">
                <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#apbdModal"><i class="ph ph-upload"></i> Update Excel</button>
                @if (session('success'))
                  <br>
                  <br>
                  <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                  </div>
                @endif  
              </div>
              <div class="card-body px-3 py-3 container-fluid">
                <div class="table-responsive">
                  <table class="table table-hover mb-0" id="example2">
                    <thead>
                        <tr>
                            <th rowspan=2>No</th>
                            <th rowspan=2 class="text-center">Nama OPD</th>
                            <th colspan=3 class='text-center'>Pendapatan</th>
                            <th colspan=3 class="text-center">Pendapatan</th>
                            <th rowspan=2 class="text-center">Aksi</th>
                        </tr>
                        <tr>
                            <th class="text-center">Anggaran</th>
                            <th class="text-center">Realisasi (Rp.)</th>
                            <th class="text-center">%</th>
                            <th class="text-center">Anggaran</th>
                            <th class="text-center">Realisasi (Rp.)</th>
                            <th class="text-center">%</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $no = 1;?>
                      @foreach($apbd as $a)
                        <tr>
                            <td>{{$no}}</td>
                            <td>{{$a->perangkat_daerah}}</td>
                            <td>{{number_format($a->anggaran_pendapatan)}}</td>
                            <td>{{number_format($a->realisasi_pendapatan)}}</td>
                            <td class="text-center"><?php if($a->realisasi_pendapatan <> 0){ echo number_format(($a->realisasi_pendapatan/$a->anggaran_pendapatan)*100,2,'.','');}else{ echo '0';}?></td>
                            <td>{{number_format($a->anggaran_belanja)}}</td>
                            <td>{{number_format($a->realisasi_belanja)}}</td>
                            <td class="text-center"><?php if($a->realisasi_belanja <> 0){ echo number_format(($a->realisasi_belanja/$a->anggaran_belanja)*100,2,'.','');}else{ echo '0';}?></td>
                            <td class="text-center">
                                <a href="{{ url('/apbd/'.$a->id.'/edit')}}" class="badge me-2 bg-blue-300 text-white f-12">edit</a>
                                <form action="{{ route('apbd.destroy', $a->id) }}" method="POST" style="display:inline" onsubmit="return confirm('Yakin Menghapus Data?')">
                                @csrf
                                @method('DELETE')
                                    <button type="submit" class="badge me-2 bg-red-500 text-white f-12" style="border:none;">Hapus</button>
                                </form>
                            </td>
                        </tr>
                        <?php $no++;?>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>

<!-- Modal -->
<div class="modal fade" id="apbdModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Update Data APBD</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post" action="{{ route('apbd.updateData')}}" enctype="multipart/form-data">
        @csrf
            <div class="col-md-12">
                <label for="name" class="form-label">File Excel</label>
                <input type="file" class="form-control" id="excel" name="excel" placeholder="File Excel APBD">
            </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <input type="submit" class="btn btn-primary" value="Simpan">
        </form>
      </div>
    </div>
  </div>
</div>
@endsection