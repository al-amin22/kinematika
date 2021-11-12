<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('index');

Route::get('/home/materi', function () {
    return view('materi');
});

Route::get('/home/false_positive', function () {
    return view('false_positive');
});

Route::get('/home/false_negative', function () {
    return view('false_negative');
});

Route::get('/home/knowladge', function () {
    return view('knowladge');
});

Route::get('/home/miskonsepsi', function () {
    return view('miskonsepsi');
});


Auth::routes();

Route::get('/logout','UserController@logout')->name('logout');


Route::get('/reduksi', 'ReduksiController@reduksi')->name('reduksi');
Route::get('/tampilReduksi', 'ReduksiController@tampilReduksi')->name('tampilReduksi');

Route::get('/createM1', 'ReduksiController@createmsatu')->name('createmsatu');
Route::post('/tambahReduksi', 'ReduksiController@tambahReduksi')->name('tambahReduksi');

Route::get('/editmsatu/{id}', 'ReduksiController@edit')->name('edit');
Route::patch('/updatemsatu/{id}', 'ReduksiController@update')->name('update');

//route reduksi m2

Route::get('/tampilReduksidua', 'ReduksiController@tampilReduksidua')->name('tampilReduksidua');
Route::get('/createM2', 'ReduksiController@create')->name('create');
Route::post('/tambahReduksidua', 'ReduksiController@tambahReduksidua')->name('tambahReduksidua');

Route::get('/editmdua/{id}', 'ReduksiController@editmdua')->name('editmdua');
Route::patch('/updatemdua/{id}', 'ReduksiController@updatemdua')->name('updatemdua');

//route redksi m3

Route::get('/tampilReduksitiga', 'ReduksiController@tampilReduksitiga')->name('tampilReduksitiga');
Route::get('/createM3', 'ReduksiController@createmtiga')->name('createmtiga');
Route::post('/tambahReduksitiga', 'ReduksiController@tambahReduksitiga')->name('tambahReduksitiga');

Route::get('/editmtiga/{id}', 'ReduksiController@editmtiga')->name('editmtiga');
Route::patch('/updatemtiga/{id}', 'ReduksiController@updateReduksitiga')->name('updatemtiga');


//route reduksi m4
Route::get('/tampilReduksiempat', 'ReduksiController@tampilReduksiempat')->name('tampilReduksiempat');
Route::get('/createM4', 'ReduksiController@createmempat')->name('createmempat');
Route::post('/tambahReduksiempat', 'ReduksiController@tambahReduksiempat')->name('tambahReduksiempat');

Route::get('/editmempat/{id}', 'ReduksiController@editmempat')->name('editmempat');
Route::patch('/updatempat/{id}', 'ReduksiController@updateReduksiempat')->name('updatemempat');

//route reduksi m5
Route::get('/tampilReduksilima', 'ReduksiController@tampilReduksilima')->name('tampilReduksilima');
Route::get('/createM5', 'ReduksiController@createmlima')->name('createmlima');
Route::post('/tambahReduksilima', 'ReduksiController@tambahReduksilima')->name('tambahReduksilima');

Route::get('/editmlima/{id}', 'ReduksiController@editmlima')->name('editmlima');
Route::patch('/updatemlima/{id}', 'ReduksiController@updateReduksilima')->name('updatemlima');

//route reduksi m6
Route::get('/tampilReduksienam', 'ReduksiController@tampilReduksienam')->name('tampilReduksienam');
Route::get('/createM6', 'ReduksiController@createmenam')->name('createmenam');
Route::post('/tambahReduksienam', 'ReduksiController@tambahReduksienam')->name('tambahReduksienam');

Route::get('/editmenam/{id}', 'ReduksiController@editmenam')->name('editmenam');
Route::patch('/updatemenam/{id}', 'ReduksiController@updateReduksienam')->name('updatemenam');


//route reduksi m7
Route::get('/tampilReduksi7', 'ReduksiController@tampilReduksi7')->name('tampilReduksi7');
Route::get('/createM7', 'ReduksiController@createm7')->name('createm7');
Route::post('/tambahReduksi7', 'ReduksiController@tambahReduksi7')->name('tambahReduksi7');

Route::get('/editm7/{id}', 'ReduksiController@editm7')->name('editm7');
Route::patch('/updatem7/{id}', 'ReduksiController@updatem7')->name('updatem7');


//route reduksi m8
Route::get('/tampilReduksi8', 'ReduksiController@tampilReduksi8')->name('tampilReduksi8');
Route::get('/createM8', 'ReduksiController@createm8')->name('createm8');
Route::post('/tambahReduksi8', 'ReduksiController@tambahReduksi8')->name('tambahReduksi8');

Route::get('/editm8/{id}', 'ReduksiController@editm8')->name('editm8');
Route::patch('/updatem8/{id}', 'ReduksiController@updatem8')->name('updatem8');


//route reduksi m9
Route::get('/tampilReduksi9', 'ReduksiController@tampilReduksi9')->name('tampilReduksi9');
Route::get('/createM9', 'ReduksiController@createm9')->name('createm9');
Route::post('/tambahReduksi9', 'ReduksiController@tambahReduksi9')->name('tambahReduksi9');

Route::get('/editm9/{id}', 'ReduksiController@editm9')->name('editm9');
Route::patch('/updatem9/{id}', 'ReduksiController@updatem9')->name('updatem9');


//route reduksi m10
Route::get('/tampilReduksi10', 'ReduksiController@tampilReduksi10')->name('tampilReduksi10');
Route::get('/createM10', 'ReduksiController@createm10')->name('createm10');
Route::post('/tambahReduksi10', 'ReduksiController@tambahReduksi10')->name('tambahReduksi10');

Route::get('/editm10/{id}', 'ReduksiController@editm10')->name('editm10');
Route::patch('/updatem10/{id}', 'ReduksiController@updatem10')->name('updatem10');


//route reduksi m11
Route::get('/tampilReduksi11', 'ReduksiController@tampilReduksi11')->name('tampilReduksi11');
Route::get('/createM11', 'ReduksiController@createm11')->name('createm11');
Route::post('/tambahReduksi11', 'ReduksiController@tambahReduksi11')->name('tambahReduksi11');

Route::get('/editm11/{id}', 'ReduksiController@editm11')->name('editm11');
Route::patch('/updatem11/{id}', 'ReduksiController@updatem11')->name('updatem11');

//route reduksi m12
Route::get('/tampilReduksi12', 'ReduksiController@tampilReduksi12')->name('tampilReduksi12');
Route::get('/createM12', 'ReduksiController@createm12')->name('createm12');
Route::post('/tambahReduksi12', 'ReduksiController@tambahReduksi12')->name('tambahReduksi12');

Route::get('/editm12/{id}', 'ReduksiController@editm12')->name('editm12');
Route::patch('/updatem12/{id}', 'ReduksiController@updatem12')->name('updatem12');


//route reduksi m13
Route::get('/tampilReduksi13', 'ReduksiController@tampilReduksi13')->name('tampilReduksi13');
Route::get('/createM13', 'ReduksiController@createm13')->name('createm13');
Route::post('/tambahReduksi13', 'ReduksiController@tambahReduksi13')->name('tambahReduksi13');

Route::get('/editm13/{id}', 'ReduksiController@editm13')->name('editm13');
Route::patch('/updatem13/{id}', 'ReduksiController@updatem13')->name('updatem13');


//route reduksi m14
Route::get('/tampilReduksi14', 'ReduksiController@tampilReduksi14')->name('tampilReduksi14');
Route::get('/createM14', 'ReduksiController@createm14')->name('createm14');
Route::post('/tambahReduksi14', 'ReduksiController@tambahReduksi14')->name('tambahReduksi14');

Route::get('/editm14/{id}', 'ReduksiController@editm14')->name('editm14');
Route::patch('/updatem14/{id}', 'ReduksiController@updatem14')->name('updatem14');


//route reduksi m15
Route::get('/tampilReduksi15', 'ReduksiController@tampilReduksi15')->name('tampilReduksi15');
Route::get('/createM15', 'ReduksiController@createm15')->name('createm15');
Route::post('/tambahReduksi15', 'ReduksiController@tambahReduksi15')->name('tambahReduksi15');

Route::get('/editm15/{id}', 'ReduksiController@editm15')->name('editm15');
Route::patch('/updatem15/{id}', 'ReduksiController@updatem15')->name('updatem15');



//route reduksi m16
Route::get('/tampilReduksi16', 'ReduksiController@tampilReduksi16')->name('tampilReduksi16');
Route::get('/createM16', 'ReduksiController@createm16')->name('createm16');
Route::post('/tambahReduksi16', 'ReduksiController@tambahReduksi16')->name('tambahReduksi16');

Route::get('/editm16/{id}', 'ReduksiController@editm16')->name('editm16');
Route::patch('/updatem16/{id}', 'ReduksiController@updatem16')->name('updatem16');



//route reduksi m17
Route::get('/tampilReduksi17', 'ReduksiController@tampilReduksi17')->name('tampilReduksi17');
Route::get('/createM17', 'ReduksiController@createm17')->name('createm17');
Route::post('/tambahReduksi17', 'ReduksiController@tambahReduksi17')->name('tambahReduksi17');

Route::get('/editm17/{id}', 'ReduksiController@editm17')->name('editm17');
Route::patch('/updatem17/{id}', 'ReduksiController@updatem17')->name('updatem17');



//route reduksi m18
Route::get('/tampilReduksi18', 'ReduksiController@tampilReduksi18')->name('tampilReduksi18');
Route::get('/createM18', 'ReduksiController@createm18')->name('createm18');
Route::post('/tambahReduksi18', 'ReduksiController@tambahReduksi18')->name('tambahReduksi18');

Route::get('/editm18/{id}', 'ReduksiController@editm18')->name('editm18');
Route::patch('/updatem18/{id}', 'ReduksiController@updatem18')->name('updatem18');


//route reduksi m19
Route::get('/tampilReduksi19', 'ReduksiController@tampilReduksi19')->name('tampilReduksi19');
Route::get('/createM19', 'ReduksiController@createm19')->name('createm19');
Route::post('/tambahReduksi19', 'ReduksiController@tambahReduksi19')->name('tambahReduksi19');

Route::get('/editm19/{id}', 'ReduksiController@editm19')->name('editm19');
Route::patch('/updatem19/{id}', 'ReduksiController@updatem19')->name('updatem19');


//route reduksi m20
Route::get('/tampilReduksi20', 'ReduksiController@tampilReduksi20')->name('tampilReduksi20');
Route::get('/createM20', 'ReduksiController@createm20')->name('createm20');
Route::post('/tambahReduksi20', 'ReduksiController@tambahReduksi20')->name('tambahReduksi20');

Route::get('/editm20/{id}', 'ReduksiController@editm20')->name('editm20');
Route::patch('/updatem20/{id}', 'ReduksiController@updatem20')->name('updatem20');






//route reduksi falsePositive
Route::get('/tampilReduksifalsePositive', 'ReduksiController@tampilReduksifalsePositive')->name('tampilReduksifalsePositive');

Route::get('/createfalsePositive', 'ReduksiController@createfalsePositive')->name('createfalsePositive');

Route::post('/tambahReduksifalsePositive', 'ReduksiController@tambahReduksifalsePositive')->name('tambahReduksifalsePositive');

Route::get('/editfalsePositive{id}', 'ReduksiController@editfalsePositive')->name('editfalsePositive');
Route::patch('/updatefalsePositive/{id}', 'ReduksiController@updateReduksifalsePositive')->name('updatefalsePositive');


//route reduksi falseNegative
Route::get('/tampilReduksifalseNegative', 'ReduksiController@tampilReduksifalseNegative')->name('tampilReduksifalseNegative');

Route::get('/createfalseNegative', 'ReduksiController@createfalseNegative')->name('createfalseNegative');

Route::post('/tambahReduksifalseNegative', 'ReduksiController@tambahReduksifalseNegative')->name('tambahReduksifalseNegative');

Route::get('/editfalseNegative{id}', 'ReduksiController@editfalseNegative')->name('editfalseNegative');
Route::patch('/updatefalseNegative/{id}', 'ReduksiController@updateReduksifalseNegative')->name('updatefalseNegative');

//route LK

Route::get('/tampilReduksilk', 'ReduksiController@tampilReduksilk')->name('tampilReduksilk');

Route::get('/createlk', 'ReduksiController@createlk')->name('createlk');

Route::post('/tambahReduksilk', 'ReduksiController@tambahReduksilk')->name('tambahReduksilk');

Route::get('/editlk{id}', 'ReduksiController@editlk')->name('editlk');
Route::patch('/updatelk/{id}', 'ReduksiController@updateReduksilk')->name('updatelk');



Route::get('/home', 'HomeController@index');
Route::group(['middleware' => ['auth','checkRole:0']], function(){
    Route::get('/userguru/data','UserController@dataGuru')->name('userguruData');
    Route::get('/userguru/create','UserController@createGuru')->name('userguruCreate');
    Route::post('/userguru/store','UserController@storeGuru')->name('userguruStore');
    Route::get('/usersiswa/data','UserController@dataSiswa')->name('usersiswaData');
    Route::get('/usersiswa/create','UserController@createSiswa')->name('usersiswaCreate');
    Route::post('/usersiswa/store','UserController@storeSiswa')->name('usersiswaStore');
    Route::get('/panduan-guru','UserController@panduanGuru')->name('panduanGuru');
    Route::post('/panduan-guru/store','UserController@storepanduanGuru')->name('panduanguruStore');
    Route::get('/panduan-siswa','UserController@panduanSiswa')->name('panduanSiswa');
    Route::post('/panduan-siswa/store','UserController@storepanduanSiswa')->name('panduansiswaStore');
});

Route::group(['middleware' => ['auth','checkRole:1'],'prefix'=>'guru'], function(){
    // Route::get('/home', 'HomeController@index');
    Route::get('/profil','ProfilController@profilGuru')->name('profilGuru');
    Route::post('/profil','ProfilController@storeProfilGuru')->name('storeProfilGuru');
    Route::get('/edit','ProfilController@editProfilGuru')->name('editProfilGuru');
    Route::patch('/update','ProfilController@updateProfilGuru')->name('updateProfilGuru');
    Route::group(['prefix' => 'paketsoal'], function () {
        Route::get('/','PaketSoalController@getPaketSoal')->name('getPaketSoal');
        Route::get('/create','PaketSoalController@createPaketSoal')->name('createPaketSoal');
        Route::post('/','PaketSoalController@storePaketSoal')->name('storePaketSoal');
        Route::get('/{id}','PaketSoalController@soalSatuan')->name('soalSatuan');
        Route::get('/delete/{id}','PaketSoalController@deletePaketSoal')->name('deletePaketSoal');
        Route::group(['prefix' => 'soal_satuan'], function () {
            Route::post('/','PaketSoalController@storeSoalSatuan')->name('storeSoalSatuan');
            Route::get('/{id}','PaketSoalController@soalTingkat')->name('soalTingkat');
            //Soal Tk1
            Route::post('/soal_tk1','PaketSoalController@storeSoalTk1')->name('storeSoalTk1');
            Route::patch('/soal_tk1/{paket_soal_id}/update','PaketSoalController@updateSoalTk1', ['$paket_soal_id' =>'paket_soal_id'])->name('updateSoalTk1');
            //Soal Tk2
            Route::post('/soal_tk2','PaketSoalController@storeSoalTk2')->name('storeSoalTk2');
            Route::patch('/soal_tk2/{paket_soal_id}/update','PaketSoalController@updateSoalTk2', ['$paket_soal_id' =>'paket_soal_id'])->name('updateSoalTk2');
            //Soal Tk3
            Route::post('/soal_tk3','PaketSoalController@storeSoalTk3')->name('storeSoalTk3');
            Route::patch('/soal_tk3/{paket_soal_id}/update','PaketSoalController@updateSoalTk3', ['$paket_soal_id' =>'paket_soal_id'])->name('updateSoalTk3');
            //Soal Tk4
            Route::post('/soal_tk4','PaketSoalController@storeSoalTk4')->name('storeSoalTk4');
            Route::patch('/soal_tk4/{paket_soal_id}/update','PaketSoalController@updateSoalTk4', ['$paket_soal_id' =>'paket_soal_id'])->name('updateSoalTk4');

        });
    });
    Route::group(['prefix' => 'kelas'], function () {
        Route::get('/','KelasController@getKelas')->name('getKelas');
        Route::get('/create','KelasController@createKelas')->name('createKelas');
        Route::post('/','KelasController@storeKelas')->name('storeKelas');
        Route::get('/{id}','KelasController@showKelas')->name('showKelas');
        Route::get('/delete/{id}','KelasController@deleteKelas')->name('deleteKelas');
    });
    Route::group(['prefix' => 'ujian'], function () {
        Route::get('/','UjianController@getUjian')->name('getUjian');


 // penambahan data baru
  Route::group(['prefix' => 'pesan'], function () {
        Route::get('/','pesanController@getPesan')->name('getPesan');
        Route::get('/create','pesanController@createPesan')->name('createPesan');
        Route::post('/','pesanController@storePesan')->name('storePesan');
     //   Route::get('/{id}','pesanController@showKelas')->name('showKelas');
    //    Route::get('/delete/{id}','pesanController@deleteKelas')->name('deleteKelas');
         });
// akhir penambahan data baru
        Route::get('/create','UjianController@createUjian')->name('createUjian');

        Route::post('/','UjianController@storeUjian')->name('storeUjian');
        Route::get('/{id}','UjianController@showUjian')->name('showUjian');
        Route::patch('/update','UjianController@updateUjian')->name('updateUjian');
        Route::get('/delete/{id}','UjianController@deleteUjian')->name('deleteUjian');
        Route::get('/hasil/persiswa/{id}','UjianController@showHasilUjianPersiswa')->name('showHasilUjianPersiswa');
        Route::get('/hasil/persoal/{ujian_id}/{id}/{nomor}','UjianController@showHasilUjianPersoal', ['$id'=>'id','$ujian_id' =>'ujian_id'])->name('showHasilUjianPersoal');
        Route::get('/{id}/miskonsepsi/{miskonsepsi_id}','UjianController@detailMiskonsepsi')->name('detailMiskonsepsi');
    });

    Route::get('/export/{id}','UjianController@exportExcelHasil')->name('exportExcelHasil');

});

Route::group(['middleware' => ['auth','checkRole:2'],'prefix'=>'siswa'], function(){
    // Route::get('/home', 'HomeController@index');
    Route::get('/profil','ProfilController@profilSiswa')->name('profilSiswa');
    Route::post('/profil','ProfilController@storeProfilSiswa')->name('storeProfilSiswa');
    Route::get('/edit','ProfilController@editProfilSiswa')->name('editProfilSiswa');
    Route::patch('/update','ProfilController@updateProfilSiswa')->name('updateProfilSiswa');
    Route::group(['prefix' => 'kelas'], function () {
        Route::get('/','KelasController@getKelasSiswa')->name('getKelasSiswa');
        Route::post('/gabungkelas','KelasController@gabungKelasSiswa')->name('gabungKelasSiswa');
        Route::get('/show/{id}','KelasController@showKelasSiswa')->name('showKelasSiswa');
        Route::get('/hasilujian/{id}','KelasController@hasilUjian')->name('hasilUjian');
        Route::get('/hasilujian/falsenegative/{id}','KelasController@videoFalseNegative')->name('falseNegative');
        
        Route::get('/hasilujian/falsepositive/{id}','KelasController@videoFalsePositve')->name('falsePositive');

        Route::get('/hasilujian/lackofknowladge/{id}','KelasController@videoLackOfKnowladge')->name('LackOfKnowladge');

        
        Route::get('/hasilujian/miskonsepsi/{id}','KelasController@videoMiskonsepsi')->name('miskonsepsi');
        Route::get('/hasilujian/miskonsepsiSatu/{id}','KelasController@videoMiskonsepsi1')->name('miskonsepsiSatu');
        Route::get('/hasilujian/miskonsepsiDua/{id}','KelasController@videoMiskonsepsi2')->name('miskonsepsiDua');
        Route::get('/hasilujian/miskonsepsiTiga/{id}','KelasController@videoMiskonsepsi3')->name('miskonsepsiTiga');
        Route::get('/hasilujian/miskonsepsiEmpat/{id}','KelasController@videoMiskonsepsi4')->name('miskonsepsiEmpat');
        Route::get('/hasilujian/miskonsepsiLima/{id}','KelasController@videoMiskonsepsi5')->name('miskonsepsiLima');
        Route::get('/hasilujian/miskonsepsiEnam/{id}','KelasController@videoMiskonsepsi6')->name('miskonsepsiEnam');
        Route::get('/hasilujian/miskonsepsiTujuh/{id}','KelasController@videoMiskonsepsi7')->name('miskonsepsiTujuh');
        Route::get('/hasilujian/miskonsepsiDelapan/{id}','KelasController@videoMiskonsepsi8')->name('miskonsepsiDelapan');
        Route::get('/hasilujian/miskonsepsiSembilan/{id}','KelasController@videoMiskonsepsi9')->name('miskonsepsiSembilan');
        Route::get('/hasilujian/miskonsepsiSepuluh/{id}','KelasController@videoMiskonsepsi10')->name('miskonsepsiSepuluh');
        Route::get('/hasilujian/miskonsepsiSebelas/{id}','KelasController@videoMiskonsepsi11')->name('miskonsepsiSebelas');
        Route::get('/hasilujian/miskonsepsiDuabelas/{id}','KelasController@videoMiskonsepsi12')->name('miskonsepsiDuabelas');
        Route::get('/hasilujian/miskonsepsiTigabelas/{id}','KelasController@videoMiskonsepsi13')->name('miskonsepsiTigabelas');
        Route::get('/hasilujian/miskonsepsiEmpatbelas/{id}','KelasController@videoMiskonsepsi14')->name('miskonsepsiEmpatbelas');
        Route::get('/hasilujian/miskonsepsiLimabelas/{id}','KelasController@videoMiskonsepsi15')->name('miskonsepsiLimabelas');
        Route::get('/hasilujian/miskonsepsiEnambelas/{id}','KelasController@videoMiskonsepsi16')->name('miskonsepsiEnambelas');
        Route::get('/hasilujian/miskonsepsiTujuhbelas/{id}','KelasController@videoMiskonsepsi17')->name('miskonsepsiTujuhbelas');
        Route::get('/hasilujian/miskonsepsiDelapanbelas/{id}','KelasController@videoMiskonsepsi18')->name('miskonsepsiDelapanbelas');
        Route::get('/hasilujian/miskonsepsiSembilanbelas/{id}','KelasController@videoMiskonsepsi19')->name('miskonsepsiSembilanbelas');
        Route::get('/hasilujian/miskonsepsiDuapuluh/{id}','KelasController@videoMiskonsepsi20')->name('miskonsepsiDuapuluh');















        //Lanjut Disini
    });
    Route::group(['prefix' => 'ujian'], function () {
        Route::get('/','UjianController@getUjianSiswa')->name('getUjianSiswa');
        Route::get('/UpdateUjian/{id}','UjianController@UpdateUjianSiswa')->name('UpdateUjianSiswa');
        Route::get('/room/{id}','UjianController@runUjian')->name('runUjian');
        Route::get('/finish/{id}','UjianController@finishUjian')->name('finishUjian');
    });

});

Route::get('pagination/fetch_data', 'UjianController@fetch_data');
Route::get('store/jawaban_tk1', 'UjianController@storeJawabanTk1');
Route::get('store/jawaban_tk2', 'UjianController@storeJawabanTk2');
Route::get('store/jawaban_tk3', 'UjianController@storeJawabanTk3');
Route::get('store/jawaban_tk4', 'UjianController@storeJawabanTk4');
Route::get('store/hasil_ujian', 'UjianController@storeHasilUjian');

