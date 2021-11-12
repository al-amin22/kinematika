@extends('layouts.layout_siswa')
<?php
use App\MiskonsepsiDetail;
use App\JawabanTk1;
use App\JawabanTk2;
use App\JawabanTk3;
use App\JawabanTk4;
use App\HasilUjian;
?>
@section('content')
<style>
@media screen and (max-width: 1000px) {
   .card-img{
     max-width: 50px;
     max-height: 45px;
   }

   .namauser,.tekskecil{
     font-size: 10px;
     margin-top: 0px;
   }

   #card-peserta{
     display: flex;
     justify-content: center;

   }
}
</style>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="alert alert-success" role="alert">
                <h5 class="alert-heading mb-0"><strong>{{$peserta_ujian->ujian->kelas->nama_kelas}} </strong></h5>
            </div>
        </div>
    </div>

<div class="card ">

    <div class="card-header" style="background: #FF7F50;"> 
        Hasil Ujian {{$peserta_ujian->ujian->nama_ujian}}
    </div>

    <div class="card-body text-center">
        <div id="hasil">
                <!-- <div class="row justify-content-center">
                    <div class="col-md-12">
                        <div class="alert alert-success" role="alert">
                            Keterangan : {{$peserta_ujian->keterangan}}
                        </div>
                    </div>
                </div> -->
            <!-- <h5> <strong>Hasil Ujian Peserta</strong> </h5> -->
            <div class="table-inside">
            <table class="table table-striped table-bordered table-sm">
                <thead class="thead-dark text-center">
                    <tr>
                        <th scope="col" style="width:50px">No</th>
                        <th>Tier 1</th>
                        <th>Tier 2</th>
                        <th>Tier 3</th>
                        <th>Tier 4</th>
                        <th scope="col" >Kategori</th>
                        <th scope="col">FeedBack</th>
                        <th scope="col">Aksi</th>

                    </tr>
                </thead>
                <tbody>
                    <?php $i=0; ?>
                    @foreach ($hasil_ujian as $item)
                    <tr>
                        <td scope="row"><?php  $i++;  echo $i; ?></td>
                        <td>@if($item->jawaban_tk1->jawaban == $item->jawaban_tk1->soal_tk1->kunci) 1 @else 0 @endif</td>
                        <td>@if($item->jawaban_tk2->jawaban == $item->jawaban_tk2->soal_tk2->kunci) 1 @else 0 @endif</td>
                        <td>@if($item->jawaban_tk3->jawaban == $item->jawaban_tk3->soal_tk3->kunci) 1 @else 0 @endif</td>
                        <td>@if($item->jawaban_tk4->jawaban == $item->jawaban_tk4->soal_tk4->kunci) 1 @else 0 @endif</td>
                        <td>
                              {{$item->hasil}}
                        </td>
                        <td> 
 @if($item->hasil == 'MSC')
    @if($item->miskonsepsi_id == NULL  ) 
        <?php echo 0?>
    @else
    M{{$item->miskonsepsi_id}}
    @endif

 @else
    {{$item->keterangan}}
 @endif


                        </td>
                         <td> 
<!-- tambahin miskonsepsi -->
@if($item->keterangan == 'Misconception' AND $item->miskonsepsi_id == 1)  
<a href="{{route('miskonsepsiSatu',$item->id)}}"> Pahami Materi 1</a> 
<a href="{{route('UpdateUjianSiswa',$item->id)}}"><button class="btn btn-warning" style="box-shadow: 3px 2px 5px grey;"><i class="fa fa-reply mr-1" ></i> Test Ulang</button></a> 
@elseif($item->keterangan == 'Misconception' AND $item->miskonsepsi_id == 2) 
<a href="{{route('miskonsepsiDua',$item->id)}}"> Pahami Materi 2 </a> 
<a href="{{route('UpdateUjianSiswa',$item->id)}}"><button class="btn btn-warning" style="box-shadow: 3px 2px 5px grey;"><i class="fa fa-reply mr-1" ></i> Test Ulang</button></a> 
@elseif($item->keterangan == 'Misconception' AND $item->miskonsepsi_id == 3)  
<a href="{{route('miskonsepsiTiga',$item->id)}}"> Pahami Materi 3</a> 
<a href="{{route('UpdateUjianSiswa',$item->id)}}"><button class="btn btn-warning" style="box-shadow: 3px 2px 5px grey;"><i class="fa fa-reply mr-1" ></i> Test Ulang</button></a> 
@elseif($item->keterangan == 'Misconception' AND $item->miskonsepsi_id == 4)  
<a href="{{route('miskonsepsiEmpat',$item->id)}}"> Pahami Materi 4</a> 
<a href="{{route('UpdateUjianSiswa',$item->id)}}"><button class="btn btn-warning" style="box-shadow: 3px 2px 5px grey;"><i class="fa fa-reply mr-1" ></i> Test Ulang</button></a> 
@elseif($item->keterangan == 'Misconception' AND $item->miskonsepsi_id == 5)  
<a href="{{route('miskonsepsiLima',$item->id)}}"> Pahami Materi 5</a> 
<a href="{{route('UpdateUjianSiswa',$item->id)}}"><button class="btn btn-warning" style="box-shadow: 3px 2px 5px grey;"><i class="fa fa-reply mr-1" ></i> Test Ulang</button></a> 
@elseif($item->keterangan == 'Misconception' AND $item->miskonsepsi_id == 6)  
<a href="{{route('miskonsepsiEnam',$item->id)}}"> Pahami Materi 6</a> 
<a href="{{route('UpdateUjianSiswa',$item->id)}}"><button class="btn btn-warning" style="box-shadow: 3px 2px 5px grey;"><i class="fa fa-reply mr-1" ></i> Test Ulang</button></a> 
@elseif($item->keterangan == 'Misconception' AND $item->miskonsepsi_id == 7)  
<a href="{{route('miskonsepsiTujuh',$item->id)}}"> Pahami Materi 7</a> 
<a href="{{route('UpdateUjianSiswa',$item->id)}}"><button class="btn btn-warning" style="box-shadow: 3px 2px 5px grey;"><i class="fa fa-reply mr-1" ></i> Test Ulang</button></a>
@elseif($item->keterangan == 'Misconception' AND $item->miskonsepsi_id == 8)  
<a href="{{route('miskonsepsiDelapan',$item->id)}}"> Pahami Materi 8</a> 
<a href="{{route('UpdateUjianSiswa',$item->id)}}"><button class="btn btn-warning" style="box-shadow: 3px 2px 5px grey;"><i class="fa fa-reply mr-1" ></i> Test Ulang</button></a>  
@elseif($item->keterangan == 'Misconception' AND $item->miskonsepsi_id == 9)  
<a href="{{route('miskonsepsiSembilan',$item->id)}}"> Pahami Materi 9</a> 
<a href="{{route('UpdateUjianSiswa',$item->id)}}"><button class="btn btn-warning" style="box-shadow: 3px 2px 5px grey;"><i class="fa fa-reply mr-1" ></i> Test Ulang</button></a> 
@elseif($item->keterangan == 'Misconception' AND $item->miskonsepsi_id == 10)  
<a href="{{route('miskonsepsiSepuluh',$item->id)}}"> Pahami Materi 10</a> 
<a href="{{route('UpdateUjianSiswa',$item->id)}}"><button class="btn btn-warning" style="box-shadow: 3px 2px 5px grey;"><i class="fa fa-reply mr-1" ></i> Test Ulang</button></a> 
@elseif($item->keterangan == 'Misconception' AND $item->miskonsepsi_id == 11)  
<a href="{{route('miskonsepsiSebelas',$item->id)}}"> Pahami Materi 11</a> 
<a href="{{route('UpdateUjianSiswa',$item->id)}}"><button class="btn btn-warning" style="box-shadow: 3px 2px 5px grey;"><i class="fa fa-reply mr-1" ></i> Test Ulang</button></a> 
@elseif($item->keterangan == 'Misconception' AND $item->miskonsepsi_id == 12)  
<a href="{{route('miskonsepsiDuabelas',$item->id)}}"> Pahami Materi 12</a> 
<a href="{{route('UpdateUjianSiswa',$item->id)}}"><button class="btn btn-warning" style="box-shadow: 3px 2px 5px grey;"><i class="fa fa-reply mr-1" ></i> Test Ulang</button></a> 
@elseif($item->keterangan == 'Misconception' AND $item->miskonsepsi_id == 13)  
<a href="{{route('miskonsepsiTigabelas',$item->id)}}"> Pahami Materi 13</a> 
<a href="{{route('UpdateUjianSiswa',$item->id)}}"><button class="btn btn-warning" style="box-shadow: 3px 2px 5px grey;"><i class="fa fa-reply mr-1" ></i> Test Ulang</button></a> 
@elseif($item->keterangan == 'Misconception' AND $item->miskonsepsi_id == 14)  
<a href="{{route('miskonsepsiEmpatbelas',$item->id)}}"> Pahami Materi 14</a> 
<a href="{{route('UpdateUjianSiswa',$item->id)}}"><button class="btn btn-warning" style="box-shadow: 3px 2px 5px grey;"><i class="fa fa-reply mr-1" ></i> Test Ulang</button></a> 
@elseif($item->keterangan == 'Misconception' AND $item->miskonsepsi_id == 15)  
<a href="{{route('miskonsepsiLimabelas',$item->id)}}"> Pahami Materi 15</a> 
<a href="{{route('UpdateUjianSiswa',$item->id)}}"><button class="btn btn-warning" style="box-shadow: 3px 2px 5px grey;"><i class="fa fa-reply mr-1" ></i> Test Ulang</button></a> 
@elseif($item->keterangan == 'Misconception' AND $item->miskonsepsi_id == 16)  
<a href="{{route('miskonsepsiEnambelas',$item->id)}}"> Pahami Materi 16</a> 
<a href="{{route('UpdateUjianSiswa',$item->id)}}"><button class="btn btn-warning" style="box-shadow: 3px 2px 5px grey;"><i class="fa fa-reply mr-1" ></i> Test Ulang</button></a> 
@elseif($item->keterangan == 'Misconception' AND $item->miskonsepsi_id == 17)  
<a href="{{route('miskonsepsiTujuhbelas',$item->id)}}"> Pahami Materi 17</a> 
<a href="{{route('UpdateUjianSiswa',$item->id)}}"><button class="btn btn-warning" style="box-shadow: 3px 2px 5px grey;"><i class="fa fa-reply mr-1" ></i> Test Ulang</button></a> 
@elseif($item->keterangan == 'Misconception' AND $item->miskonsepsi_id == 18)  
<a href="{{route('miskonsepsiDelapanbelas',$item->id)}}"> Pahami Materi 18</a> 
<a href="{{route('UpdateUjianSiswa',$item->id)}}"><button class="btn btn-warning" style="box-shadow: 3px 2px 5px grey;"><i class="fa fa-reply mr-1" ></i> Test Ulang</button></a>
@elseif($item->keterangan == 'Misconception' AND $item->miskonsepsi_id == 19)  
<a href="{{route('miskonsepsiSembilanbelas',$item->id)}}"> Pahami Materi 19</a> 
<a href="{{route('UpdateUjianSiswa',$item->id)}}"><button class="btn btn-warning" style="box-shadow: 3px 2px 5px grey;"><i class="fa fa-reply mr-1" ></i> Test Ulang</button></a>  
@elseif($item->keterangan == 'Misconception' AND $item->miskonsepsi_id == 20)  
<a href="{{route('miskonsepsiDuapuluh',$item->id)}}"> Pahami Materi 20</a> 
<a href="{{route('UpdateUjianSiswa',$item->id)}}"><button class="btn btn-warning" style="box-shadow: 3px 2px 5px grey;"><i class="fa fa-reply mr-1" ></i> Test Ulang</button></a> 

<!-- dak perlu di ubah -->
@elseif($item->keterangan == 'Misconception' AND $item->miskonsepsi_id == NULL) 
<a href="#"> Belum ada materi </a> 
<a href="{{route('UpdateUjianSiswa',$item->id)}}"><button class="btn btn-warning" style="box-shadow: 3px 2px 5px grey;"><i class="fa fa-reply mr-1" ></i> Test Ulang</button></a> 

@elseif($item->keterangan == 'False Negative' AND $item->miskonsepsi_id == NULL) <a href="{{route('falseNegative',$item->id)}}"> Pahami Materi </a>
<a href="{{route('UpdateUjianSiswa',$item->id)}}"><button class="btn btn-warning" style="box-shadow: 3px 2px 5px grey;"><i class="fa fa-reply mr-1" ></i> Test Ulang</button></a> 
@elseif($item->keterangan == 'False Positive' AND $item->miskonsepsi_id == NULL) <a href="{{route('falsePositive',$item->id)}}"> Pahami Materi </a>
<a href="{{route('UpdateUjianSiswa',$item->id)}}"><button class="btn btn-warning" style="box-shadow: 3px 2px 5px grey;"><i class="fa fa-reply mr-1" ></i> Test Ulang</button></a> 
@elseif($item->keterangan == 'Lack of Knowledge' AND $item->miskonsepsi_id == NULL) <a href="{{route('LackOfKnowladge',$item->id)}}"> Pahami Materi </a>
<a href="{{route('UpdateUjianSiswa',$item->id)}}"><button class="btn btn-warning" style="box-shadow: 3px 2px 5px grey;"><i class="fa fa-reply mr-1" ></i> Test Ulang</button></a> 

@else 
Anda Sudah Paham 
@endif

                            </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>  
    </div>
     
    </div>
</div>
<a href="{{route('showKelasSiswa',$peserta_ujian->ujian->kelas->id)}}"><button class="btn btn-warning" style="box-shadow: 3px 2px 5px grey;"><i class="fa fa-reply mr-1" ></i> Kembali</button></a>       

</div>
@endsection
