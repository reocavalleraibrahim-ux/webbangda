@extends('dashboard.layout.app')

@if($act == 'create')
  @section('title','Tambah Gambar Slider')
@else
  @section('title','Edit Gambar Slider')
@endif

@section('content')
    <div class="col-xl-12 col-md-8">
            <div class="card Recent-Users table-card">
              <div class="card-header">
                <a href="{{ url('/slider')}}" class="btn btn-warning"><i class="ph ph-arrow-left"></i> Kembali</a> <br><br>
              </div>
              <div class="card-body px-0 py-3">
                <div class="table-responsive">
                @if($act == 'create')
                  <form method="post" action="{{ url('/slider')}}" enctype="multipart/form-data">
                @else
                  <form method="post" action="{{ url('/slider/'.$slider->id)}}" enctype="multipart/form-data">
                  @method('PUT')
                @endif
                     @csrf
                    <div class="container mt-5">
                    <div class="row g-3">
                        <div class="col-md-12">
                          @if($act == 'create')
                            <img id="prev" alt="" src="" style="max-width:500px;">
                          @else
                            <img id="prev" alt="" src="{{ asset('storage/'.$slider->name)}}" style="max-width:500px;">
                          @endif
                        </div>
                        <div class="col-md-6" >
                            <label for="name" class="form-label">Gambar Slider</label>
                            <input type="file" class="form-control" id="gambar" name="gambar" placeholder="Gambar">
                        </div>
                        <div class="col-md-6">
                        </div>
                        <div class="col-md-6">
                          @if($act == 'create')
                            <input type="submit" class="btn btn-primary" name="Create">
                          @else
                            <input type="submit" class="btn btn-primary" name="Update">
                          @endif
                        </div>
                    </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
<script>
    var foto = document.getElementById('gambar');
    var prev = document.getElementById('prev');
    foto.onchange = evt => {
        const [file] = foto.files
        if(file){
            prev.src = URL.createObjectURL(file)
        }
    }
</script>
@endsection