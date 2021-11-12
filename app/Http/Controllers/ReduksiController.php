<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reduksim1;
use App\Reduksimdua;
use App\Reduksimtiga;
use App\Reduksimempat;
use App\Reduksimlima;
use App\Reduksimenam;
use App\ReduksiM7;
use App\ReduksiM8;
use App\ReduksiM9;
use App\ReduksiM10;
use App\Reduksim11;
use App\Reduksim12;
use App\Reduksim13;
use App\Reduksim14;
use App\Reduksim15;
use App\Reduksim16;
use App\Reduksim17;
use App\Reduksim18;
use App\Reduksim19;
use App\Reduksim20;

use App\ReduksifalsePositive;
use App\ReduksifalseNegative;
use App\Reduksilk;

class ReduksiController extends Controller
{
   

    public function reduksi()
    {
        return view('daftar_reduksi');
    }

    public function tampilReduksi()
    {
    	$tampilReduksi = Reduksim1::paginate(1);
    	//paginate
        return view('tampil_reduksi', compact(['tampilReduksi']));
    }

    public function createmsatu()
	{
   return view('form_msatu');
	}

    public function tambahReduksi(Request $request)
    {
        $tambahreduksi = Reduksim1::create([
            'des_msc' => $request->des_msc,
            'des_kon' => $request->des_kon,
            'model_reduksi' => $request->model_reduksi,
            'text_reduksi' => $request->text_reduksi,
           
        ]);

        return redirect('tampilReduksi');

     }

    
    public function edit($id)
	{
        $editreduksi = Reduksim1::findOrFail($id);

        return view('edit', compact('editreduksi'));
	}

    public function update(Request $request, $id)
	{
        $reduksimsatu = Reduksim1::findOrFail($id);
        
        $reduksimsatu->des_msc = $request->des_msc;
        $reduksimsatu->des_kon =$request->des_kon;
        $reduksimsatu->model_reduksi = $request->model_reduksi;
        $reduksimsatu->text_reduksi = $request->text_reduksi;
        $reduksimsatu->save();
       
        return redirect('/tampilReduksi')->with('success', 'Student updated successfully');
	}






    //reduksi M 2

     public function tampilReduksidua()
    {
        $tampilReduksimdua = Reduksimdua::paginate(1);
        //paginate
        return view('tampil_reduksimdua', compact(['tampilReduksimdua']));
    }

    public function create()
    {
    return view('create');
    }


     public function tambahReduksidua(Request $request)
    {
        $tambahreduksi = Reduksimdua::create([
            'des_mscdua' => $request->des_mscdua,
            'des_kondua' => $request->des_kondua,
            'model_reduksidua' => $request->model_reduksidua,
            'text_reduksidua' => $request->text_reduksidua,
           
        ]);

        return redirect('tampilReduksidua');

     }


      public function editmdua($id)
    {
        $editreduksimdua = Reduksimdua::findOrFail($id);

        return view('editmdua', compact('editreduksimdua'));
    }

    public function updatemdua(Request $request, $id)
    {
        $reduksimdua = Reduksimdua::findOrFail($id);
        
        $reduksimdua->des_mscdua = $request->des_mscdua;
        $reduksimdua->des_kondua =$request->des_kondua;
        $reduksimdua->model_reduksidua = $request->model_reduksidua;
        $reduksimdua->text_reduksidua = $request->text_reduksidua;
        $reduksimdua->save();
       
        return redirect('/tampilReduksidua')->with('success', 'Student updated successfully');
    }






    
    //contoler reduksi m3

    public function tampilReduksitiga()
    {
        $tampilReduksimtiga = Reduksimtiga::paginate(1);
        //paginate
        return view('tampil_reduksimtiga', compact(['tampilReduksimtiga']));
    }

    public function createmtiga()
    {
   return view('form_mtiga');
    }


    public function tambahReduksitiga(Request $request)
    {
        $tambahReduksimtiga = Reduksimtiga::create([
            'des_msctiga' => $request->des_msctiga,
            'des_kontiga' => $request->des_kontiga,
            'model_reduksitiga' => $request->model_reduksitiga,
            'text_reduksitiga' => $request->text_reduksitiga,
        ]);

        return redirect('tampilReduksitiga');
    }

    public function editmtiga($id)
    {
        $editreduksimtiga = Reduksimtiga::findOrFail($id);

        return view('editmtiga', compact(['editreduksimtiga']));
    }

    public function updateReduksitiga(Request $request, $id)

    {
        $reduksimtiga = Reduksimtiga::findOrFail($id);

        $reduksimtiga->des_msctiga = $request->des_msctiga;
        $reduksimtiga->des_kontiga =$request->des_kontiga;
        $reduksimtiga->model_reduksitiga = $request->model_reduksitiga;
        $reduksimtiga->text_reduksitiga = $request->text_reduksitiga;
        $reduksimtiga->save();

        return redirect('tampilReduksitiga');

    }


    //controller m4


    public function tampilReduksiempat()
    {
        $tampilReduksimempat = Reduksimempat::paginate(1);
        //paginate
        return view('tampil_reduksimempat', compact(['tampilReduksimempat']));
    }

    public function createmempat()
    {
   return view('form_mempat');
    }


    public function tambahReduksiempat(Request $request)
    {
        $tambahReduksimempat = Reduksimempat::create([
            'des_mscempat' => $request->des_mscempat,
            'des_konempat' => $request->des_konempat,
            'model_reduksiempat' => $request->model_reduksiempat,
            'text_reduksiempat' => $request->text_reduksiempat,
        ]);

        return redirect('tampilReduksiempat');
    }

    public function editmempat($id)
    {
        $editreduksimempat = Reduksimempat::findOrFail($id);

        return view('editmempat', compact(['editreduksimempat']));
    }

    public function updateReduksiempat(Request $request, $id)

    {
        $reduksimempat = Reduksimempat::findOrFail($id);

        $reduksimempat->des_mscempat = $request->des_mscempat;
        $reduksimempat->des_konempat =$request->des_konempat;
        $reduksimempat->model_reduksiempat = $request->model_reduksiempat;
        $reduksimempat->text_reduksiempat = $request->text_reduksiempat;
        $reduksimempat->save();

        return redirect('tampilReduksiempat');

    }

    //controller m5


    public function tampilReduksilima()
    {
        $tampilReduksimlima = Reduksimlima::paginate(1);
        //paginate
        return view('tampil_reduksimlima', compact(['tampilReduksimlima']));
    }

    public function createmlima()
    {
   return view('form_mlima');
    }


    public function tambahReduksilima(Request $request)
    {
        $tambahReduksimlima = Reduksimlima::create([
            'des_msclima' => $request->des_msclima,
            'des_konlima' => $request->des_konlima,
            'model_reduksilima' => $request->model_reduksilima,
            'text_reduksilima' => $request->text_reduksilima,
        ]);

        return redirect('tampilReduksilima');
    }

    public function editmlima($id)
    {
        $editreduksimlima = Reduksimempat::findOrFail($id);

        return view('editmlima', compact(['editreduksimlima']));
    }

    public function updateReduksilima(Request $request, $id)

    {
        $reduksimlima = Reduksimlima::findOrFail($id);

        $reduksimlima->des_msclima = $request->des_msclima;
        $reduksimlima->des_konlima =$request->des_konlima;
        $reduksimlima->model_reduksilima = $request->model_reduksilima;
        $reduksimlima->text_reduksilima = $request->text_reduksilima;
        $reduksimlima->save();

        return redirect('tampilReduksilima');

    }




    //controler m6enam


    public function tampilReduksienam()
    {
        $tampilReduksimenam = Reduksimenam::paginate(1);
        //paginate
        return view('tampil_reduksimenam', compact(['tampilReduksimenam']));
    }

    public function createmenam()
    {
   return view('form_menam');
    }


    public function tambahReduksienam(Request $request)
    {
        $tambahReduksimenam = Reduksimenam::create([
            'des_mscenam' => $request->des_mscenam,
            'des_konenam' => $request->des_konenam,
            'model_reduksienam' => $request->model_reduksienam,
            'text_reduksienam' => $request->text_reduksienam,
        ]);

        return redirect('tampilReduksienam');
    }

    public function editmenam($id)
    {
        $editreduksimenam = Reduksimenam::findOrFail($id);

        return view('editmenam', compact(['editreduksimenam']));
    }

    public function updateReduksienam(Request $request, $id)

    {
        $reduksimenam = Reduksimenam::findOrFail($id);

        $reduksimenam->des_mscenam = $request->des_mscenam;
        $reduksimenam->des_konenam =$request->des_konenam;
        $reduksimenam->model_reduksienam = $request->model_reduksienam;
        $reduksimenam->text_reduksienam = $request->text_reduksienam;
        $reduksimenam->save();

        return redirect('tampilReduksienam');

    }


     //controler False Positive


    public function tampilReduksifalsePositive()
    {
        $tampilReduksifalsePositive = ReduksifalsePositive::paginate(1);
        //paginate
        return view('tampil_reduksifalsePositive', compact(['tampilReduksifalsePositive']));
    }

    public function createfalsePositive()
    {
   return view('form_falsePositive');
    }


    public function tambahReduksifalsePositive(Request $request)
    {
        $tambahReduksifalsePositive = ReduksifalsePositive::create([
            
            'model_reduksifalsePositive' => $request->model_reduksifalsePositive,
            'text_reduksifalsePositive' => $request->text_reduksifalsePositive,
        ]);

        return redirect('tampilReduksifalsePositive');
    }

    public function editfalsePositive($id)
    {
        $editreduksifalsePositive = ReduksifalsePositive::findOrFail($id);

        return view('editfalsePositive', compact(['editreduksifalsePositive']));
    }

    public function updateReduksifalsePositive(Request $request, $id)

    {
        $reduksifalsePositive = ReduksifalsePositive::findOrFail($id);

        
        $reduksifalsePositive->model_reduksifalsePositive = $request->model_reduksifalsePositive;
        $reduksifalsePositive->text_reduksifalsePositive = $request->text_reduksifalsePositive;
        $reduksifalsePositive->save();

        return redirect('tampilReduksifalsePositive');

    }




    //Controler False Negative

     public function tampilReduksifalseNegative()
    {
        $tampilReduksifalseNegative = ReduksifalseNegative::paginate(1);
        //paginate
        return view('tampil_reduksifalseNegative', compact(['tampilReduksifalseNegative']));
    }

    public function createfalseNegative()
    {
   return view('form_falseNegative');
    }


    public function tambahReduksifalseNegative(Request $request)
    {
        $tambahReduksifalseNegative = ReduksifalseNegative::create([
            
            'model_reduksifalseNegative' => $request->model_reduksifalseNegative,
            'text_reduksifalseNegative' => $request->text_reduksifalseNegative,
        ]);

        return redirect('tampilReduksifalseNegative');
    }

    public function editfalseNegative($id)
    {
        $editreduksifalseNegative = ReduksifalseNegative::findOrFail($id);

        return view('editfalseNegative', compact(['editreduksifalseNegative']));
    }

    public function updateReduksifalseNegative(Request $request, $id)

    {
        $reduksifalseNegative = ReduksifalseNegative::findOrFail($id);

        
        $reduksifalseNegative->model_reduksifalseNegative = $request->model_reduksifalseNegative;
        $reduksifalseNegative->text_reduksifalseNegative = $request->text_reduksifalseNegative;
        $reduksifalseNegative->save();

        return redirect('tampilReduksifalseNegative');

    }









        //Controler Lack Of KnowlkLack

     public function tampilReduksilk()
    {
        $tampilReduksilk = Reduksilk::paginate(1);
        //paginate
        return view('tampil_reduksilk', compact(['tampilReduksilk']));
    }

    public function createlk()
    {
   return view('form_lk');
    }


    public function tambahReduksilk(Request $request)
    {
        $tambahReduksilk = Reduksilk::create([
            
            'model_reduksilk' => $request->model_reduksilk,
            'text_reduksilk' => $request->text_reduksilk,
        ]);

        return redirect('tampilReduksilk');
    }

    public function editlk($id)
    {
        $editreduksilk= Reduksilk::findOrFail($id);

        return view('editlk', compact(['editreduksilk']));
    }

    public function updateReduksilk(Request $request, $id)

    {
        $reduksilk= Reduksilk::findOrFail($id);

        
        $reduksilk->model_reduksilk = $request->model_reduksilk;
        $reduksilk->text_reduksilk = $request->text_reduksilk;
        $reduksilk->save();

        return redirect('tampilReduksilk');

    }



    //controller Reduksi M7

     public function tampilReduksi7()
    {
        $tampilReduksim7 = ReduksiM7::paginate(1);
        //paginate
        return view('tampil_reduksim7', compact(['tampilReduksim7']));
    }

     public function createm7()
    {
   return view('form_m7');
    }


     public function tambahReduksi7(Request $request)
    {
        $tambahreduksi = ReduksiM7::create([
            'des_msc7' => $request->des_msc7,
            'des_kon7' => $request->des_kon7,
            'model_reduksi7' => $request->model_reduksi7,
            'text_reduksi7' => $request->text_reduksi7,
           
        ]);

        return redirect('tampilReduksi7');

     }


      public function editm7($id)
    {
        $editreduksim7 = ReduksiM7::findOrFail($id);

        return view('editm7', compact('editreduksim7'));
    }

    public function updatem7(Request $request, $id)
    {
        $reduksim7 = ReduksiM7::findOrFail($id);
        
        $reduksim7->des_msc7 = $request->des_msc7;
        $reduksim7->des_kon7 =$request->des_kon7;
        $reduksim7->model_reduksi7 = $request->model_reduksi7;
        $reduksim7->text_reduksi7 = $request->text_reduksi7;
        $reduksim7->save();
       
        return redirect('/tampilReduksi7')->with('success', 'Student updated successfully');
    }





    //controller Reduksi M8

     public function tampilReduksi8()
    {
        $tampilReduksim8 = ReduksiM8::paginate(1);
        //paginate
        return view('tampil_reduksim8', compact(['tampilReduksim8']));
    }

     public function createm8()
    {
   return view('form_m8');
    }


     public function tambahReduksi8(Request $request)
    {
        $tambahreduksi = ReduksiM8::create([
            'des_msc8' => $request->des_msc8,
            'des_kon8' => $request->des_kon8,
            'model_reduksi8' => $request->model_reduksi8,
            'text_reduksi8' => $request->text_reduksi8,
           
        ]);

        return redirect('tampilReduksi8');

     }


      public function editm8($id)
    {
        $editreduksim8 = ReduksiM8::findOrFail($id);

        return view('editm8', compact('editreduksim8'));
    }

    public function updatem8(Request $request, $id)
    {
        $reduksim8 = ReduksiM8::findOrFail($id);
        
        $reduksim8->des_msc8 = $request->des_msc8;
        $reduksim8->des_kon8 =$request->des_kon8;
        $reduksim8->model_reduksi8 = $request->model_reduksi8;
        $reduksim8->text_reduksi8 = $request->text_reduksi8;
        $reduksim8->save();
       
        return redirect('/tampilReduksi8')->with('success', 'Student updated successfully');
    }




 //controller Reduksi M9

     public function tampilReduksi9()
    {
        $tampilReduksim9 = ReduksiM9::paginate(1);
        //paginate
        return view('tampil_reduksim9', compact(['tampilReduksim9']));
    }

     public function createm9()
    {
   return view('form_m9');
    }


     public function tambahReduksi9(Request $request)
    {
        $tambahreduksi = ReduksiM9::create([
            'des_msc9' => $request->des_msc9,
            'des_kon9' => $request->des_kon9,
            'model_reduksi9' => $request->model_reduksi9,
            'text_reduksi9' => $request->text_reduksi9,
           
        ]);

        return redirect('tampilReduksi9');

     }


      public function editm9($id)
    {
        $editreduksim9 = ReduksiM9::findOrFail($id);

        return view('editm9', compact('editreduksim9'));
    }

    public function updatem9(Request $request, $id)
    {
        $reduksim9 = ReduksiM9::findOrFail($id);
        
        $reduksim9->des_msc9 = $request->des_msc9;
        $reduksim9->des_kon9 =$request->des_kon9;
        $reduksim9->model_reduksi9 = $request->model_reduksi9;
        $reduksim9->text_reduksi9 = $request->text_reduksi9;
        $reduksim9->save();
       
        return redirect('/tampilReduksi9')->with('success', 'Student updated successfully');
    }



//controller Reduksi M10

     public function tampilReduksi10()
    {
        $tampilReduksim10 = ReduksiM10::paginate(1);
        //paginate
        return view('tampil_reduksim10', compact(['tampilReduksim10']));
    }

     public function createm10()
    {
   return view('form_m10');
    }


     public function tambahReduksi10(Request $request)
    {
        $tambahreduksi = ReduksiM10::create([
            'des_msc10' => $request->des_msc10,
            'des_kon10' => $request->des_kon10,
            'model_reduksi10' => $request->model_reduksi10,
            'text_reduksi10' => $request->text_reduksi10,
           
        ]);

        return redirect('tampilReduksi10');

     }


      public function editm10($id)
    {
        $editreduksim10 = ReduksiM10::findOrFail($id);

        return view('editm10', compact('editreduksim10'));
    }

    public function updatem10(Request $request, $id)
    {
        $reduksim10 = ReduksiM10::findOrFail($id);
        
        $reduksim10->des_msc10 = $request->des_msc10;
        $reduksim10->des_kon10 =$request->des_kon10;
        $reduksim10->model_reduksi10 = $request->model_reduksi10;
        $reduksim10->text_reduksi10 = $request->text_reduksi10;
        $reduksim10->save();
       
        return redirect('/tampilReduksi10')->with('success', 'Student updated successfully');
    }







    //controller Reduksi M11

     public function tampilReduksi11()
    {
        $tampilReduksim11 = ReduksiM11::paginate(1);
        //paginate
        return view('tampil_reduksim11', compact(['tampilReduksim11']));
    }

     public function createm11()
    {
   return view('form_m11');
    }


     public function tambahReduksi11(Request $request)
    {
        $tambahreduksi = ReduksiM11::create([
            'des_msc11' => $request->des_msc11,
            'des_kon11' => $request->des_kon11,
            'model_reduksi11' => $request->model_reduksi11,
            'text_reduksi11' => $request->text_reduksi11,
           
        ]);

        return redirect('tampilReduksi11');

     }


      public function editm11($id)
    {
        $editreduksim11 = ReduksiM11::findOrFail($id);

        return view('editm11', compact('editreduksim11'));
    }

    public function updatem11(Request $request, $id)
    {
        $reduksim11 = ReduksiM11::findOrFail($id);
        
        $reduksim11->des_msc11 = $request->des_msc11;
        $reduksim11->des_kon11 =$request->des_kon11;
        $reduksim11->model_reduksi11 = $request->model_reduksi11;
        $reduksim11->text_reduksi11 = $request->text_reduksi11;
        $reduksim11->save();
       
        return redirect('/tampilReduksi11')->with('success', 'Student updated successfully');
    }






    //controller Reduksi M12

     public function tampilReduksi12()
    {
        $tampilReduksim12 = ReduksiM12::paginate(1);
        //paginate
        return view('tampil_reduksim12', compact(['tampilReduksim12']));
    }

     public function createm12()
    {
   return view('form_m12');
    }


     public function tambahReduksi12(Request $request)
    {
        $tambahreduksi = ReduksiM12::create([
            'des_msc12' => $request->des_msc12,
            'des_kon12' => $request->des_kon12,
            'model_reduksi12' => $request->model_reduksi12,
            'text_reduksi12' => $request->text_reduksi12,
           
        ]);

        return redirect('tampilReduksi12');

     }


      public function editm12($id)
    {
        $editreduksim12 = ReduksiM12::findOrFail($id);

        return view('editm12', compact('editreduksim12'));
    }

    public function updatem12(Request $request, $id)
    {
        $reduksim12 = ReduksiM12::findOrFail($id);
        
        $reduksim12->des_msc12 = $request->des_msc12;
        $reduksim12->des_kon12 =$request->des_kon12;
        $reduksim12->model_reduksi12 = $request->model_reduksi12;
        $reduksim12->text_reduksi12 = $request->text_reduksi12;
        $reduksim12->save();
       
        return redirect('/tampilReduksi12')->with('success', 'Student updated successfully');
    }







    //controller Reduksi M13

     public function tampilReduksi13()
    {
        $tampilReduksim13 = ReduksiM13::paginate(1);
        //paginate
        return view('tampil_reduksim13', compact(['tampilReduksim13']));
    }

     public function createm13()
    {
   return view('form_m13');
    }


     public function tambahReduksi13(Request $request)
    {
        $tambahreduksi = ReduksiM13::create([
            'des_msc13' => $request->des_msc13,
            'des_kon13' => $request->des_kon13,
            'model_reduksi13' => $request->model_reduksi13,
            'text_reduksi13' => $request->text_reduksi13,
           
        ]);

        return redirect('tampilReduksi13');

     }


      public function editm13($id)
    {
        $editreduksim13 = ReduksiM13::findOrFail($id);

        return view('editm13', compact('editreduksim13'));
    }

    public function updatem13(Request $request, $id)
    {
        $reduksim13 = ReduksiM13::findOrFail($id);
        
        $reduksim13->des_msc13 = $request->des_msc13;
        $reduksim13->des_kon13 =$request->des_kon13;
        $reduksim13->model_reduksi13 = $request->model_reduksi13;
        $reduksim13->text_reduksi13 = $request->text_reduksi13;
        $reduksim13->save();
       
        return redirect('/tampilReduksi13')->with('success', 'Student updated successfully');
    }




    //controller Reduksi M14

     public function tampilReduksi14()
    {
        $tampilReduksim14 = ReduksiM14::paginate(1);
        //paginate
        return view('tampil_reduksim14', compact(['tampilReduksim14']));
    }

     public function createm14()
    {
   return view('form_m14');
    }


     public function tambahReduksi14(Request $request)
    {
        $tambahreduksi = ReduksiM14::create([
            'des_msc14' => $request->des_msc14,
            'des_kon14' => $request->des_kon14,
            'model_reduksi14' => $request->model_reduksi14,
            'text_reduksi14' => $request->text_reduksi14,
           
        ]);

        return redirect('tampilReduksi14');

     }


      public function editm14($id)
    {
        $editreduksim14 = ReduksiM14::findOrFail($id);

        return view('editm14', compact('editreduksim14'));
    }

    public function updatem14(Request $request, $id)
    {
        $reduksim14 = ReduksiM14::findOrFail($id);
        
        $reduksim14->des_msc14 = $request->des_msc14;
        $reduksim14->des_kon14 =$request->des_kon14;
        $reduksim14->model_reduksi14 = $request->model_reduksi14;
        $reduksim14->text_reduksi14 = $request->text_reduksi14;
        $reduksim14->save();
       
        return redirect('/tampilReduksi14')->with('success', 'Student updated successfully');
    }



        //controller Reduksi M15

     public function tampilReduksi15()
    {
        $tampilReduksim15 = ReduksiM15::paginate(1);
        //paginate
        return view('tampil_reduksim15', compact(['tampilReduksim15']));
    }

     public function createm15()
    {
   return view('form_m15');
    }


     public function tambahReduksi15(Request $request)
    {
        $tambahreduksi = ReduksiM15::create([
            'des_msc15' => $request->des_msc15,
            'des_kon15' => $request->des_kon15,
            'model_reduksi15' => $request->model_reduksi15,
            'text_reduksi15' => $request->text_reduksi15,
           
        ]);

        return redirect('tampilReduksi15');

     }


      public function editm15($id)
    {
        $editreduksim15 = ReduksiM15::findOrFail($id);

        return view('editm15', compact('editreduksim15'));
    }

    public function updatem15(Request $request, $id)
    {
        $reduksim15 = ReduksiM15::findOrFail($id);
        
        $reduksim15->des_msc15 = $request->des_msc15;
        $reduksim15->des_kon15 =$request->des_kon15;
        $reduksim15->model_reduksi15 = $request->model_reduksi15;
        $reduksim15->text_reduksi15 = $request->text_reduksi15;
        $reduksim15->save();
       
        return redirect('/tampilReduksi15')->with('success', 'Student updated successfully');
    }






     //controller Reduksi M16

     public function tampilReduksi16()
    {
        $tampilReduksim16 = ReduksiM16::paginate(1);
        //paginate
        return view('tampil_reduksim16', compact(['tampilReduksim16']));
    }

     public function createm16()
    {
   return view('form_m16');
    }


     public function tambahReduksi16(Request $request)
    {
        $tambahreduksi = ReduksiM16::create([
            'des_msc16' => $request->des_msc16,
            'des_kon16' => $request->des_kon16,
            'model_reduksi16' => $request->model_reduksi16,
            'text_reduksi16' => $request->text_reduksi16,
           
        ]);

        return redirect('tampilReduksi16');

     }


      public function editm16($id)
    {
        $editreduksim16 = ReduksiM16::findOrFail($id);

        return view('editm16', compact('editreduksim16'));
    }

    public function updatem16(Request $request, $id)
    {
        $reduksim16 = ReduksiM16::findOrFail($id);
        
        $reduksim16->des_msc16 = $request->des_msc16;
        $reduksim16->des_kon16 =$request->des_kon16;
        $reduksim16->model_reduksi16 = $request->model_reduksi16;
        $reduksim16->text_reduksi16 = $request->text_reduksi16;
        $reduksim16->save();
       
        return redirect('/tampilReduksi16')->with('success', 'Student updated successfully');
    }









         //controller Reduksi M17

     public function tampilReduksi17()
    {
        $tampilReduksim17 = ReduksiM17::paginate(1);
        //paginate
        return view('tampil_reduksim17', compact(['tampilReduksim17']));
    }

     public function createm17()
    {
   return view('form_m17');
    }


     public function tambahReduksi17(Request $request)
    {
        $tambahreduksi = ReduksiM17::create([
            'des_msc17' => $request->des_msc17,
            'des_kon17' => $request->des_kon17,
            'model_reduksi17' => $request->model_reduksi17,
            'text_reduksi17' => $request->text_reduksi17,
           
        ]);

        return redirect('tampilReduksi17');

     }


      public function editm17($id)
    {
        $editreduksim17 = ReduksiM17::findOrFail($id);

        return view('editm17', compact('editreduksim17'));
    }

    public function updatem17(Request $request, $id)
    {
        $reduksim17 = ReduksiM17::findOrFail($id);
        
        $reduksim17->des_msc17 = $request->des_msc17;
        $reduksim17->des_kon17 =$request->des_kon17;
        $reduksim17->model_reduksi17 = $request->model_reduksi17;
        $reduksim17->text_reduksi17 = $request->text_reduksi17;
        $reduksim17->save();
       
        return redirect('/tampilReduksi17')->with('success', 'Student updated successfully');
    }








         //controller Reduksi M18

     public function tampilReduksi18()
    {
        $tampilReduksim18 = ReduksiM18::paginate(1);
        //paginate
        return view('tampil_reduksim18', compact(['tampilReduksim18']));
    }

     public function createm18()
    {
   return view('form_m18');
    }


     public function tambahReduksi18(Request $request)
    {
        $tambahreduksi = ReduksiM18::create([
            'des_msc18' => $request->des_msc18,
            'des_kon18' => $request->des_kon18,
            'model_reduksi18' => $request->model_reduksi18,
            'text_reduksi18' => $request->text_reduksi18,
           
        ]);

        return redirect('tampilReduksi18');

     }


      public function editm18($id)
    {
        $editreduksim18 = ReduksiM18::findOrFail($id);

        return view('editm18', compact('editreduksim18'));
    }

    public function updatem18(Request $request, $id)
    {
        $reduksim18= ReduksiM18::findOrFail($id);
        
        $reduksim18->des_msc18 = $request->des_msc18;
        $reduksim18->des_kon18 =$request->des_kon18;
        $reduksim18->model_reduksi18 = $request->model_reduksi18;
        $reduksim18->text_reduksi18 = $request->text_reduksi18;
        $reduksim18->save();
       
        return redirect('/tampilReduksi18')->with('success', 'Student updated successfully');
    }









           //controller Reduksi M19

     public function tampilReduksi19()
    {
        $tampilReduksim19 = ReduksiM19::paginate(1);
        //paginate
        return view('tampil_reduksim19', compact(['tampilReduksim19']));
    }

     public function createm19()
    {
   return view('form_m19');
    }


     public function tambahReduksi19(Request $request)
    {
        $tambahreduksi = ReduksiM19::create([
            'des_msc19' => $request->des_msc19,
            'des_kon19' => $request->des_kon19,
            'model_reduksi19' => $request->model_reduksi19,
            'text_reduksi19' => $request->text_reduksi19,
           
        ]);

        return redirect('tampilReduksi19');

     }


      public function editm19($id)
    {
        $editreduksim19 = ReduksiM19::findOrFail($id);

        return view('editm19', compact('editreduksim19'));
    }

    public function updatem19(Request $request, $id)
    {
        $reduksim19= ReduksiM19::findOrFail($id);
        
        $reduksim19->des_msc19 = $request->des_msc19;
        $reduksim19->des_kon19 =$request->des_kon19;
        $reduksim19->model_reduksi19 = $request->model_reduksi19;
        $reduksim19->text_reduksi19 = $request->text_reduksi19;
        $reduksim19->save();
       
        return redirect('/tampilReduksi19')->with('success', 'Student updated successfully');
    }





           //controller Reduksi M19

     public function tampilReduksi20()
    {
        $tampilReduksim20 = ReduksiM20::paginate(1);
        //paginate
        return view('tampil_reduksim20', compact(['tampilReduksim20']));
    }

     public function createm20()
    {
   return view('form_m20');
    }


     public function tambahReduksi20(Request $request)
    {
        $tambahreduksi = ReduksiM20::create([
            'des_msc20' => $request->des_msc20,
            'des_kon20' => $request->des_kon20,
            'model_reduksi20' => $request->model_reduksi20,
            'text_reduksi20' => $request->text_reduksi20,
           
        ]);

        return redirect('tampilReduksi20');

     }


      public function editm20($id)
    {
        $editreduksim20 = ReduksiM20::findOrFail($id);

        return view('editm20', compact('editreduksim20'));
    }

    public function updatem20(Request $request, $id)
    {
        $reduksim20= ReduksiM20::findOrFail($id);
        
        $reduksim20->des_msc20 = $request->des_msc20;
        $reduksim20->des_kon20 =$request->des_kon20;
        $reduksim20->model_reduksi20 = $request->model_reduksi20;
        $reduksim20->text_reduksi20 = $request->text_reduksi20;
        $reduksim20->save();
       
        return redirect('/tampilReduksi20')->with('success', 'Student updated successfully');
    }




}
