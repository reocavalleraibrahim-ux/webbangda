@extends('dashboard.layout.app')

@section('title','Bagian')

@section('content')
    <div class="col-xl-12 col-md-8">
            <div class="card Recent-Users table-card">
              <div class="card-header">
                <a href="{{ url('/bagian/create')}}" class="btn btn-success"><i class="ph ph-plus"></i> Tambah Bagian</a>
                @if (session('success'))
                  <br>
                  <br>
                  <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                  </div>
                @endif  
              </div>
              <div class="card-body px-0 py-3 container">
                <div class="table-responsive">
                  <table class="table table-hover mb-0" id="example2">
                    <thead>
                        <th>Nama Bagian</th>
                        <th>Kode Bagian</th>
                        <th>Nama Pengarah</th>
                        <th>Warna</th>
                        <th>Aksi</th>
                    </thead>
                    <tbody>
                      @foreach($bagian as $b)
                        <tr>
                            <td>{{$b->nama_bagian}}</td>
                            <td>{{$b->kode_bagian}}</td>
                            <td>{{$b->nama_pengarah}}</td>
                            <td><div style="width:20px;height:20px;border-radius:5px;background-color:{{$b->kode_warna}}"></div></td>
                            <td>
                                <a href="{{ url('/bagian/'.$b->id.'/edit')}}" class="badge me-2 bg-blue-300 text-white f-12">edit</a>
                                <form action="{{ route('bagian.destroy', $b->id) }}" method="POST" style="display:inline" onsubmit="return confirm('Yakin Menghapus Bagian?')">
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