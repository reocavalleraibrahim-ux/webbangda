@extends('dashboard.layout.app')

@section('title','Slider')

@section('content')
    <div class="col-xl-12 col-md-8">
            <div class="card Recent-Users table-card">
              <div class="card-header">
                <a href="{{ url('/slider/create')}}" class="btn btn-success"><i class="ph ph-plus"></i> Tambah Gambar Slider</a>
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
                        <th>No</th>
                        <th>Gambar</th>
                        <th>Aksi</th>
                    </thead>
                    <tbody>
                      <?php $a = 1; ?>
                        @foreach($slider as $s)
                      <tr>
                        <td>{{$a++}}</td>
                        <td><img src="{{ asset('storage/'.$s->name)}}" style="max-width:200px;"></td>
                        <td>
                        <a href="{{ url('/slider/'.$s->id.'/edit')}}" class="badge me-2 bg-blue-300 text-white f-12">edit</a>
                            <form action="{{ route('slider.destroy', $s->id) }}" method="POST" style="display:inline" onsubmit="return confirm('Yakin Menghapus Gambar?')">
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