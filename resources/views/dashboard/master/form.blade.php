@extends('dashboard.layout.app')

@if($act == 'create')
  @section('title','Tambah Master Data')
@else
  @section('title','Edit Master Data')
@endif

@section('content')


    <div class="col-xl-12 col-md-8">
            <div class="card Recent-Users table-card">
              <div class="card-header">
                <a href="{{ url('/master')}}" class="btn btn-warning"><i class="ph ph-arrow-left"></i> Kembali</a> <br><br>
              </div>
              <div class="card-body px-0 py-3">
                <div class="table-responsive">
                @if($act == 'create')
                  <form method="post" action="{{ url('/master')}}" enctype="multipart/form-data">
                @else
                  <form method="post" action="{{ url('/master/'.$master->id)}}" enctype="multipart/form-data">
                  @method('PUT')
                @endif
                     @csrf
                    <div class="container mt-12">
                    <div class="row g-5">
                        <div class="col-md-6">
                            <div class="col-md-12" >
                                <label for="name" class="form-label">Header</label>
                                @if($act == 'edit')
                                    <input type="text" class="form-control" id="header" name="header" placeholder="Header" value="{{$master->header}}">
                                @else
                                    <input type="text" class="form-control" id="header" name="header" placeholder="Header">
                                @endif
                            </div>
                            <div class="col-md-12" >
                                <label for="name" class="form-label">Isi</label>
                                @if($act == 'edit')
                                    <textarea name="isi" id="editor" cols="10">{!! $master->isi !!}</textarea>
                                @else
                                    <textarea name="isi" id="editor" cols="10"></textarea>
                                @endif
                            </div>
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