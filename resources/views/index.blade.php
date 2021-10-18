@extends('layout.base')
@section('style_css')
  <style>
    .jumbotron-image {
        background-position: center center;
    }
    .bg-banner {
      background-image: url('/images/background-banner.jpeg'); 
      height: 880px; 
      margin-top: 4.6%;
      background-repeat: no-repeat;
      background-size: cover; 
      opacity: 0.8; 
      position: relative;
    }
    .bg-text{
      background-color: rgb(0,0,0); /* Fallback color */
      background-color: rgba(0,0,0, 0.4); /* Black w/opacity/see-through */
      color: white;
      font-weight: bold;
      border: 3px solid #f1f1f1;
      position: absolute;
      top: 60%;
      left: 30%;
      transform: translate(-50%, -50%);
      z-index: 2;
      width: 40%;
      padding: 20px;
      text-align: left;
    }
    .box-visi{
      margin: auto;
      width: 95%;
      border: 1px;
      padding: 10px;
      border-radius: 10px;
      margin-top: 2%;
      padding: 3%
    }
    .box-content-visi {
      margin: auto;
      border: 1px solid;
      padding: 10px;
      border-radius: 10px;
      background-color: whitesmoke;
      box-shadow: 3px 4px 10px 2px #0066ff
    }
    .box-content-layanan {
      margin: auto;
      border: 1px solid;
      padding: 10px;
      border-radius: 10px;
      background-color: white;
      box-shadow: 3px 4px 10px 2px #888888;
      width: 200px;
      height: 300px;
    }
    .box-content-fasilitas {
      margin: auto;
      border: 1px solid;
      padding: 10px;
      border-radius: 10px;
      background-color: whitesmoke;
      box-shadow: 3px 4px 10px 2px #888888;
      width: 80%;
    }
  </style>
@endsection
@section('content')
<div class="jumbotron text-white jumbotron-image shadow bg-banner">
  <div class="bg-text">
    <h2>Melayani Dengan Sepenuh Hati</h2>
    <br/>
    <h5><i>Kami Berkomitmen untuk memberikan pelayanan terbaik dan terus meningkatkan kualitas baik produk maupun layanan kepada customer kami.</i></h5>
  </div>
</div>
<div class="content-about-us">
  <div class="box-content-about-us" style="padding: 5%; background-color:whitesmoke;">
    <div class="box-content" style="border-width: 1px; border-color: black;">
      <h1 style="font-style: italic;text-align: center">Kenapa harus memilih kami?</h1>
      <div class="row" style="margin-top: 2%;">
        <div class="col-lg-6 col-md-6 col-sm-5">
          <center><img src="{{asset('images/tentang-kami.jpeg')}}" width="100%" style="border-radius: 5px" /></center>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-5 mt-2" style="font-size: 20px;">
          <div class="accordion" id="accordionPanelsStayOpenExample">
            <div class="accordion-item">
              <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                  Tentang Kami
                </button>
              </h2>
              <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                <div class="accordion-body">
                  <p style="font-size: 20px">
                    Klinik Dewa Medika hadir menjawab tantangan kebutuhan masyarakat akan keberadaan sebuah klinik yang melayani 24 jam, 7 hari seminggu non stop dan dilengkapi dengan obat - obatan dan fasilitas yang memadai, terutama dalam keadaan yang bersifat emergensi serta system administrasi yang ringkas.
                  </p>
                  <p style="font-size: 20px">
                    Klinik Dewa Medika telah berdiri sejak tahun 1987 dengan nama Klinik Bhakti Mulya yang berdiri di bawah naungan Yayasan Bhakti Mulya, sejak 2006 lalu, berdasarkan keputusan kepala suku dinas kesehatan kota administrasi Jakarta Timur tahun 2010 dengan 188/5.60.07.12.15 menyatakan bahwa telah memberikan izin tetap terkait dengan penyelenggaran balai pengobatan umum dengan perubahan nama menjadi Klinik Dewa Medika.
                  </p>
                  <p style="font-size: 20px">
                    Dewa Medika secara resmi didirikan pada Juni 2010 dengan badan hukum perseorangan dan telah mulai beroprasi pada bulan Agustus 2010 dan sekarang kami memiliki dua cabang yang berada di kota Bekasi dan di Cikarang. Lokasi klinik yang berada di lingkungan perumahan pada penduduk, kawasan industri & pergudangan, membuat kehadiran Dewa Medika dapat memberikan pelayanan kesehatan lebih dekat bagi masyarakat pada umunya dan lingkungan sekitar khususnya.
                  </p>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                  Tujuan
                </button>
              </h2>
              <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                <div class="accordion-body">
                  <p style="font-size: 20px;">Tujuan didirikan klinik dewa medika adalah untuk membantu program pemerintah dalam rangka meningkatkan kesejahteraan masyarakat, terutama dalam bidang kesehatan dan membuka lowongan pekerjaan untuk tenaga kerja produktif yang belum bekerja dan dalam bidang - bidang lainnya selama tidak bertentangan dengan ketentuan - ketentuan yang berlaku</p>
                  <p style="font-size: 20px;">Klinik dewa medika terus berusaha meningkatkan kualitas pelayanan dengan terus mengembangkan diri dalam bidang - bidang lain. Dan terus menjalin kerjasama dengan pihak - pihak yang mempunyai tujuan yang sama.</p>
                  <p style="font-size: 20px;">Klinik Dewa Medika juga mendukung program sosial masyarakat seperti mengadakan pengobatan massal, dan kegiatan sosial lainnya. Seiring berjalannya waktu Klinik Dewa Medica berupaya untuk tetap ada di tengah masyarakat dengan tujuan awal didirikannya, dan akan berupaya memberikan yang terbaik untuk masyarakat.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="content-about-us">
  <div class="box-content-about-us" style="padding: 5%; background-color: #2f89fc;">
    <h1 style="text-align: center; color: white; font-style: italic;">Visi & Misi Kami</h1>
    <div class="box-visi">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mb-2">
          <div class="box-content-visi">
            <div class="row">
              <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                <img src="{{asset('images/icon1.JPG')}}" style="border-radius: 50px" />
              </div>  
              <div class="col-lg-9 col-md-9 col-sm-9 col-xs-10 offset-lg-1 offset-md-1 offset-sm-1">
                <h5>Mewujudkan Sumber Daya Manusian Berkualitas</h5>
                <p>
                  Untuk mencapai terwujudnya sumber daya manusia yang berkualitas melalui jalur kesehatan yang diutamakan adalah menciptakan pengertian dan kesehatan pemeliharaan kesehatan sejak dini, yang akan mempengaruhi kualitas sumber daya manusia terhadap kualitas aktivitas yang akan dicapai.
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mb-2">
          <div class="box-content-visi">
            <div class="row">
              <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                <img src="{{asset('images/icon2.JPG')}}" style="border-radius: 50px" />
              </div>  
              <div class="col-lg-9 col-md-9 col-sm-9 col-xs-10 offset-lg-1 offset-md-1 offset-sm-1">
                <h5>Memberikan Solusi dalam Masalah Kesehatan</h5>
                <p>
                  Klinik dewa medika berusaha mengantisipasi kendala - kendala yang muncul dan menghambat kebutuhan kesahatan sumber daya manusia serta memberikan suatu solusi dalam mencapai derajat kesehatan yang layak bagi masyarakat dan karyawan.
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mb-2">
          <div class="box-content-visi">
            <div class="row">
              <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                <img src="{{asset('images/icon3.JPG')}}" style="border-radius: 50px" />
              </div>  
              <div class="col-lg-9 col-md-9 col-sm-9 col-xs-10 offset-lg-1 offset-md-1 offset-sm-1">
                <h5>Meringankan Biaya Pemeliharaan kesehatan</h5>
                <p>
                  Program yang berhubungan dengan resiko keshatan merupakan suatu hal yang perlu diperhatikan biaya kesehatan dengan biaya tetap dan mendapatkan pelayanan kesehatan secara profesional sehingga dapat meringankan biaya kesehatan.
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mb-2">
          <div class="box-content-visi">
            <div class="row">
              <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                <img src="{{asset('images/icon4.JPG')}}" style="border-radius: 50px" />
              </div>  
              <div class="col-lg-9 col-md-9 col-sm-9 col-xs-10 offset-lg-1 offset-md-1 offset-sm-1">
                <h5>Memberikan Jaminan Kesehatan yang Memuaskan</h5>
                <p>Untuk memenuhi kebutuhan pemeliharaan kesehatan ini klinik dewa medika membuat program kesehatan yang mempunyai dedikasi, personalitas dan professional tinggi dalam bidangnya masing - masing sehingga konsumen mendapatkan jaminan kesehatan yang memuaskan.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mb-2">
          <div class="box-content-visi">
            <div class="row">
              <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                <img src="{{asset('images/icon2.JPG')}}" style="border-radius: 50px" />
              </div>  
              <div class="col-lg-9 col-md-9 col-sm-9 col-xs-10 offset-lg-1 offset-md-1 offset-sm-1">
                <h5>Visi</h5>
                <p style="padding-bottom: 3.5rem">
                  klinik dengan pelayanan 24jam terlengkap, mudah diakses di jakarta
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mb-2">
          <div class="box-content-visi">
            <div class="row">
              <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                <img src="{{asset('images/icon1.JPG')}}" style="border-radius: 50px" />
              </div>  
              <div class="col-lg-9 col-md-9 col-sm-9 col-xs-10 offset-lg-1 offset-md-1 offset-sm-1">
                <h5>Misi</h5>
                <p>
                  <ul>
                    <li>meningkatkan kualitas layanan penunjang medis</li>
                    <li>meningkatkan kualitas keahlian tenaga medis</li>
                    <li>memperluas akses jaringan layanan medis melalui digital marketing</li>
                  </ul>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <br/>
    </div>
  </div>
</div>
<div class="content-fasilitas">
  <div class="fasilitas-title">
    <h1 style="text-align: center; margin-top:4%"><i>Pelayanan & Fasilitas</i></h1>
  </div>
  <div class="box-fasilitas mt-5">
    <div class="row" style="margin: 5%">
      <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 mb-4">
        <div class="box-content-layanan d-flex flex-column" style="justify-content: center; align-items:center">
          <div class="logo-icon1">
            <center><img src="{{asset('images/dokter_jam.JPG')}}" style="border-radius: 50px; width: 70%" /></center>
          </div>
          <br/>
          <div class="text-logo1">
            <h5>Dokter 24 Jam</h5>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 mb-4">
        <div class="box-content-layanan d-flex flex-column" style="justify-content: center; align-items:center">
          <div class="logo-icon1">
            <center><img src="{{asset('images/dokter_gigi.JPG')}}" style="border-radius: 50px; width: 70%" /></center>
          </div>
          <br/>
          <div class="text-logo1">
            <h5>Dokter Gigi</h5>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 mb-4">
        <div class="box-content-layanan d-flex flex-column" style="justify-content: center; align-items:center">
          <div class="logo-icon1">
            <center><img src="{{asset('images/akunpuntur.JPG')}}" style="border-radius: 50px; width: 70%" /></center>
          </div>
          <br/>
          <div class="text-logo1">
            <h5 style="text-align: center">Dokter Akupuntur Medis</h5>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 mb-4">
        <div class="box-content-layanan d-flex flex-column" style="justify-content: center; align-items:center">
          <div class="logo-icon1">
            <center><img src="{{asset('images/skincare.JPG')}}" style="border-radius: 50px; width: 70%" /></center>
          </div>
          <br/>
          <div class="text-logo1">
            <h5>Skin Care</h5>
          </div>
        </div>
      </div>
    </div>
    <div class="list-fasilitas-layanan">
      <center><img src="{{asset('images/Picture1.png')}}" style="width: 55%; margin-bottom: 5%" /></center>
      <center><img src="{{asset('images/Picture2.png')}}" style="width: 55%; margin-bottom: 5%" /></center>
    </div>
  </div>
</div>
<div class="content-our-partner d-flex flex-column" style="background-color: #2f89fc">
  <div class="logo-dewa-ayu" style="margin:auto">
    <center><img src="{{asset('images/logo.png')}}" style="width: 50%" /></center>
  </div>
  <div class="label-text-tersedia" style="background-color: navy; border-radius:50px; width:40%; margin:auto">
    <h3 style="color: white; text-align: center; margin:2%; padding:4%"> Layanan Kami Juga Tersedia di</h3>
  </div>
  <div class="box-partner mt-5 mb-5" style="background-color: white; width:60%; margin:auto; border-radius:20px">
    <div class="row p-4">
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
        <center><img src="{{asset('images/tiket.png')}}" style="width: 50%;margin-top: 25px" /></center>
      </div>
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
        <center><img src="{{asset('images/traveloka.png')}}" style="width: 50%" /></center>
      </div>
    </div>
    <div class="row p-4">
      <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
        <center><img src="{{asset('images/halodoc.png')}}" style="width: 50%;margin-top: 25px" /></center>
      </div>
      <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
        <center><img src="{{asset('images/media_sehat.png')}}" style="width: 50%" /></center>
      </div>
      <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
        <center><img src="{{asset('images/seehat.png')}}" style="width: 50%" /></center>
      </div>
    </div>
  </div>
</div>
@endsection
