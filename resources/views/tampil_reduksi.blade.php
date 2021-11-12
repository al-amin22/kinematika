@extends('layouts.layout_guru')

@section('title')
    <title>PhyDiags | Education</title>
@endsection
@section('content')
<main class="main">

                  <p>
                    <a href="{{route('createmsatu')}}"><button type="button" class="btn btn-primary">Tambah Reduksi</button></a>
                  </p>
     
     			@foreach($tampilReduksi as $item)

                <div class="app-main__inner">

                  


                	<p>
                		<a href="{{route('edit', $item->id)}}"><button type="button" class="btn btn-primary">Edit Reduksi</button></a>
                	</p>

                   <p>
                    jika sudah buat Reduksi sebelumnya, silahkan langsung di klik edit.
                  </p>

                    
                    <div class="alert alert-danger" role="alert">
                    <center><h1>Anda Mengalami Miskonsepsi Tingkat Satu </h1></center>
                    </div>

                    <div style="font-size: 4vw;
			color:#2c3e50; font-size :16px; margin-left: 80px; margin-right: 60px;">
                        <dl class="row"> <dt class="col-sm-3" > Deskripsi Miskonsepsi</dt> <dd class="col-sm-9">  {{$item->des_msc}}

                        </dd class="dua"> <dt class="col-sm-3">Deskripsi Konsepsi</dt> <dd class="col-sm-9"> <p>{{$item->des_kon}}</p> 
                        
                        </dd class="dua"> <dt class="col-sm-3"  >Model pembelajaran untuk mengatasi miskonsepsi</dt> <dd class="col-sm-9">{{$item->model_reduksi}}
                        </dd>
                    </div> 
                    <div style="font-size: 4vw;
			color:#2c3e50; font-size :16px; margin-left: 80px; margin-right: 60px;">
                        <p>Simak Penjelasan Berikut :</p>
                    </div>

                    <div class="container-fluid">
                      <div class="row align-items-start">
                        <div class="col">
                        </div>
                        <div class="col-12">
                            <center><h2 alig="center">Kinematika Gerak Lurus</h2></center>
                            <center><h3 alig="center">Reduksi Miskonsepsi Satu</h3></center>
                            <hr size="100px" width="100%" alig="center" color="black">
                        </div>
                        <div class="">
                        </div>
                      </div>
                    </div>
                
                    <div class="container-fluid col-sm-12">
                      <div class="row align-items-start">
                          <div class="col">
                          	<p class="dua">
                          		{!!$item->text_reduksi!!}
                          	</p>
                  
                     @endforeach


</main>

@endsection