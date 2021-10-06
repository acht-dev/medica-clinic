<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Klinik Dewa Medika</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
  <style>
    *, html {
    margin:0;
    padding:0;  
    }
    a:hover{
      color: #2f89fc!important;
    }
  </style>
  @yield('style_css')
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <div class="container-fluid">
        <a href="#" class="navbar-brand">
          <img src="{{asset('images/logo.png')}}" style="width: 100px; height: 100px" />
        </a>
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav">
            </div>
            <div class="navbar-nav ms-auto">
              <a href="/" class="nav-item nav-link" style="color: black; font-weight: 500">Beranda</a>
              <a href="/about-us" class="nav-item nav-link" style="color: black; font-weight: 500">Tentang Kami</a>
              <a href="/pelayanan-dan-fasilitas" class="nav-item nav-link" style="color: black; font-weight: 500">Pelayanan & Fasilitas</a>
              <a href="/kontak-kami" class="nav-item nav-link" style="color: black; font-weight: 500">Kontak Kami</a>
              <a href="#" class="nav-item nav-link" style="color: rgb(221, 31, 142); font-weight: 500">Dewa Ayu Skincare</a>
            </div>
        </div>
    </div>
  </nav>

  @yield('content')

    <div class="footer-about" style="background-color: rgb(36, 36, 36)">
      <div style="box-footer">
        <div class="row" style="margin-right: 1%">
          <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
            <center>
              <div class="box-logo" style="margin:5%; background-color:white; width:70%; border-radius:50px">
                <center><img src="{{asset('images/logo.png')}}" style="width:70%" /></center>
              </div>
            </center>
            <p style="color: white; margin:5%; font-size: 20px; font-weight: bold; text-align:center">Kami Berkomitmen untuk memberikan pelayanan terbaik dan terus meningkatkan kualitas baik produk maupun layanan kepada customer kami.</p>
          </div>
          <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 p-5">
            <div class="box-follow-us" style="width: 50%">
              <p style="color: white; font-size: 36px; margin-top:10%; font-weight:bold">Follow Us</p>
              <a href="" style="color: white; font-size: 24px;">Instagram</a><br/><br/>
              <a href="" style="color: white; font-size: 24px">Facebook</a><br/><br/>
              <a href="" style="color: white; font-size: 24px">Youtube</a><br/><br/>
            </div>
          </div>
          <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 p-5">
            <div class="box-address">
              <p style="color: white; font-size: 36px; margin-top:5%; font-weight:bold">Alamat : </p>
              <p style="color: white; font-size: 20px; font-weight:bold">Kantor Pusat</p>
              <p style="color: white; font-size: 16px;">Jl. Pulogebang Raya RT 003/003 No.291, Kel. Pulogebang, Kec. Cakung, Jakarta Timur</p>
              <p style="color: white; font-size: 20px; font-weight:bold">Cabang 1</p>
              <p style="color: white; font-size: 16px;">Jl. Bintara Raya Ruko Bintara Estate No. 5, Kel. Jakasampurna, Kec. Bekasi Barat, Kota Bekasi</p>
              <p style="color: white; font-size: 20px; font-weight:bold">Cabang 2</p>
              <p style="color: white; font-size: 16px;">Jl. Kp Pulo Bambu RT004/016, Kel. Karang Bahagia, Kec. Karang Sentosa Cikarang Utara, Kab. Bekasi</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>