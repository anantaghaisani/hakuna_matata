@extends('layouts.app')

@section('content')
<style>
  .text-shadow {
    text-shadow: 
      2px 2px 4px rgba(0, 0, 0, 1), /* Shadow hitam 50% opacity */
      0 0 10px rgba(255, 255, 255, 0.7); /* Glow putih */
    font-weight: 700 !important; /* Extra bold */
    letter-spacing: 1px; /* Jarak antar huruf */
  }
  .full-width-container {
    width: 100vw;
    position: relative;
    left: 50%;
    right: 50%;
    margin-left: -50vw;
    margin-right: -50vw;
  }
  .full-width-img {
    width: 100%;
    height: 500px; /* Atur tinggi */
    object-fit: cover; /* Biar gambar tidak terdistorsi */
  }
  .image-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.3);
    display: flex;
    justify-content: center;
    align-items: center;
    color: white;
  }
</style>

<div class="full-width-container">
  <img src="{{ asset('images/hm office.jpg') }}" 
       class="full-width-img" 
       alt="Office Hakuna Matata">
       <div class="image-overlay">
    <div class="text-content"> <!-- Tambah wrapper ini -->
      <h1 class="display-4 fw-bold text-shadow">Kantor Hakuna Matata Course</h1>
      <h2 style="font-size: 24px; font-weight: semibold; text-align: center; color:rgb(255, 198, 10); margin: 16px 0;">
          Perum Kraton Super Block | Jln. Lilium Selatan II No.1 Krian</h2>
      </div>
  </div>
</div>
<div class="container text-center"; style="padding-top: 4rem;">
  <div class="row">
    <div class="col">
    <div style="text-align: center;">
        <h1 style="font-size: 2rem; font-weight: 700; color: #3490dc;">Tentor <span style="color: #ffc107;">Berkualitas</span></h1>
        <p style="font-size: 1rem; margin-top: 1rem;">
          Tentor HM Course telah melalui tahapan seleksi dan berasal dari PTN ternama dengan pengalaman yang baik. Dan yang terpenting, tentor ramah dan bersahabat!
        </p>
      </div>
    </div>
    <div class="col">
    <div style="text-align: center;">
        <h1 style="font-size: 2rem; font-weight: 700; color: #3490dc;">Biaya <span style="color: #ffc107;">Bersahabat</span></h1>
        <p style="font-size: 1rem; margin-top: 1rem;">
          Biaya terjangkau dengan metode pembayaran bulanan memungkinkan Anda mengakses pendidikan terbaik tanpa memberatkan kantong.Pembayaran mudah, belajar maksimal!        </p>
      </div>
    </div>
    <div class="col">
    <div style="text-align: center;">
        <h1 style="font-size: 2rem; font-weight: 700; color: #3490dc;">Jadwal <span style="color: #ffc107;">Fleksibel</span></h1>
        <p style="font-size: 1rem; margin-top: 1rem;">
        Di HM Course, kami menyediakan jadwal les yang fleksibel dan dapat disesuaikan dengan kebutuhan masing-masing. Belajar jadi lebih nyaman, efektif, dan tetap menyenangkan!       </p>
      </div>
    </div>
  </div>
</div>

<div class="container text-center" style="padding-top: 4rem;">
  <div id="carouselExampleDark" class="carousel carousel-dark slide">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>

    <div class="carousel-inner">
      <!-- Item 1 -->
      <div class="carousel-item active" data-bs-interval="10000">
  <img src="{{ asset('images/kelas.jpg') }}" class="d-block w-100" alt="Kelas Intensif HM Course">

  <div class="carousel-caption d-none d-md-block start-0 end-0 bottom-0"
       style="background-color: rgba(52, 144, 220, 0.92); padding: 1rem 1rem 4rem;">
    <div class="text-warning">
      <h5 class="fw-bold fs-4 mb-2">🏫 Kelas Kecil</h5>
      <p class="mb-0 lh-sm">
        <span class="d-block mb-1">✨ <strong>20-25 siswa/kelas</strong> agar lebih fokus</span>
        <span class="d-block mb-1">👨🏫 Tentor lebih intensif membimbing</span>
        <span class="d-block">🌿 Suasana belajar kondusif & personal</span>
      </p>
    </div>
  </div>
</div>


      <!-- Item 2 -->
      <div class="carousel-item" data-bs-interval="2000">
        <img src="{{ asset('images/kelas1.jpg') }}" class="d-block w-100" alt="Kelas Intensif HM Course">
        
        <div class="carousel-caption d-none d-md-block start-0 end-0 bottom-0"
        style="background-color: rgba(52, 144, 220, 0.92); padding: 1rem 1rem 4rem;">          <div class="text-warning">
        <h5 class="fw-bold fs-4 mb-2">📘 Pembelajaran Intensif</h5>
          <p class="mb-0 lh-sm">
            <span class="d-block mb-1">🔥 Fokus pada pemahaman materi, bukan hafalan</span>
            <span class="d-block mb-1">👨‍🏫 Tentor selalu siap membantu</span>
            <span class="d-block">✅ Kelas aktif dan partisipatif</span>
          </p>
          </div>
        </div>
      </div>

      <!-- Item 3 -->
      <div class="carousel-item">
        <img src="{{ asset('images/kelas2.jpg') }}" class="d-block w-100" alt="Kelas Intensif HM Course">
        
        <div class="carousel-caption d-none d-md-block start-0 end-0 bottom-0"
        style="background-color: rgba(52, 144, 220, 0.92); padding: 1rem 1rem 4rem;">          <div class="text-warning">
          <h5 class="fw-bold fs-4 mb-2">🤝 Suasana Kekeluargaan</h5>
            <p class="mb-0 lh-sm">
              <span class="d-block mb-1">💬 Interaksi aktif antara tentor & siswa</span>
              <span class="d-block mb-1">🎯 Fokus pada pengembangan skill dan karakter</span>
              <span class="d-block">❤️ Siswa merasa nyaman dan percaya diri belajar</span>
            </p>
          </div>
        </div>
      </div>
    </div>

    <!-- Controls - tetap di posisi yang benar -->
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</div>

<div class="container text-center" style="padding-top: 4rem;">
<h1 class="display-5" style="color: #ffc107;">
  Our <span style="color: #3490dc;">Tentor</span></h1>  
  <div class="container text-center" style="padding-top: 2rem; padding-left: 0; padding-right: 0;"></div>
  <div class="row">
    <div class="col">
    <div class="card mb-3" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="{{ asset('images/clara.jpg') }}" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Clara</h5>
        <p class="card-text">English Teacher</p>
      </div>
    </div>
  </div>
</div>
    </div>
    <div class="col">
    <div class="card mb-3" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="{{ asset('images/Dhofi.jpg') }}" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Dhofi</h5>
        <p class="card-text">Math Teacher</p>
      </div>
    </div>
  </div>
</div>
    </div>
    <div class="col">
    <div class="card mb-3" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="{{ asset('images/yafie.jpg') }}" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Yafie</h5>
        <p class="card-text">Science Teacher</p>
      </div>
    </div>
  </div>
</div>
    </div>
    <div style="padding-right: 1rem; margin-top: 0rem; text-align: right; margin-bottom: 2rem;">
  <a href="/about" class="btn btn-warning btn-sm px-4" 
     style="border-radius: 45px;">
    Selengkapnya
  </a>
</div>
</div>

<div style="background-color: rgba(247, 229, 176, 0.9); width: 100vw; padding: 4rem 0; margin-left: calc(-50vw + 50%);">
  <div class="container text-center">
    <h1 class="display-5" style="color: #ffc107;">
      HM <span style="color: #3490dc;">Activity</span>
    </h1>

    <div class="row justify-content-center pt-5">
      <!-- Card 1 -->
      <div class="col-md-4 mb-4 d-flex justify-content-center">
        <div class="card" style="width: 18rem;">
          <img src="{{ asset('images/outdoor.jpg') }}" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="card-text fw-medium">Outdoor Learning</p>
          </div>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="col-md-4 mb-4 d-flex justify-content-center">
        <div class="card" style="width: 18rem;">
          <img src="{{ asset('images/elementary.jpg') }}" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="card-text fw-medium">Elementary Class</p>
          </div>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="col-md-4 mb-4 d-flex justify-content-center">
        <div class="card" style="width: 18rem;">
          <img src="{{ asset(path: 'images/bukber.JPG') }}" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="card-text fw-medium">Buka Bersama</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div style="padding: 2rem 0;">
  <div class="container text-center">
    <h1 class="display-5" style="color: #ffc107;">
      Find <span style="color: #3490dc;">Us</span>
    </h1>
    <section id="maps-section" style="width: 100%; margin-top: 20px;">
    <div style="width: 100%; height: 400px;">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2838.602621644178!2d112.5744025!3d-7.406684599999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7809d44792e67b%3A0xc278292beb9f8cd1!2sHakuna%20Matata%20Course!5e1!3m2!1sid!2sid!4v1744699151008!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</section>
  </div>
</div>
@endsection