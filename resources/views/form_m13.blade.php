@extends('layouts.layout_guru')

@section('title')
    <title>PhyDiags | Education</title>
@endsection

@section('content')

<form action="{{route('tambahReduksi12')}}" method="post">
  @csrf
  <div class="form-group">
    <label for="exampleFormControlInput1">Deskripsi Miskonsepsi</label>
    <input type="textarea" class="form-control" id="exampleFormControlInput1" placeholder="Deskripsi Miskonsepsi" name="des_msc13">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Deskripsi Konsepsi</label>
    <input type="textarea" class="form-control" id="exampleFormControlInput1" placeholder="Deskripsi Konsepsi" name="des_kon13">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Model Pembelajaran</label>
    <input type="textarea" class="form-control" id="exampleFormControlInput1" placeholder="model Pembelajaran" name="model_reduksi13">
  </div>
 
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Reduksi</label>
   <textarea class="form-control ckeditor" name="text_reduksi13" rows="auto" cols="auto" id="reduksi" rows="10" required></textarea>
  </div>
   <div>
    <button type="sumbit" class="btn btn-primary">Simpan</button>
   </div>
</form>

@endsection
<script src="{{asset('ckeditor/ckeditor.js')}}"></script>
<script>
ClassicEditor
            .create( document.querySelector( '#reduksi' ) )
            .then( editor => {
                    console.log( editor );
            } )
            .catch( error => {
                    console.error( error );
            } );
</script>