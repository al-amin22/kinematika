<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PhyDiags | Education</title>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>PhyDiags | Education</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('Front_Home/assets/img/favicon.ico')}}">
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
   
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('Front_Home/assets/img/favicon.ico')}}">

    <!-- CSS here -->
    <link rel="stylesheet" href="{{asset('Front_Home/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('Front_Home/assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('Front_Home/assets/css/slicknav.css')}}">
    <link rel="stylesheet" href="{{asset('Front_Home/assets/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('Front_Home/assets/css/progressbar_barfiller.css')}}">
    <link rel="stylesheet" href="{{asset('Front_Home/assets/css/gijgo.css')}}">
    <link rel="stylesheet" href="{{asset('Front_Home/assets/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('Front_Home/assets/css/animated-headline.css')}}">
    <link rel="stylesheet" href="{{asset('Front_Home/assets/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('Front_Home/assets/css/fontawesome-all.min.css')}}">
    <link rel="stylesheet" href="{{asset('Front_Home/assets/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('Front_Home/assets/css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('Front_Home/assets/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('Front_Home/assets/css/style.css')}}">
     

    <!-- CSS here -->
    <link rel="stylesheet" href="{{asset('Front_Home/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('Front_Home/assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('Front_Home/assets/css/slicknav.css')}}">
    <link rel="stylesheet" href="{{asset('Front_Home/assets/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('Front_Home/assets/css/progressbar_barfiller.css')}}">
    <link rel="stylesheet" href="{{asset('Front_Home/assets/css/gijgo.css')}}">
    <link rel="stylesheet" href="{{asset('Front_Home/assets/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('Front_Home/assets/css/animated-headline.css')}}">
    <link rel="stylesheet" href="{{asset('Front_Home/assets/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('Front_Home/assets/css/fontawesome-all.min.css')}}">
    <link rel="stylesheet" href="{{asset('Front_Home/assets/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('Front_Home/assets/css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('Front_Home/assets/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('Front_Home/assets/css/style.css')}}">
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;1,300;1,400;1,500&display=swap');

:root{
  --green:white;
  --orange:orange;
}

*{
  font-family: 'Roboto', sans-serif;
  text-transform: capitalize;
  text-decoration: none;
  outline: none;
  margin: 0; padding: 0;
  box-sizing: border-box;
}

*::selection{
  background:orange;
  color:orange;
}

html{
  font-size: 62.5%;
  overflow-x: hidden;
}

.heading{
  font-size: 4rem;
  color:var(--orange);
  text-align: center;
  padding:0 1rem;
  padding-top: 6rem;
  letter-spacing: .2rem;
  font-weight: 500;
}

.title{
  padding:0 1rem;
  font-size: 2rem;
  text-align: center;
  font-weight: 400;
  color:#aaa;
}

header{
  width:96%;
  background:#fff;
  position: fixed;
  top:2rem; left:50%;
  transform: translateX(-50%);
  border-radius: 5rem;
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding:1rem 2rem;
  z-index: 1000;
  transition: .2s;
}

.header-active{
  top:0;
  width: 100%;
  border-radius: 0;
  box-shadow: 0 .1rem .3rem rgba(0,0,0,.3);
}

header .navbar ul{
  display: flex;
  align-items: center;
  justify-content: space-between;
  list-style: none;
}

header .navbar ul li{
  margin:0 1rem;
}

header .navbar ul li a{
  font-size: 2rem;
  color:var(--pink);
  transition: .2s;
}

header .navbar ul li .active,
header .navbar ul li a:hover{
  color:var(--violet);
}

header .logo{
  font-size: 2.5rem;
  color: var(--violet);
  text-transform: uppercase;
}

header .logo i{
  color:var(--pink);
  padding:0 .2rem;
}

header .fa-bars{
  font-size: 3rem;
  color:var(--pink);
  cursor: pointer;
  display: none;
  transition: .2s;
}

.home{
  min-height: 100vh;
  background:linear-gradient(rgba(198, 59, 250,.8),rgba(198, 59, 250,.8)), url(../images/bg.jpg) no-repeat;
  background-size: cover;
  background-position: center;
  background-attachment: fixed;
  z-index: 0;
  overflow:hidden;
  position: relative;
}

.home .content{
  display: flex;
  align-items: center;
  justify-content: center;
  flex-flow: column;
  padding-top: 14rem;
  padding-bottom: 8rem;
  text-align: center;
}

.home .content h1{
  font-size: 5rem;
  color: #fff;
  padding:0 1rem;
  text-shadow: 0 .3rem .5rem rgba(0,0,0,.3);
  text-transform: uppercase;
}

.home .content p{
  font-size: 2rem;
  color:#eee;
  padding:1rem 25rem;
}

.home .content button{
  height:4rem;
  width:20rem;
  border-radius: 5rem;
  background:var(--orange);
  color:#fff;
  font-size: 2rem;
  cursor: pointer;
  transition: .2s;
  border:none;
  box-shadow: 0 .3rem 1rem rgba(0,0,0,.3);
}

.home .content button:hover{
  letter-spacing: .2rem;
}

.home .box-container{
  display: flex;
  justify-content: center;
  flex-wrap: wrap;
}

.home .box-container .box{
  height:20rem;
  width:25rem;
  background:#fff;
  text-align: center;
  border-radius: 1rem;
  box-shadow: 0 .3rem .5rem rgba(0,0,0,.5);
  margin: 2rem;
  cursor: pointer;
}

.home .box-container .box i{
  height:6rem;
  width:6rem;
  line-height: 6rem;
  text-align: center;
  border-radius: 50%;
  color:#fff;
  background:var(--violet);
  font-size: 3rem;
  margin:2rem 0;
  transition: .2s;
}

.home .box-container .box h3{
  font-size: 2rem;
  color:var(--pink);
  transition: .2s;
}

.home .box-container .box p{
  font-size: 1.3rem;
  padding:.7rem 2rem;
  color:#666;
}

.home .box-container .box:hover i{
  background:var(--pink);
}

.home .box-container .box:hover h3{
  color:var(--violet);
}

.home::before{
  content: '';
  position: absolute;
  bottom:-25rem; left:50%;
  transform: translateX(-50%);
  border-top: 70vh solid #fff;
  width:120%;
  border-radius: 50%;
  z-index: -1;
}

.about .row{
  display: flex;
  justify-content: center;
  align-items: center;
}

.about .row .image img{
  height:70vh;
  width:50vw;
}

.about .row .content{
  padding-left: 5rem;
}

.about .row .content h3{
  font-size: 3rem;
  color:var(--pink);
}

.about .row .content p{
  font-size: 1.6rem;
  color:#999;
  padding:1rem 0;
}

.about .row .content button{
  height:3.5rem;
  width:17rem;
  background:var(--violet);
  color:#fff;
  border:none;
  border-radius: 5rem;
  box-shadow: 0 .3rem 1rem rgba(0,0,0,.3);
  cursor: pointer;
  font-size: 2rem;
  transition: .2s;
}

.about .row .content button:hover{
  letter-spacing: .2rem;
  opacity: .8;
}

.teacher{
  background:#f9f9f9;
}

.teacher .card-container{
  display: flex;
  align-items: center;
  justify-content: center;
  flex-wrap: wrap;
  padding:2rem 0;
}

.teacher .card-container .card{
  padding:2rem;
  margin: 2rem;
  background:#fff;
  text-align: center;
  width:28rem;
  box-shadow: 0 .3rem .5rem rgba(0,0,0,.3);
}

.teacher .card-container .card img{
  height:30rem;
  width:100%;
  object-fit: cover;
  filter: grayscale();
  transition: .2s;
}

.teacher .card-container .card:hover img{
  filter: grayscale(0);
}

.teacher .card-container .card h3{
  color:var(--pink);
  font-size: 2rem;
  padding:.5rem 0;
}

.teacher .card-container .card p{
  font-size: 1.7rem;
  color:#666;
}

.teacher .card-container .card .icons a{
  font-size: 1.9rem;
  padding:1.5rem .5rem;
  color:var(--orange);
}

.teacher .card-container .card .icons a:hover{
  color:var(--violet);
}

.course .box-container{
  width:85%;
  display: flex;
  justify-content: center;
  margin:0 auto;
  padding-top: 4rem;
  flex-wrap: wrap;
}

.course .box-container .box{
  height:18rem;
  width:25rem;
  margin:3.5rem 2rem;
  text-align: center;
  border-radius: 1rem;
  box-shadow: .3rem .3rem 0 .1rem var(--violet),
              .5rem .5rem .5rem rgba(0,0,0,.3);
}

.course .box-container .box i{
  height:10rem;
  width:10rem;
  line-height: 8rem;
  text-align: center;
  color:#fff;
  border-radius: 50%;
  background:var(--pink);
  margin-top: -4rem;
  border:1rem solid #fff;
  border-left:1rem solid var(--orange);
  border-right:1rem solid var(--orange);
  box-shadow: 0 0 0 1rem #fff inset;
  font-size: 3.5rem;
}

.course .box-container .box h3{
  font-size: 2rem;
  color:var(--violet);
}

.course .box-container .box p{
  font-size: 1.5rem;
  color:#999;
  padding:1rem 0;
}

.review{
  background:#f9f9f9;
}

.review .box-container{
  display: flex;
  justify-content: center;
  padding-top: 4rem;
  flex-wrap: wrap;
}

.review .box-container .box{
  width:28rem;
  padding-bottom: 1rem;
  text-align: center;
  box-shadow: 0 .3rem .5rem rgba(0,0,0,.3);
  background:#fff;
  margin:4rem 2rem;
}

.review .box-container .box img{
  height:8.5rem;
  width:8.5rem;
  object-fit: cover;
  border-radius: 50%;
  margin-top: -4rem;
  border:.6rem solid var(--pink);
  border-left:.6rem solid var(--orange);
  border-bottom:.6rem solid var(--orange);
}

.review .box-container .box h3{
  font-size: 2rem;
  color:var(--pink);
  padding:0 .5rem;
}

.review .box-container .box p{
  font-size: 1.4rem;
  color:#999;
  padding:0 1.3rem;
}

.review .box-container .box .stars i{
  font-size: 1.6rem;
  color:var(--violet);
  padding:1.3rem .1rem;
}

.contact{
  background:#333;
}

.contact .row{
  display: flex;
  align-items: center;
  justify-content: center;
  padding:5rem 0;
}

.contact .row .image img{
  width: 50vw;
  height:70vh;
}

.contact .row .form-container{
  width:50%;
  padding-right: 6rem;
}

.contact .row .form-container input, textarea{
  height:4rem;
  width:100%;
  background:#fff;
  border:none;
  border-radius: 5rem;
  padding:0 1rem;
  margin:1rem 0;
  color:var(--pink);
  font-size: 1.7rem;
  transition: .2s linear;
}

.contact .row .form-container input:focus, textarea:focus{
  border:.2rem solid var(--pink);
}

.contact .row .form-container textarea{
  height:20rem;
  border-radius: 1rem;
  padding:1rem; 
  resize: none;
}

.contact .row .form-container input[type="submit"]{
  width:17rem;
  background:var(--pink);
  color:#fff;
  cursor: pointer;
  font-size: 2rem;
  transition: .2s;
}

.contact .row .form-container input[type="submit"]:hover{
  background:none;
  color:var(--pink);
  border:.2rem solid var(--pink);
}

.footer{
  text-align: center;
}

.footer .icons{
  padding:3rem 0;
}

.footer .icons a{
  height:4.5rem;
  width: 4.5rem;
  line-height: 4.2rem;
  text-align: center;
  border-radius: 50%;
  color:var(--violet);
  border:.2rem solid var(--orange);
  font-size: 2rem;
  margin:0 .1rem;
  transition: .2s linear;
}

.footer .icons a:hover{
  color:#fff;
  background:var(--orange);
  border-color: var(--orange);
}


.footer .credit{
  font-size: 2rem;
  border-top: .1rem solid #999;
  margin:0 auto;
  margin-bottom: 2rem;
  color:#666;
  width:90%;
  padding:1rem 0;
}

.footer .credit span{
  color:var(--orange);
}




header .fa-times{
  transform: rotate(180deg);
  color:var(--violet);
}

/* media queries  */

@media (max-width:768px){

  html{
    font-size: 55%;
  }

  header .fa-bars{
    display: block;
  }

  header .navbar{
    position: fixed;
    top:-100rem; left:0;
    width:100%;
    background:#fff;
    border-radius: 1rem;
    opacity: 0;
    transition: .2s linear;
  }

  header .navbar ul{
    flex-flow: column;
    padding:2rem 0;
  }

  header .navbar ul li{
    margin:1rem 0;
    width:100%;
    text-align: center;
  }

  header .navbar ul li a{
    font-size: 3rem;
    display: block;
  }

  header .nav-toggle{
    top:5.5rem;
    opacity: 1;
  }

  .home .content p{
    padding:1.5rem 2rem;
  }

  .home::before{
    display: none;
  }

  .about .row{
    flex-flow: column-reverse;
  }

  .about .row .image img{
    height:60vh;
    width:90vw;
  }

  .about .row .content{
    padding:0 2.5rem;
  }

  .course .box-container{
    width:100%;
  }

  .contact .row{
    flex-flow: column;
  }

  .contact .row .image img{
    height:50vh;
    width:90vw;
  }

  .contact .row .form-container{
    width:90%;
    padding:0;
  }
}
</style>
<body>


<!-- header section starts  -->

<header>

<a href="/"  style="color: black;"> <i class="fas fa-university"></i> UNIVERSITAS JAMBI</a>

<nav class="navbar">
    <ul>
        <ul id="navigation">  
                                            @if (Route::has('login'))
                                            @auth
                                                <li class="" ><a href="#" style="color: black;">Beranda</a></li>
                                                <li><a href="#panduan" style="color: black;">Panduan</a></li>
                                                <li><a href="#tentang">Tentang</a></li>
                                             
                                                <li><a href="https://api.whatsapp.com/send?phone=6282279030711" style="color: black;">Kontak</a></li>
                                                <li class="button-header"><a href="{{ url('/home') }}" class="btn btn3" style="color: black;">Dashboard</a></li>
                                                <li class="button-header margin-left "><a href="{{ route('logout') }}" class="btn" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Keluar</a></li>
                                                      <form id="logout-form" action="{{ route('logout') }}" method="POST" 
                                                      style="display: none;">
                                                    @csrf
                                                    </form>
                                            @else
                                                <li class="active" ><a href="#" style="color: black;">Beranda</a></li>
                                                <li><a href="#panduan" style="color: black;">Panduan</a></li>
                                                <li><a href="#tentang" style="color: black;">Tentang</a></li>
                                                <li><a href="https://api.whatsapp.com/send?phone=6282291381986" style="color: black;">Kontak</a></li>
                                                <li class="button-header"><a href="{{ route('login') }}" class="btn btn3" style="color: black;">Masuk</a></li>
                                            @if (Route::has('register'))
                                                <li class="button-header margin-left "><a href="{{ route('register') }}" class="btn" style="background: orange; color: black;">Daftar</a></li>
                                            @endif
                                            @endauth
                                            @endif                                                                                        
                                               
                                            </ul>
    </ul>
</nav>



</header>

<!-- header section ends -->


<!-- home section starts  -->

<section class="home" style="background: orange;" id="home">

<div class="content">
   <h1>E-Diagnostic</h1>
     <h1> Four Tier Test</h1>
    <p data-animation="fadeInLeft" data-delay="0.4s">
    Aplikasi berbasis web yang bertujuan untuk mengembangkan tes diagnostik dalam bentuk four-tier yang berguna dalam mengidentifikasi profil konsepsi Mahasiswa pada Materi Kinmeatika Gerak Lurus.
    </p>
    <a href="{{ route('login') }}"><button style="background: white; color: black;">Masuk</button></a>
</div>

<div class="box-container">

    <div class="box">
       <i class="far fa-file-alt" style="color: black;"></i>
        <h3 style="color: orange;">10 Soal Four-Tier Test</h3>
        <p>Soal berisikan Ppemahaman konsep pada Materi Fluida Statis</p>
    </div>

    <div class="box" >
        <i class="fas fa-user-clock" style="color: black;"></i>
        <h3 style="color: orange;">Efisien Waktu</h3>
        <p>Mempermuda dalam melakukan proses pembelajaran</p>
    </div>

    <div class="box">
       <i class="fas fa-chalkboard-teacher" style="color: black;"></i>
        <h3 style="color: orange;">Fleksibel</h3>
        <p>Dapat diakses kapan saja dan dimana saja</p>
    </div>

</div>

</section>

<!-- home section ends -->

<!-- about section starts  -->


<section class="about" id="about">

<h1 class="heading">Tentang</h1>
<h3 class="title">Tentang Four-Tier Test</h3>

<div class="row">

    <div class="content">
        <h3>Tentang Four-Tier Test</h3>
        <p>Four Tier Test  merupakan tes diagnostik dengan empat tingkat pilihan. Four Tier Test ini merupakan pengembangan dari tes diagnostik pilihan ganda tiga tingkat, yaitu dengan menambah tingkat keyakinan pada masing-masing jawaban dan 
                                alasan. Penambahan tingkat keyakinan pada masing-masing jawaban dan alasan dapat mengukur perbedaan tingkat pengetahuan siswa sehingga akan membantu dalam mendeteksi tingkat miskonsepsi siswa. </p>
        <a href="#"><button style="color: black;">Selengkapnya</button></a>
    </div>

    <div class="image">
        <img src="{{asset('Front_Home/assets/img/tentang.png')}}" alt="">
    </div>

</div>

</section>




<section class="about-area1 fix pt-10" id="tentang">
            <div class="support-wrapper align-items-center">
                <div class="left-content1">
                    <div class="about-icon">
                        <!-- <img src="{{asset('Front_Home/assets/img/icon/about.svg')}}" alt=""> -->
                    </div>
                    <!-- section tittle -->
                    <div class="section-tittle section-tittle2 mb-55" >
                        <div class="front-text">
                            <h2 class="">Tentang Four-Tier Test</h2>
                            <p>Four Tier Test  merupakan tes diagnostik dengan empat tingkat pilihan. Four Tier Test ini merupakan pengembangan dari tes diagnostik pilihan ganda tiga tingkat, yaitu dengan menambah tingkat keyakinan pada masing-masing jawaban dan 
                                alasan. Penambahan tingkat keyakinan pada masing-masing jawaban dan alasan dapat mengukur perbedaan tingkat pengetahuan siswa sehingga akan membantu dalam mendeteksi tingkat miskonsepsi siswa. 
                            </p>
                        </div>
                    </div>
                    <div class="single-features">
                        <div class="features-icon">
                            <img src="{{asset('Front_Home/assets/img/icon/right-icon.svg')}}" alt="">
                        </div>
                        <div class="features-caption">
                            <p>Tingkat pertama adalah soal pilihan ganda dengan 4 pengecoh dan satu kunci jawaban 
                                yang harus dipilih siswa.
                            </p>
                        </div>
                    </div>
                    <div class="single-features">
                        <div class="features-icon">
                            <img src="{{asset('Front_Home/assets/img/icon/right-icon.svg')}}" alt="">
                        </div>
                        <div class="features-caption">
                            <p>Tingkat ke dua merupakan tingkat keyakinan siswa dalam memilih jawaban</p>
                        </div>
                    </div>

                    <div class="single-features">
                        <div class="features-icon">
                            <img src="{{asset('Front_Home/assets/img/icon/right-icon.svg')}}" alt="">
                        </div>
                        <div class="features-caption">
                            <p>Tingkat ke tiga merupakan alasan siswa menjawab pertanyaan.</p>
                        </div>
                    </div>
                    <div class="single-features">
                        <div class="features-icon">
                            <img src="{{asset('Front_Home/assets/img/icon/right-icon.svg')}}" alt="">
                        </div>
                        <div class="features-caption">
                            <p>Tingkat ke empat merupakan tingkat keyakinan siswa dalam memilih alasan.</p>
                        </div>
                    </div>
                </div>
                <div class="right-content1">
                    <!-- img -->
                    <div class="right-img">
                        <img src="{{asset('Front_Home/assets/img/gallery/about.png')}}" alt="">

                        <div class="video-icon" >
                            <!-- <a class="popup-video btn-icon" href="https://www.youtube.com/watch?v=up68UAfH0d0"><i class="fas fa-play"></i></a> -->
                            <img src="{{asset('Front_Home/assets/img/icon/tentang.jpg')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About Area End -->
       
        <!--? About Area-3 Start -->
        <section class="about-area3 fix">
            <div class="support-wrapper align-items-center">
                <div class="right-content3">
                    <!-- img -->
                    <div class="right-img">
                        <img src="{{asset('Front_Home/assets/img/icon/fungsi.jpeg')}}" width="15px" alt="">
                    </div>
                </div>
                <div class="left-content3">
                    <!-- section tittle -->
                    <div class="section-tittle section-tittle2 mb-20">
                        <div class="front-text">
                            <h2 class="">Fungsi PhyDiags</h2>
                        </div>
                    </div>
                    <div class="single-features">
                        <div class="features-icon">
                            <img src="{{asset('Front_Home/assets/img/icon/right-icon.svg')}}" alt="">
                        </div>
                        <div class="features-caption">
                            <p>Mengidentifikasi masalah atau kesulitan yang dialami siswa 
                                dengan cepat karna soal four-tier test dirancang dalam website 
                                    yang dapat menganalisis jawaban siswa tersebut dengan cepat</p>
                        </div>
                    </div>
                    <div class="single-features">
                        <div class="features-icon">
                            <img src="{{asset('Front_Home/assets/img/icon/right-icon.svg')}}" alt="">
                        </div>
                        <div class="features-caption">
                            <p>Siswa dapat mengetahui dimana titik kelemahan pemahaman 
                                konsep pada suatu materi setelah menyelesaikan soal tersebut
                            </p>
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>


        <!-- Courses area start -->
        <div id="panduan" class="courses-area section-padding40 fix">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-8">
                        <div class="section-tittle text-center mb-55">
                            <h2>Panduan Penggunaan</h2>
                        </div>
                    </div>
                </div>
                <div class="courses-actives">
                    <!-- Single -->
                    <div class="properties pb-20">
                        <div class="properties__card">
                            <div class="properties__img overlay1">
                                <!-- <a href="#"><img src="{{asset('Front_Home/assets/img/gallery/featured1.png')}}" alt=""></a> -->
                                <iframe width="350" height="210" src="https://www.youtube.com/embed/aHdDLLO9z6w" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                            <div class="properties__caption">
                                <p>Panduan</p>
                                <h3><a href="#">Guru</a></h3>
                                <p>The automated process all your website tasks. Discover tools and techniques to engage effectively with vulnerable children and young people.

                                </p>
                                <div class="properties__footer d-flex justify-content-between align-items-center">  
                                  &nbsp;
                                </div>
                                <a href="#" class="border-btn border-btn2">Download</a>
                            </div>

                        </div>
                    </div>
                    <!-- Single -->
                    <!-- Single -->
                    <div class="properties pb-20">
                        <div class="properties__card">
                            <div class="properties__img overlay1">
                                <a href="#"><img src="{{asset('Front_Home/assets/img/gallery/featured2.png')}}" alt=""></a>
                            </div>
                            <div class="properties__caption">
                                <p>Panduan</p>
                                <h3><a href="#">Siswa</a></h3>
                                <p>The automated process all your website tasks. Discover tools and techniques to engage effectively with vulnerable children and young people.
                                </p>
                                <div class="properties__footer d-flex justify-content-between align-items-center">
                                </div>
                                <a href="#" class="border-btn border-btn2">Download</a>
                            </div>
                        </div>
                    </div>
                    <!-- Single -->
                   
                </div>
            </div>
        </div>
<!-- about section ends -->

<!-- teacher section starts  -->


<!-- teacher section ends -->

<!-- course section starts  -->


<!-- course section ends -->

<!-- review section starts  -->




<section class="footer">

<div class="icons" style="">
    <a href="#" class="fab fa-facebook-f"></a>
    <a href="#" class="fab fa-twitter"></a>
    <a href="#" class="fab fa-instagram"></a>
    
</div>

<div class="credit"><p>Copyright ©2021 All Rights Reserved | Pendidikan Fisika Universitas Jambi</p></div>

</section>














<!-- jquery cdn link  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- custom js file link  -->
<script>
    $(document).ready(function(){

  $('.fa-bars').click(function(){
    $(this).toggleClass('fa-times');
    $('.navbar').toggleClass('nav-toggle');
  });

  $(window).on('scroll load',function(){

    $('.fa-bars').removeClass('fa-times');
    $('.navbar').removeClass('nav-toggle');

    if($(window).scrollTop() > 30){
      $('header').addClass('header-active');
    }else{
      $('header').removeClass('header-active');
    }

    $('section').each(function(){
      var id = $(this).attr('id');
      var height = $(this).height();
      var offset = $(this).offset().top - 200;
      var top = $(window).scrollTop();
      if(top >= offset && top < offset + height){
        $('.navbar ul li a').removeClass('active');
        $('.navbar').find('[href="#' + id + '"]').addClass('active');
      }
    });

  });

});
</script>
<script src="{{asset('Front_Home/assets/js/vendor/modernizr-3.5.0.min.js')}}"></script>
<!-- Jquery, Popper, Bootstrap -->
<script src="{{asset('Front_Home/assets/js/vendor/jquery-1.12.4.min.js')}}"></script>
<script src="{{asset('Front_Home/assets/js/popper.min.js')}}"></script>
<script src="{{asset('Front_Home/assets/js/bootstrap.min.js')}}"></script>
<!-- Jquery Mobile Menu -->
<script src="{{asset('Front_Home/assets/js/jquery.slicknav.min.js')}}"></script>

<!-- Jquery Slick , Owl-Carousel Plugins -->
<script src="{{asset('Front_Home/assets/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('Front_Home/assets/js/slick.min.js')}}"></script>
<!-- One Page, Animated-HeadLin -->
<script src="{{asset('Front_Home/assets/js/wow.min.js')}}"></script>
<script src="{{asset('Front_Home/assets/js/animated.headline.js')}}"></script>
<script src="{{asset('Front_Home/assets/js/jquery.magnific-popup.js')}}"></script>

<!-- Date Picker -->
<script src="{{asset('Front_Home/assets/js/gijgo.min.js')}}"></script>
<!-- Nice-select, sticky -->
<script src="{{asset('Front_Home/assets/js/jquery.nice-select.min.js')}}"></script>
<script src="{{asset('Front_Home/assets/js/jquery.sticky.js')}}"></script>
<!-- Progress -->
<script src="{{asset('Front_Home/assets/js/jquery.barfiller.js')}}"></script>

<!-- counter , waypoint,Hover Direction -->
<script src="{{asset('Front_Home/ssets/js/jquery.counterup.min.js')}}"></script>
<script src="{{asset('Front_Home/assets/js/waypoints.min.js')}}"></script>
<script src="{{asset('Front_Home/assets/js/jquery.countdown.min.js')}}"></script>
<script src="{{asset('Front_Home/assets/js/hover-direction-snake.min.js')}}"></script>

<!-- contact js -->
<script src="{{asset('Front_Home/assets/js/contact.js')}}"></script>
<script src="{{asset('Front_Home//assets/js/jquery.form.js')}}"></script>
<script src="{{asset('Front_Home/assets/js/jquery.validate.min.js')}}"></script>
<script src="{{asset('Front_Home/assets/js/mail-script.js')}}"></script>
<script src="{{asset('Front_Home/assets/js/jquery.ajaxchimp.min.js')}}"></script>

<!-- Jquery Plugins, main Jquery -->  
<script src="{{asset('Front_Home/assets/js/plugins.js')}}"></script>
<script src="{{asset('Front_Home/assets/js/main.js')}}"></script>


    
</body>
</html>