@extends('dashboard.layout.app')

@if($act == 'create')
  @section('title','Tambah Kategori')
@else
  @section('title','Edit Kategori')
@endif

@section('content')


    <div class="col-xl-12 col-md-8">
            <div class="card Recent-Users table-card">
              <div class="card-header">
                <a href="{{ url('/kategori')}}" class="btn btn-warning"><i class="ph ph-arrow-left"></i> Kembali</a> <br><br>
              </div>
              <div class="card-body px-0 py-3">
                <div class="table-responsive">
                @if($act == 'create')
                  <form method="post" action="{{ url('/kategori')}}" enctype="multipart/form-data">
                @else
                  <form method="post" action="{{ url('/kategori/'.$kategori->id)}}" enctype="multipart/form-data">
                  @method('PUT')
                @endif
                     @csrf
                    <div class="container mt-12">
                    <div class="row g-5">
                        <div class="col-md-6">
                            <label for="name" class="form-label">Nama Kategori</label>
                            @if($act == 'edit')
                                <input type="text" class="form-control" id="nama_kategori" name="nama_kategori" placeholder="Nama Kategori" value="{{$kategori->nama_kategori}}">
                            @else
                                <input type="text" class="form-control" id="nama_kategori" name="nama_kategori" placeholder="Nama Kategori">
                            @endif
                        </div> 
                        <div class="col-md-6">
                        </div>
                        <div class="col-md-6">
                            <label for="name" class="form-label">Kode Kategori</label>
                            @if($act == 'edit')
                                <input type="text" class="form-control" id="kode_kategori" name="kode_kategori" placeholder="Kode Kategori" value="{{$kategori->kode_kategori}}">
                            @else
                                <input type="text" class="form-control" id="kode_kategori" name="kode_kategori" placeholder="Kode Kategori">
                            @endif
                        </div>    
                        <div class="col-md-6">
                        </div>
                        <div class="col-md-6">
                          @if($act == 'create')
                            <input type="submit" class="btn btn-primary" name="Buat">
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
@endsection