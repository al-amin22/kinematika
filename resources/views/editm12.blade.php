@extends('layouts.layout_guru')

@section('title')
    <title>PhyDiags | Education</title>
@endsection

@section('content')




<form action="{{route('updatem12', $editreduksim12->id)}}"  method="post">
  @csrf
  @method('PATCH')
 
  <div class="form-group">
    <label for="exampleFormControlInput1">Deskripsi Miskonsepsi</label>
    <input type='hidden' name='id' value='{{$editreduksim12->id}}'>
    <input type="textarea" class="form-control" id="exampleFormControlInput1"
    value="{{$editreduksim12->des_msc12}}" name="des_msc12">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Deskripsi Konsepsi</label>
    <input type="textarea" class="form-control" id="exampleFormControlInput1" 
    value="{{$editreduksim12->des_kon12}}" name="des_kon12">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Model Pembelajaran</label>
    <input type="textarea" class="form-control" id="exampleFormControlInput1" 
    value="{{$editreduksim12->model_reduksi12}}" name="model_reduksi12">
  </div>
 
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Reduksi</label>
   <textarea class="form-control ckeditor" name="text_reduksi12" rows="auto" cols="auto" id="reduksi" rows="10" required></textarea>
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
