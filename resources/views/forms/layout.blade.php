<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MANUFAKTUR COMPETITION</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background-color: #f8f9fa;
        }

        .hero {
            background: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), 
                        url('https://images.unsplash.com/photo-1556012018-5975c898a444') center/cover no-repeat;
            color: white;
            padding: 100px 0;
            text-align: center;
        }

        .hero h1 {
            font-size: 3rem;
            font-weight: bold;
        }

        .content-wrapper {
            margin-top: 40px;
        }

        .card-custom {
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            border: none;
            border-radius: 10px;
        }
    </style>
    @stack('styles')
</head>
<body>

    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <h1>EVENT MANUFAKTUR COMPETITION</h1>
            <p class="lead">Kompetisi terbaik untuk inovator dan insinyur masa depan!</p>
        </div>
    </section>

    <!-- Main Content -->
    <div class="container content-wrapper">
        @yield('content')
    </div>

    <footer class="text-center mt-5 py-3 text-muted">
        &copy; {{ date('Y') }} Manufaktur Competition. All rights reserved.
    </footer>

    @stack('scripts')
</body>
</html>
