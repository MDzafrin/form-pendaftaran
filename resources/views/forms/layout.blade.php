<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>MANUFAKTUR COMPETITION</title>
  <link rel="stylesheet" href="{{ URL::asset('assets/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{ URL::asset('assets/css/styles.css')}}">

  <!-- Navigation Bar -->
  <header class="header-container">
    <div class="logo-title">
      <img id="logo" alt="Logo ATMI Cikarang" src="https://atmicikarang.ac.id/wp-content/uploads/2024/10/cropped-Logo-Polin-ATMI.png">
      <h1 style="font-size: 1.5rem;">POLITEKNIK ATMI CIKARANG</h1>
    </div>
    <nav>
      <ul class="nav-links">
        <li><a href="#">INFO</a></li>
        <li><a href="#">HTML</a></li>
        <li><a href="#">CSS</a></li>
      </ul>
    </nav>
  </header>

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
