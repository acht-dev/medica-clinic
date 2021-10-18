@extends('layout.base')
@section('style_css')
<style>
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
</style>
@endsection
@section('content')
<div class="container-about-us">
  <div class="box-about-us"  style="margin-top: 7%; background-color: #2181fd; height: 250px">
    <h1 style="text-align: left; color: white; padding: 100px"><i>Pelayanan & Fasilitas</i></h1>
  </div>
  <div class="content-fasilitas-pelayanan">
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
</div>
@endsection