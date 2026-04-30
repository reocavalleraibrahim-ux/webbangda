@extends('dashboard.layout.app')

@section('title','Berita')

@section('content')
    <div class="col-xl-12 col-md-8">
            <div class="card Recent-Users table-card">
              <div class="card-header">
                <a href="{{ url('/berita/create')}}" class="btn btn-success"><i class="ph ph-plus"></i> Tambah Berita</a>
                @if (session('success'))
                  <br>
                  <br>
                  <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                  </div>
                @endif  
              </div>
              <div class="card-body px-0 py-3">
                <div class="table-responsive">
                  <table class="table table-hover mb-0" id="example2">
                    <thead>
                        <th>Thumbnail</th>
                        <th>Judul</th>
                        <th>isi</th>
                        <th>Aksi</th>
                    </thead>
                    <tbody>
                      @foreach($berita as $b)
                        <tr>
                            <td><img src="{{asset('storage/'.$b->thumbnail)}}" style="max-height:100px;"></td>
                            <td>{{$b->judul}}</td>
                            <td>{!! substr($b->isi,0,150) !!}</td>
                            <td>
                                <a href="{{ url('/berita/'.$b->id.'/edit')}}" class="badge me-2 bg-blue-300 text-white f-12">edit</a>
                                <form action="{{ route('berita.destroy', $b->id) }}" method="POST" style="display:inline" onsubmit="return confirm('Yakin Menghapus Berita?')">
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