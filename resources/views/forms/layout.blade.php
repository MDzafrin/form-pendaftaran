<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>MANUFAKTUR COMPETITION</title>
  {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" /> --}}
  <link rel="stylesheet" href="{{ URL::asset('assets/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{ URL::asset('assets/css/styles.css')}}">
 
</head>
<body>

  <!-- Navigation Bar -->
  <nav class="navbar navbar-expand-lg">
    <div class="container">
      <a class="navbar-brand" href="#">MANUFAKTUR COMPETITION</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon text-light"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item"><a class="nav-link" href="#">Beranda</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Tentang</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Kompetisi</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Kontak</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Hero Section -->
  <section class="hero">
    <div class="container">
      <h1>EVENT MANUFAKTUR COMPETITION</h1>
      <h1>POLITEKNIK INDUSTRI ATMI CIKARANG</h1>
      <p>“Eksplorasi Teknologi Manufaktur & Jadilah bagian dari perubahan Masa Depan.”</p>
    </div>
  </section>

  <!-- Main Content Section -->
  <div class="container content-wrapper">
    <h2 class="section-title">Informasi Kompetisi</h2>
    <div class="row g-4">
      <div class="col-md-6 col-lg-4">
        <div class="card card-custom h-100">
          <div class="card-body">
            <h5 class="card-title">Kategori Lomba</h5>
            <p class="card-text">Berbagai kategori lomba yang menantang kreativitas dan keterampilan teknis.</p>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4">
        <div class="card card-custom h-100">
          <div class="card-body">
            <h5 class="card-title">Jadwal Acara</h5>
            <p class="card-text">Rangkaian acara yang disusun untuk pengalaman kompetitif yang maksimal.</p>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4">
        <div class="card card-custom h-100">
          <div class="card-body">
            <h5 class="card-title">Pendaftaran</h5>
            <p class="card-text">Informasi lengkap mengenai cara mendaftar dan syarat peserta.</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Yield content from child views -->
    <div class="mt-5">
      @yield('content')
    </div>
  </div>

  <!-- Footer -->
  <footer>
    &copy; {{ date('Y') }} <a href="https://atmicikarang.ac.id/">Manufaktur Competition</a>. All rights reserved.
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
  @stack('scripts')
</body>
</html>
