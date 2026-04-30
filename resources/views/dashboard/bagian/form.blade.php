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
                <a href="{{ url('/bagian')}}" class="btn btn-warning"><i class="ph ph-arrow-left"></i> Kembali</a> <br><br>
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
                            <label for="name" class="form-label">Nama Bagian</label>
                            @if($act == 'create')
                                <input type="text" class="form-control" id="nama_bagian" name="nama_bagian" placeholder="Nama Bagian">
                            @else
                                <input type="text" class="form-control" id="nama_bagian" name="nama_bagian" placeholder="Nama Bagian" value="{{$bagian->nama_bagian}}">
                            @endif
                        </div>
                        <div class="col-md-6">
                            <label for="name" class="form-label">Kode Bagian</label>
                            @if($act == 'create')
                                <input type="text" class="form-control" id="kode_bagian" name="kode_bagian" placeholder="Kode Bagian">
                            @else
                                <input type="text" class="form-control" id="kode_bagian" name="kode_bagian" placeholder="Kode Bagian" value="{{$bagian->kode_bagian}}">
                            @endif
                        </div>
                        <div class="col-md-6">
                            <label for="name" class="form-label">Nama Pengarah</label>
                            @if($act == 'create')
                                <input type="text" class="form-control" id="nama_pengarah" name="nama_pengarah" placeholder="Nama Pengarah">
                            @else
                                <input type="text" class="form-control" id="nama_pengarah" name="nama_pengarah" placeholder="Nama Pengarah" value="{{$bagian->nama_pengarah}}">
                            @endif
                        </div>
                        <div class="col-md-6">
                            <label for="name" class="form-label">Kode Warna</label>
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                <div class="input-group-text"><div id="color-picker"></div></div>
                                </div>
                            @if($act == 'create')
                                <input type="text" class="form-control" name="kode_warna" id="kode_warna">
                            @else 
                                <input type="text" class="form-control" name="kode_warna" id="kode_warna" value="{{$bagian->kode_warna}}">
                            @endif
                            </div>
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
<script src="https://cdn.jsdelivr.net/npm/@simonwep/pickr/dist/pickr.min.js"></script>

<script>
const defaultColor = document.getElementById('kode_warna').value || '#3498db';
const pickr = Pickr.create({
    el: '#color-picker',
    theme: 'classic', // bisa: classic, monolith, nano

    default: defaultColor,

    components: {
        preview: true,
        opacity: true,
        hue: true,

        interaction: {
            hex: true,
            rgba: true,
            input: true,
            save: true
        }
    }
});

// simpan ke input hidden saat klik save
pickr.on('save', (color) => {
    const hexColor = color.toHEXA().toString();
    document.getElementById('kode_warna').value = hexColor;
});
</script>

@endsection