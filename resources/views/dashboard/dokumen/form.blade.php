@extends('dashboard.layout.app')

@if($act == 'create')
  @section('title','Tambah Dokumen Publik')
@else
  @section('title','Edit Dokumen Publik')
@endif

@section('content')


    <div class="col-xl-12 col-md-8">
            <div class="card Recent-Users table-card">
              <div class="card-header">
                <a href="{{ url('/dokumen')}}" class="btn btn-warning"><i class="ph ph-arrow-left"></i> Kembali</a> <br><br>
              </div>
              <div class="card-body px-0 py-3">
                <div class="table-responsive">
                @if($act == 'create')
                  <form method="post" action="{{ url('/dokumen')}}" enctype="multipart/form-data">
                @else
                  <form method="post" action="{{ url('/dokumen/'.$dokumen->id)}}" enctype="multipart/form-data">
                  @method('PUT')
                @endif
                     @csrf
                    <div class="container mt-12">
                    <div class="row g-5">
                        <div class="col-md-6">
                          @if($act == 'create')
                            <iframe id="pdfPreview" style="min-width:750px; min-height:350px;"></iframe>
                          @else
                            <iframe id="pdfPreview" src="{{ asset('storage/'.$dokumen->dokumen)}}" style="min-width:750px; min-height:350px;"></iframe>
                          @endif
                        </div>
                        <div class="col-md-6">
                            <div class="col-md-12" >
                                <label for="name" class="form-label">Nama Dokumen</label>
                                @if($act == 'edit')
                                    <input type="text" class="form-control" id="nama_dokumen" name="nama_dokumen" placeholder="Nama Dokumen" value="{{$dokumen->nama_dokumen}}">
                                @else
                                    <input type="text" class="form-control" id="nama_dokumen" name="nama_dokumen" placeholder="Nama Dokumen">
                                @endif
                            </div>
                            <div class="col-md-12" >
                                <label for="name" class="form-label">Kategori</label>
                                @if($act == 'edit')
                                    <select name="kategori" id="kategori" class="form-control">
                                        <option>Pilih Kategori</option>
                                        @foreach($kategori as $k)
                                            <option value="{{$k->id}}" {{$dokumen->kategori == $k->id ? 'selected' : '' }} >
                                                {{$k->nama_kategori}}
                                            </option>
                                        @endforeach
                                    </select>
                                @else
                                    <select name="kategori" id="kategori" class="form-control">
                                        <option>Pilih Kategori</option>
                                        @foreach($kategori as $k)
                                            <option value="{{$k->id}}">{{$k->nama_kategori}}</option>
                                        @endforeach
                                    </select>
                                @endif
                            </div>
                            <div class="col-md-12" >
                                <label for="name" class="form-label">Tahun</label>
                                @if($act == 'edit')
                                    <input type="number" class="form-control" id="tahun" name="tahun" placeholder="Tahun" value="{{$dokumen->tahun}}">
                                @else
                                    <input type="number" class="form-control" id="tahun" name="tahun" placeholder="Tahun">
                                @endif
                            </div>
                            <div class="col-md-12">
                            <br>
                            </div>
                            <div class="col-md-12">
                                @if($act == 'create')
                                    <input type="submit" class="btn btn-primary" value="Buat Berita">
                                @else
                                    <input type="submit" class="btn btn-primary" value="Update Berita">
                                @endif
                            </div>
                        </div>                        
                        <div class="col-md-6">
                            <label for="name" class="form-label">Dokumen</label>
                            <input type="file" class="form-control" id="dokumen" name="dokumen" placeholder="Dokumen" accept="application/pdf">
                        </div>
                    </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>

<script>
    var foto = document.getElementById('thumbnail');
    var prev = document.getElementById('prev');
    foto.onchange = evt => {
        const [file] = foto.files
        if(file){
            prev.src = URL.createObjectURL(file)
        }
    }
</script>

<script>
	ClassicEditor
		.create( document.querySelector( '#editor' ), {
			// toolbar: [ 'heading', '|', 'bold', 'italic', 'link']
		} )
		.then( editor => {
			window.editor = editor;
		} )
		.catch( err => {
			console.error( err.stack );
		} );
</script>

<script>
document.getElementById('dokumen').addEventListener('change', function(e) {
    const file = e.target.files[0];

    if (file && file.type === "application/pdf") {
        const fileURL = URL.createObjectURL(file);
        document.getElementById('pdfPreview').src = fileURL;
    } else {
        alert("Harap pilih file PDF!");
    }
});
</script>
@endsection