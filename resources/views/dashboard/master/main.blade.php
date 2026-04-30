@extends('dashboard.layout.app')

@section('title','Master')

@section('content')
    <div class="col-xl-12 col-md-8">
            <div class="card Recent-Users table-card">
              <div class="card-header">
                <a href="{{ url('/master/create')}}" class="btn btn-success"><i class="ph ph-plus"></i> Tambah Master Data</a>
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
                        <th>Header</th>
                        <th>isi</th>
                        <th>Aksi</th>
                    </thead>
                    <tbody>
                      @foreach($data as $d)
                        <tr>
                            <td>{{$d->header}}</td>
                            <td>{!! $d->isi !!}</td>
                            <td>
                                <a href="{{ url('/master/'.$d->id.'/edit')}}" class="badge me-2 bg-blue-300 text-white f-12">edit</a>
                                <form action="{{ route('master.destroy', $d->id) }}" method="POST" style="display:inline" onsubmit="return confirm('Yakin Menghapus Data?')">
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