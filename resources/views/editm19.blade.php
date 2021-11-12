@extends('layouts.layout_guru')

@section('title')
    <title>PhyDiags | Education</title>
@endsection

@section('content')




<form action="{{route('updatem19', $editreduksim19->id)}}"  method="post">
  @csrf
  @method('PATCH')
 
  <div class="form-group">
    <label for="exampleFormControlInput1">Deskripsi Miskonsepsi</label>
    <input type='hidden' name='id' value='{{$editreduksim19->id}}'>
    <input type="textarea" class="form-control" id="exampleFormControlInput1"
    value="{{$editreduksim19->des_msc19}}" name="des_msc19">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Deskripsi Konsepsi</label>
    <input type="textarea" class="form-control" id="exampleFormControlInput1" 
    value="{{$editreduksim19->des_kon19}}" name="des_kon19">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Model Pembelajaran</label>
    <input type="textarea" class="form-control" id="exampleFormControlInput1" 
    value="{{$editreduksim19->model_reduksi19}}" name="model_reduksi19">
  </div>
 
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Reduksi</label>
   <textarea class="form-control ckeditor" name="text_reduksi19" rows="auto" cols="auto" id="reduksi" rows="10" required></textarea>
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
17