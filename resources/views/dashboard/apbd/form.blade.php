@extends('dashboard.layout.app')

@section('title','Edit Gambar Slider')

@section('content')
    <div class="col-xl-12 col-md-8">
            <div class="card Recent-Users table-card">
              <div class="card-header">
                <a href="{{ url('/bagian')}}" class="btn btn-warning"><i class="ph ph-arrow-left"></i> Kembali</a> <br><br>
              </div>
              <div class="card-body px-0 py-3">
                <div class="table-responsive">
                  <form method="post" action="{{ url('/apbd/'.$apbd->id)}}" enctype="multipart/form-data">
                  @method('PUT')
                     @csrf
                    <div class="container mt-5">
                    <div class="row g-3">
                        <div class="col-md-6" >
                            <label for="name" class="form-label">Nama OPD</label>
                            <input type="text" class="form-control" id="perangkat_daerah" name="perangkat_daerah" placeholder="Perangkat Daerah" value="{{$apbd->perangkat_daerah}}">
                        </div>
                        <div class="col-md-6" >
                            <label for="name" class="form-label">Anggaran Pendapatan</label>
                            <input type="text" class="form-control" id="anggaran_pendapatan" name="anggaran_pendapatan" placeholder="Anggaran Pendapatan" value="{{$apbd->anggaran_pendapatan}}">
                        </div>
                        <div class="col-md-6" >
                            <label for="name" class="form-label">Realisasi Pendapatan</label>
                            <input type="text" class="form-control" id="realisasi_pendapatan" name="realisasi_pendapatan" placeholder="Realisasi Pendapatan" value="{{$apbd->realisasi_pendapatan}}">
                        </div>
                        <div class="col-md-6" >
                            <label for="name" class="form-label">Anggaran Belanja</label>
                            <input type="text" class="form-control" id="anggaran_belanja" name="anggaran_belanja" placeholder="Anggaran Belanja" value="{{$apbd->anggaran_belanja}}">
                        </div>
                        <div class="col-md-6" >
                            <label for="name" class="form-label">Realisasi Belanja</label>
                            <input type="text" class="form-control" id="realisasi_belanja" name="realisasi_belanja" placeholder="Realisasi Belanja" value="{{$apbd->realisasi_belanja}}">
                        </div>
                        <div class="col-md-6">
                            <input type="submit" class="btn btn-primary" name="Update" value="Update">
                        </div>
                    </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
@endsection