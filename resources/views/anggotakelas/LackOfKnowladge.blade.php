@extends('layouts.layout_siswa')

@section('title')
    <title>PhyDiags | Education</title>
@endsection
@section('content')
<main class="main">

                 
     
                @foreach($Reduksilk as $item)

                <div class="app-main__inner">


        <div class="alert alert-danger" role="alert">
                    <center><h1>Anda Mengalami Lack Of Knowladge</h1></center>
                    </div>

                    <div style="font-size: 4vw;
            color:#2c3e50; font-size :16px; margin-left: 80px; margin-right: 60px;">
                        
                        
                        </dd class="dua"> <dt class="col-sm-3"  >Model pembelajaran untuk mengatasi Lack Of Knowladge</dt> <dd class="col-sm-9">{{$item->model_reduksilk}}
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
                            <center><h2 alig="center">Kinematika</h2></center>
                            <center><h3 alig="center">Reduksi Lack Of Knowladge</h3></center>
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
                                {!!$item->text_reduksilk!!}
                            </p>
                          </div>
                        </div>
                      </div>

                      <div>

                        <a href="{{route('hasilUjian',$peserta_ujian->id)}}"><button class="btn btn-warning" style="box-shadow: 3px 2px 5px grey;"><i class="fa fa-reply mr-1" ></i> 
                    Kembali</button></a> 
                     </div>

                  
                     @endforeach
</main>
@endsection