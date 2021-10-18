@extends('layout.base')
@section('style_css')
    <style>
      .box-content-visi {
      margin: auto;
      border: 1px solid;
      padding: 10px;
      border-radius: 10px;
      background-color: whitesmoke;
      box-shadow: 3px 4px 10px 2px #a0a0a0
    }
    </style>
@endsection
@section('content')
<div class="container-about-us">
  <div class="box-about-us"  style="margin-top: 7%; background-color: #2181fd; height: 250px">
    <h1 style="text-align: left; color: white; padding: 100px"><i>Tentang Kami</i></h1>
  </div>
  <div class="content-tentang-kami" style="margin:5%">
    <p style="font-size: 24px">
      Klinik Dewa Medika hadir menjawab tantangan kebutuhan masyarakat akan keberadaan sebuah klinik yang melayani 24 jam, 7 hari seminggu non stop dan dilengkapi dengan obat - obatan dan fasilitas yang memadai, terutama dalam keadaan yang bersifat emergensi serta system administrasi yang ringkas.
    </p>
    <p style="font-size: 24px">
      Klinik Dewa Medika telah berdiri sejak tahun 1987 dengan nama Klinik Bhakti Mulya yang berdiri di bawah naungan Yayasan Bhakti Mulya, sejak 2006 lalu, berdasarkan keputusan kepala suku dinas kesehatan kota administrasi Jakarta Timur tahun 2010 dengan 188/5.60.07.12.15 menyatakan bahwa telah memberikan izin tetap terkait dengan penyelenggaran balai pengobatan umum dengan perubahan nama menjadi Klinik Dewa Medika.
    </p>
    <p style="font-size: 24px">
      Dewa Medika secara resmi didirikan pada Juni 2010 dengan badan hukum perseorangan dan telah mulai beroprasi pada bulan Agustus 2010 dan sekarang kami memiliki dua cabang yang berada di kota Bekasi dan di Cikarang. Lokasi klinik yang berada di lingkungan perumahan pada penduduk, kawasan industri & pergudangan, membuat kehadiran Dewa Medika dapat memberikan pelayanan kesehatan lebih dekat bagi masyarakat pada umunya dan lingkungan sekitar khususnya.
    </p>
  </div>
  <div class="box-tujuan row" style="background-color:cornsilk;margin:auto">
    <p style="font-size: 30px; font-weight: bold; color:rgb(71, 71, 71); text-align:center; margin-top: 5%"><i>Tujuan</i></p>
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 p-5">
      <p style="font-size: 20px; color:rgb(71, 71, 71);">Tujuan didirikan klinik dewa medika adalah untuk membantu program pemerintah dalam rangka meningkatkan kesejahteraan masyarakat, terutama dalam bidang kesehatan dan membuka lowongan pekerjaan untuk tenaga kerja produktif yang belum bekerja dan dalam bidang - bidang lainnya selama tidak bertentangan dengan ketentuan - ketentuan yang berlaku</p>
      <p style="font-size: 20px; color:rgb(71, 71, 71);">Klinik dewa medika terus berusaha meningkatkan kualitas pelayanan dengan terus mengembangkan diri dalam bidang - bidang lain. Dan terus menjalin kerjasama dengan pihak - pihak yang mempunyai tujuan yang sama.</p>
      <p style="font-size: 20px; color:rgb(71, 71, 71);">Klinik Dewa Medika juga mendukung program sosial masyarakat seperti mengadakan pengobatan massal, dan kegiatan sosial lainnya. Seiring berjalannya waktu Klinik Dewa Medica berupaya untuk tetap ada di tengah masyarakat dengan tujuan awal didirikannya, dan akan berupaya memberikan yang terbaik untuk masyarakat.</p>
    </div>
  </div>
  <div class="visi-misi p-5">
    <h1 class="mb-5" style="text-align: center; color:rgb(66, 66, 66); font-style: italic;">Visi & Misi Kami</h1>
    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mb-5">
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
      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mb-5">
        <div class="box-content-visi">
          <div class="row">
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
              <img src="{{asset('images/icon2.JPG')}}" style="border-radius: 50px" />
            </div>  
            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-10 offset-lg-1 offset-md-1 offset-sm-1">
              <h5>Memberikan Solusi dalam Masalah Kesehatan</h5>
              <p style="margin-bottom: 2.5rem">
                Klinik dewa medika berusaha mengantisipasi kendala - kendala yang muncul dan menghambat kebutuhan kesahatan sumber daya manusia serta memberikan suatu solusi dalam mencapai derajat kesehatan yang layak bagi masyarakat dan karyawan.
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mb-5">
        <div class="box-content-visi">
          <div class="row">
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
              <img src="{{asset('images/icon3.JPG')}}" style="border-radius: 50px" />
            </div>  
            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-10 offset-lg-1 offset-md-1 offset-sm-1">
              <h5>Meringankan Biaya Pemeliharaan kesehatan</h5>
              <p style="margin-bottom: 2.5rem">
                Program yang berhubungan dengan resiko keshatan merupakan suatu hal yang perlu diperhatikan biaya kesehatan dengan biaya tetap dan mendapatkan pelayanan kesehatan secara profesional sehingga dapat meringankan biaya kesehatan.
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mb-5">
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
  </div>
</div>
@endsection