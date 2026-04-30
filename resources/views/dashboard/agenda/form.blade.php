@extends('dashboard.layout.app')

@if($act == 'create')
  @section('title','Tambah Agenda')
@else
  @section('title','Edit Agenda')
@endif

@section('content')
    <div class="col-xl-12 col-md-8">
            <div class="card Recent-Users table-card">
              <div class="card-header">
                <a href="{{ url('/agenda')}}" class="btn btn-warning"><i class="ph ph-arrow-left"></i> Kembali</a> <br><br>
              </div>
              <div class="card-body px-0 py-3">
                <div class="table-responsive">
                @if($act == 'create')
                  <form method="post" action="{{ url('/bagian')}}" enctype="multipart/form-data">
                @else
                  <form method="post" action="{{ url('/bagian/'.$bagian->id)}}" enctype="multipart/form-data">
                  @method('PUT')
                @endif
                     @csrf
                    <div class="container mt-5">
                    <div class="row g-3">
                        <div class="col-md-6" >
                            <label for="name" class="form-label">Nama Agenda</label>
                            @if($act == 'create')
                                <input type="text" class="form-control" id="nama_agenda" name="nama_agenda" placeholder="Nama Agenda">
                            @else
                                <input type="text" class="form-control" id="nama_agenda" name="nama_agenda" placeholder="Nama Agenda" value="{{$agenda->nama_agenda}}">
                            @endif
                        </div>
                        <div class="col-md-6">
                            <label for="name" class="form-label">Waktu</label>
                            @if($act == 'create')
                                <input type="text" class="form-control" id="waktu" name="waktu" placeholder="Waktu">
                            @else
                                <input type="text" class="form-control" id="waktu" name="waktu" placeholder="Waktu" value="{{$agenda->waktu}}">
                            @endif
                        </div>
                        <div class="col-md-6">
                            <label for="name" class="form-label">Tempat</label>
                            @if($act == 'create')
                                <input type="text" class="form-control" id="tempat" name="tempat" placeholder="Tempat">
                            @else
                                <input type="text" class="form-control" id="tempat" name="tempat" placeholder="Tempat" value="{{$agenda->tempat}}">
                            @endif
                        </div>
                        <div class="col-md-6">
                            <label for="name" class="form-label">Disposisi Bagian</label>
                            <select name="id_bagian" class="form-control">
                                <option>Pilih Bagian</option>
                                @foreach($bagian as $b)
                                    <option value="{{$b->id}}">{{$b->nama_bagian}} - {{$b->kode_bagian}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6">
                          @if($act == 'create')
                            <input type="submit" class="btn btn-primary" name="Create">
                          @else
                            <input type="submit" class="btn btn-primary" name="Update" value="Update">
                          @endif
                        </div>
                    </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>

@endsection