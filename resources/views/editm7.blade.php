@extends('layouts.layout_guru')

@section('title')
    <title>PhyDiags | Education</title>
@endsection

@section('content')




<form action="{{route('updatem7', $editreduksim7->id)}}"  method="post">
  @csrf
  @method('PATCH')
 
  <div class="form-group">
    <label for="exampleFormControlInput1">Deskripsi Miskonsepsi</label>
    <input type='hidden' name='id' value='{{$editreduksim7->id}}'>
    <input type="textarea" class="form-control" id="exampleFormControlInput1"
    value="{{$editreduksim7->des_msc7}}" name="des_msc7">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Deskripsi Konsepsi</label>
    <input type="textarea" class="form-control" id="exampleFormControlInput1" 
    value="{{$editreduksim7->des_kon7}}" name="des_kon7">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Model Pembelajaran</label>
    <input type="textarea" class="form-control" id="exampleFormControlInput1" 
    value="{{$editreduksim7->model_reduksi7}}" name="model_reduksi7">
  </div>
 
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Reduksi</label>
   <textarea class="form-control ckeditor" name="text_reduksi7" rows="auto" cols="auto" id="reduksi" rows="10" required></textarea>
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
