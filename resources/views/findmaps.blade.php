@extends('template.utama')

@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('/css/styleFindMaps.css')}}">
@endsection

@section('content')
<!-- Find Maps XL -->
<section class="container-fluid find-maps d-none d-xl-block">
  <div class="row find-maps-row">
    <div class="col-sm-12 find-maps-colom">
      <h1 class="text-center">Find Location</h1>
      <p>Cari lokasi (rumah sakit, puskesmas, klinik, rumah praktek) yang anda tuju untuk mempermudah perjalanan anda dengan menekan tombol "View large maps" di pojok kiri atas maps ini</p>
      <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d12990.280276845826!2d107.35215112530692!3d-6.36341948210631!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sRumah%20Sakit!5e1!3m2!1sid!2sid!4v1614619246106!5m2!1sid!2sid" width="1004" height="800" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
  </div>
</section>

<!-- Find Maps LG -->
<section class="container-fluid find-maps d-none d-lg-block d-xl-none">
  <div class="row find-maps-row">
    <div class="col-sm-12 find-maps-colom">
      <h1 class="text-center">Find Location</h1>
      <p>Cari lokasi (rumah sakit, puskesmas, klinik, rumah praktek) yang anda tuju untuk mempermudah perjalanan anda dengan menekan tombol "View large maps" di pojok kiri atas maps ini</p>
      <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d12990.280276845826!2d107.35215112530692!3d-6.36341948210631!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sRumah%20Sakit!5e1!3m2!1sid!2sid!4v1614619246106!5m2!1sid!2sid" width="795" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
  </div>
</section>

<!-- Find Maps MD -->
<section class="container-fluid find-maps d-none d-md-block d-lg-none">
  <div class="row find-maps-row">
    <div class="col-sm-12 find-maps-colom">
      <h1 class="text-center">Find Location</h1>
      <p>Cari lokasi (rumah sakit, puskesmas, klinik, rumah praktek) yang anda tuju untuk mempermudah perjalanan anda dengan menekan tombol "View large maps" di pojok kiri atas maps ini</p>
      <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d12990.280276845826!2d107.35215112530692!3d-6.36341948210631!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sRumah%20Sakit!5e1!3m2!1sid!2sid!4v1614619246106!5m2!1sid!2sid" width="650" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
  </div>
</section>

<!-- Find Maps SM -->
<section class="container-fluid find-maps d-none d-sm-block d-md-none">
  <div class="row find-maps-row">
    <div class="col-sm-12 find-maps-colom">
      <h1 class="text-center">Find Location</h1>
      <p>Cari lokasi (rumah sakit, puskesmas, klinik, rumah praktek) yang anda tuju untuk mempermudah perjalanan anda dengan menekan tombol "View large maps" di pojok kiri atas maps ini</p>
      <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d12990.280276845826!2d107.35215112530692!3d-6.36341948210631!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sRumah%20Sakit!5e1!3m2!1sid!2sid!4v1614619246106!5m2!1sid!2sid" width="500" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
  </div>
</section>

<!-- Find Maps XS -->
<section class="container-fluid find-maps d-block d-sm-none">
  <div class="row find-maps-row">
    <div class="col-sm-12 find-maps-colom">
      <h1 class="text-center">Find Location</h1>
      <p>Cari lokasi (rumah sakit, puskesmas, klinik, rumah praktek) yang anda tuju untuk mempermudah perjalanan anda dengan menekan tombol "View large maps" di pojok kiri atas maps ini</p>
      <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d12990.280276845826!2d107.35215112530692!3d-6.36341948210631!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sRumah%20Sakit!5e1!3m2!1sid!2sid!4v1614619246106!5m2!1sid!2sid" width="287" height="150" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
  </div>
</section>
@endsection