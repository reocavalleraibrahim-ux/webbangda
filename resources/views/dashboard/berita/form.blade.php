@extends('dashboard.layout.app')

@if($act == 'create')
  @section('title','Tambah Berita')
@else
  @section('title','Edit Berita')
@endif

@section('content')


    <div class="col-xl-12 col-md-8">
            <div class="card Recent-Users table-card">
              <div class="card-header">
                <a href="{{ url('/berita')}}" class="btn btn-warning"><i class="ph ph-arrow-left"></i> Kembali</a> <br><br>
              </div>
              <div class="card-body px-0 py-3">
                <div class="table-responsive">
                @if($act == 'create')
                  <form method="post" action="{{ url('/berita')}}" enctype="multipart/form-data">
                @else
                  <form method="post" action="{{ url('/berita/'.$berita->id)}}" enctype="multipart/form-data">
                  @method('PUT')
                @endif
                     @csrf
                    <div class="container mt-12">
                    <div class="row g-5">
                        <div class="col-md-6">
                          @if($act == 'create')
                            <img id="prev" alt="" src="{{ asset('admin/dist/img/thumb.jfif')}}" style="max-width:500px;">
                          @else
                            <img id="prev" alt="" src="{{ asset('storage/'.$berita->thumbnail)}}" style="max-width:500px;">
                          @endif
                        </div>
                        <div class="col-md-6">
                            <div class="col-md-12" >
                                <label for="name" class="form-label">Judul Berita</label>
                                @if($act == 'edit')
                                    <input type="text" class="form-control" id="judul" name="judul" placeholder="Judul" value="{{$berita->judul}}">
                                @else
                                    <input type="text" class="form-control" id="judul" name="judul" placeholder="Judul">
                                @endif
                            </div>
                            <div class="col-md-12" >
                                <label for="name" class="form-label">Isi Berita</label>
                                @if($act == 'edit')
                                    <textarea name="isi" id="editor" cols="10">{!! $berita->isi !!}</textarea>
                                @else
                                    <textarea name="isi" id="editor" cols="10"></textarea>
                                @endif
                            </div>
                        </div>                        
                        <div class="col-md-6">
                            <label for="name" class="form-label">Thumbnail Berita</label>
                            <input type="file" class="form-control" id="thumbnail" name="thumbnail" placeholder="Thumbnail">
                        </div>
                        <div class="col-md-6">
                        </div>
                        <div class="col-md-6">
                          @if($act == 'create')
                            <input type="submit" class="btn btn-primary" name="Buat Berita">
                          @else
                            <input type="submit" class="btn btn-primary" name="Update Berita">
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