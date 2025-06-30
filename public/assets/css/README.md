# Laporan Final Project CRUD Aplication 

## Deskripsi Project
Project ini adalah aplikasi formulir pendaftaran, bertujuan untuk mempermudah proses registrasi sekaligus mengefsienkan pengelolaan data dengan menggunakan database


## Dibuat oleh :
- Muhammad Dzafrin Al-Ghifary
- Sijabat Debora Byesti
- Silvi Hikma Prasista 


## Installaition Via Composer
```
composer create-project laravel/laravel form-pendaftaran
```

## Gunakan command cd
``
cd "destination"
``

## Upload to git hub 
```
git init
git add .
git commit -m "first commit"
git branch -M main
git remote add origin https:project.git
git push -u origin main
```

## Database migration
```
php artisan migrate
```

## Database migration update & reset
```
php artisan mirate:refresh
```

## Create table database
```
php artisan make:migration create_form_table --create=form
```

## Create controller
```
php artisan make:controller FormController -- resource --model=form
```

# Step 1
pertama-tama buat data apa saja yang akan di input ke database

file create_form_table
```
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('forms', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('gender');
            $table->string('prodi');
            $table->string('tingkat');
            $table->string('email');
            $table->string('phone');
            $table->string('lomba');
            $table->string('image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('forms');
    }
};
```

# Step 2
- pergi ke folder "Models"
- buat file Form.php
- pastikan variabel dalam Migration file masuk fillable

```
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name',
        'gender',
        'prodi',
        'tingkat',
        'email',
        'phone',
        'lomba',
        'image',
    ];
    
}
```

<p>Agar apa yang data yang di masukan dapat di teruskan ke data base </p>

# Step 3
- Pergi ke Folder App
- Http
- Controller 
    - Buat _FormController_
        <p>Disinilah kita mengatur public function yang ada pada web</p> 

Mulai dari :
- function index
- function create
- function store
- function show
- function edit
- function update
- function destroy

<p>Semua Public function itu di file blade di folder views</p>

## Public Function 
###  1. layout.blade.php
```
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
      <li class="nav-item dropdown">
        <a class="nav-link" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">MENU</a>
      <ul class="dropdown-menu">
      <li><a class="dropdown-item1" href="{{'/forms/create'}}">HOME</a></li>
        <li><a class="dropdown-item2" href="{{'/forms'}}">SHOW INFO</a></li>
      </ul>
      </li>
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
    {{-- <h2 class="section-title">Informasi Kompetisi</h2> --}}
    <div class="row g-4">
      <div class="col-md-6 col-lg-4">
        {{-- <div class="card card-custom h-100">
          <div class="card-body">
            <h5 class="card-title">Kategori Lomba</h5>
            <p class="card-text">Berbagai kategori lomba yang menantang kreativitas dan keterampilan teknis.</p>
          </div>
        </div> --}}
      </div>
      <div class="col-md-6 col-lg-4">
        {{-- <div class="card card-custom h-100">
          <div class="card-body">
            <h5 class="card-title">Jadwal Acara</h5>
            <p class="card-text">Rangkaian acara yang disusun untuk pengalaman kompetitif yang maksimal.</p>
          </div>
        </div> --}}
      </div>
      <div class="col-md-6 col-lg-4">
        {{-- <div class="card card-custom h-100">
          <div class="card-body">
            {{-- <h5 class="card-title">Pendaftaran</h5>
            <p class="card-text">Informasi lengkap mengenai cara mendaftar dan syarat peserta.</p> 
          </div>
        </div> --}}
      </div>
    </div>

    <!-- Yield content from child views -->
    <div class="mt-5">
      @yield('content')
    </div>
  </div>

  <!-- Footer -->
  <footer>
    &copy; {{ date('Y') }} <a href="https://atmicikarang.ac.id/">ATMI Cikarang</a>. All rights reserved.
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
  @stack('scripts')
</body>
</html>
```

<p>Tempat dimana struktur HTML berada dan tampilan web di atur mulai dari header, nav bar hingga footer</p>


