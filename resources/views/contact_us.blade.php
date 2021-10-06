@extends('layout.base')
@section('style_css')
<style>
  .button-wa:hover {
      color: white!important
    }
</style>
@endsection
@section('content')
<div class="container-about-us">
  <div class="box-about-us"  style="margin-top: 7%; background-color: #2181fd; height: 250px">
    <h1 style="text-align: left; color: white; padding: 100px"><i>Kontak Kami</i></h1>
  </div>
  <div class="content-contact-person" style="margin: 2%">
    <h3 style="text-align: center; margin-top:5%;"><i>Narahubung</i></h3>
    <div class="row p-5">
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 mb-5">
        <p style="text-align: center; font-weight: bold">Admin Klinik Pulogebang</p>
        <div class="d-flex justify-content-center">
          <a type="button" class="btn btn-lg button-wa" style="width: 50%; background-color: #128C7E; color: white;">Tanya Disini <img src="{{asset('images/whatsapp.png')}}" style="width: 24px; height: 24px; margin-left: 5%;"/></a>
        </div>
      </div>
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 mb-5">
        <p style="text-align: center; font-weight: bold">Admin Klinik Dewa Ayu Bintara</p>
        <div class="d-flex justify-content-center">
          <a type="button" class="btn btn-lg button-wa" style="width: 50%; background-color: #128C7E; color: white;">Tanya Disini <img src="{{asset('images/whatsapp.png')}}" style="width: 24px; height: 24px; margin-left: 5%;"/></a>
        </div>
      </div>
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 mb-5">
        <p style="text-align: center; font-weight: bold">Admin Vaksin dan Poli Gigi Dewa Medika</p>
        <div class="d-flex justify-content-center">
          <a type="button" class="btn btn-lg button-wa" style="width: 50%; background-color: #128C7E; color: white;">Tanya Disini <img src="{{asset('images/whatsapp.png')}}" style="width: 24px; height: 24px; margin-left: 5%;"/></a>
        </div>
      </div>
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 mb-5">
        <p style="text-align: center; font-weight: bold">Admin Home Visit/ Home Care</p>
        <div class="d-flex justify-content-center">
          <a type="button" class="btn btn-lg button-wa" style="width: 50%; background-color: #128C7E; color: white;">Tanya Disini <img src="{{asset('images/whatsapp.png')}}" style="width: 24px; height: 24px; margin-left: 5%;"/></a>
        </div>
      </div>
    </div>
    <h3 style="text-align: center; margin-bottom:2%;"><i>Temukan kami</i></h3>
    <div class="alamat mb-5">
      <center><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15865.586020960236!2d106.9562227!3d-6.2113218!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x401c9444958da286!2sKlinik%20Dewa%20Medika%2024%20Jam!5e0!3m2!1sid!2sid!4v1633449680985!5m2!1sid!2sid" width="70%" height="450px" style="border:0;" allowfullscreen="" loading="lazy"></iframe></center>
    </div>
  </div>
</div>
@endsection