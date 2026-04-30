@extends('dashboard.layout.app')

@section('title','Agenda')

@section('content')
    <div class="col-xl-12 col-md-8">
            <div class="card Recent-Users table-card">
              <div class="card-header">
                <a href="{{ url('/agenda/create')}}" class="btn btn-success"><i class="ph ph-plus"></i> Tambah Agenda</a>
                @if (session('success'))
                  <br>
                  <br>
                  <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                  </div>
                @endif  
              </div>
              <div class="card-body px-0 py-3">
                <div class="table-responsive container-fluid">
                  <table class="table table-hover mb-0" id="example2">
                    <thead>
                        <th>Nama Agenda</th>
                        <th>Tanggal</th>
                        <th>Waktu</th>
                        <th>Tempat</th>
                        <th>Disposisi</th>
                        <th>Aksi</th>
                    </thead>
                    <tbody>
                      
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>


@endsection