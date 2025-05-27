<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>MANUFAKTUR COMPETITION</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" />

  <style>
    body {
      font-family: 'Times New Roman', Times, serif;
      background-color: #f8f9fa;
      color: #333;
    }

    .hero {
      background: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)),
        url('https://images.unsplash.com/photo-1556012018-5975c898a444?auto=format&fit=crop&w=1600&q=80') center/cover no-repeat;
      padding: 120px 20px;
      color: #fff;
      text-align: center;
    }

    .hero h1 {
      font-size: 3.8rem;
      font-weight: bold;
      color: #ffd700;
      margin-bottom: 20px;
    }

    .hero p {
      font-size: 1.3rem;
      max-width: 700px;
      margin: auto;
    }

    .content-wrapper {
      padding: 60px 15px;
    }

    .section-title {
      text-align: center;
      font-size: 2rem;
      font-weight: bold;
      margin-bottom: 40px;
      color: #2c3e50;
    }

    .card-custom {
      background-color: #ffffff;
      box-shadow: 0 5px 15px rgba(0,0,0,0.1);
      border: none;
      border-radius: 10px;
      transition: all 0.3s ease-in-out;
    }

    .card-custom:hover {
      transform: translateY(-8px);
      box-shadow: 0 10px 20px rgba(0,0,0,0.15);
    }

    .card-body h5 {
      font-size: 1.25rem;
      color: #0056b3;
    }

    footer {
      background-color: #2c3e50;
      color: #eee;
      padding: 30px 0;
      text-align: center;
    }

    footer a {
      color: #ffd700;
      text-decoration: none;
      transition: color 0.2s ease;
    }

    footer a:hover {
      color: #ffffff;
      text-decoration: underline;
    }
  </style>

  @stack('styles')
</head>
<body>

  <!-- Hero Section -->
  <section class="hero">
    <div class="container">
      <h1>EVENT MANUFAKTUR COMPETITION</h1>
      <h1>POLITEKNIK INDUSTRI ATMI CIKARANG</h1>
      <p>“Eksplorasi Teknologi Manufaktur & Jadilah bagian dari perubahan Masa Depan.”</p>
    </div>
  </section>

  <!-- Main Content -->
    <div class="container content-wrapper">
        @yield('content')
    </div>


  <!-- Footer -->
  <footer>
    &copy; {{ date('Y') }} <a href="#">Manufaktur Competition</a>. All rights reserved.
  </footer>

  @stack('scripts')
</body>
</html>
