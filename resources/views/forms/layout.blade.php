<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MANUFAKTUR COMPETITION</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Times New Roman', Times, serif;
            background-color: #f0f4f8;
        }

        .hero {
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), 
                        url('https://images.unsplash.com/photo-1556012018-5975c898a444') center/cover no-repeat;
            color: #fff;
            padding: 100px 0;
            text-align: center;
        }

        .hero h1 {
            font-size: 3.5rem;
            font-weight: bold;
            color: #ffcc00;
        }

        .hero p {
            font-size: 1.25rem;
            color: #ffffff;
        }

        .content-wrapper {
            margin-top: 40px;
        }

        .card-custom {
            box-shadow: 0 4px 12px rgba(0,0,0,0.15);
            border: none;
            border-radius: 10px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .card-custom:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 16px rgba(0,0,0,0.2);
        }

        footer {
            background-color: #343a40;
            color: #ddd;
        }

        footer a {
            color: #ffcc00;
            text-decoration: none;
        }

        footer a:hover {
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
            <p class="lead">“Eksplorasi Teknologi Manufaktur & Jadilah bagian dari perubahan Masa Depan.”</p>
        </div>
    </section>

    <!-- Main Content -->
    <div class="container content-wrapper">
        @yield('content')
    </div>

    <footer class="text-center mt-5 py-3">
        &copy; {{ date('Y') }} <a href="#">Manufaktur Competition</a>. All rights reserved.
    </footer>

    @stack('scripts')
</body>
</html>