@extends('layouts.layout_guru')

@section('title')
    <title>PhyDiags | Education</title>
@endsection
@section('content')
<main class="main">

                  <p>
                    <a href="{{route('createfalsePositive')}}"><button type="button" class="btn btn-primary">Tambah Reduksi</button></a>
                  </p>
     
     			@foreach($tampilReduksifalsePositive as $item)

                <div class="app-main__inner">


                  <a href="{{route('editfalsePositive',  $item->id)}}"><button type="button" class="btn btn-primary">Edit Reduksi</button></a>


                   <p>
                    jika sudah buat Reduksi sebelumnya, silahkan langsung di klik edit
                  </p>

        <div class="alert alert-danger" role="alert">
                    <center><h1>Anda Mengalami False Positive </h1></center>
                    </div>

                    <div style="font-size: 4vw;
      color:#2c3e50; font-size :16px; margin-left: 80px; margin-right: 60px;">
                        <dl class="row"> <dt class="col-sm-3" >Model pembelajaran untuk mengatasi False Positive</dt> <dd class="col-sm-9"> {{$item->model_reduksifalsePositive}}

                        
                        
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
                            <center><h2 alig="center">Usaha Dan Energi </h2></center>
                            <center><h3 alig="center">Reduksi False Positive</h3></center>
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
                          		{!!$item->text_reduksifalsePositive!!}
                          	</p>
                          </div>
                        </div>
                      </div>

                  
                     @endforeach
</main>
@endsection