@extends('forms.layout')

@section('content')

<h1 class="h1-2">FORMULIR PENDAFTARAN LOMBA</h1>


<form action="{{ route('forms.store') }}" method="POST" enctype="multipart/form-data">
    @csrf   
    <!--Fungsi Nama-->
    <div class="mb-3">
        <legend for="nama-lengkap" class="form-label">Nama Lengkap</legend>
        <input name= "name" style="height:40px" class="form-control" id="name" placeholder="Nama Lengkap">
    </div>
    <!--Validasi Nama
    <div class="form-text">Tolong Masukkan Nama Lengkap Anda</div>
    <div class="valid-tooltip">
        Looks good!
    </div>-->

    <!--Fungsi Jenis Kelamin-->
    <fieldset>    
    <legend for="jenis-kelamin" class="form-label">Jenis Kelamin</legend>
    <div class="form-check">
        <label for="radioDefault1"><input id="laki-laki" value="Pria" type="radio" name="gender" class="inline" checked/>Laki-Laki</label>
    </div>

    <div class="form-check">
        <label for="radioDefault2"><input id="perempuan" value="Wanita" type="radio" name="gender" class="inline" />Perempuan</label>
    </div>
    </fieldset>
    

    <!--Fungsi Pemilihan Prodi Dan Tingkat-->
    <fieldset>
    <legend for="tingkat-dan-prodi" class="form-label">Pilih Tingkat Dan Prodi </legend>
    <select class="form-select form-select-lg mb-3" aria-label="Large select example" name="prodi">
        <option selected>Pilih Prodi</option>
        <option value="MANIS">Manajemen Industri</option>
        <option value="TRM">Teknologi Rekayasa Mekatronika</option>
        <option value="TMI">Teknik Mesin Industri</option>
    </select>
    </fieldset>

    <fieldset>
        <label for="tingkat" class="form-label">Tingkat</label>
        <select class="form-select form-select-sm" aria-label="Small select example" name="tingkat">
            <option selected>Pilih Tingkat</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
        </select>
    </fieldset>

    <!--Fungsi Email-->
    <fieldset>
        <div class="mb-3">
            <legend for="exampleFormControlInput1" class="form-label">Email Address</legend>
            <input name= "email" type="email" class="form-control" id="email" placeholder="nama@example.com">
        </div>
    </fieldset>
    
    <!--Fungsi No HP-->
    <div>
        <legend for="no-hp" class="form-label">No HP</legend>
        <input name= "phone" type="text" class="form-control" id="phone" placeholder="WA Aktif">
    </div>
    
    <!--Checkbox Pilihan Lomba-->
    <legend for="pilihan-lomba" class="form-label">Pilih Lomba</legend>
    <input type="radio" class="btn-check" name="lomba" value="Sawing" id="success-outlined" autocomplete="off">
    <label class="btn btn-outline-success" for="success-outlined">Sawing</label>

    <input type="radio" class="btn-check" name="lomba"  value="Welding" id="option0" autocomplete="off">
    <label class="btn btn-outline-success" for="option0">Welding</label>
    
    <input type="radio" class="btn-check" name="lomba" value="Kerajinan Recycle" id="option1" autocomplete="off">
    <label class="btn btn-outline-success" for="option1">Kerajinan Recycle</label>

    

    <!--Upload Profile picture-->
    <div class="mb-3"> 
        <label for="image" class="form-label">Upload image</label>
        <input class="form-control @error('image') is-invalid @enderror" type="file" name="image" id="image">
        @error('image')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>
    

    <!--Submit Button-->
    <div class="col-12 pt-5">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
       
</form>



@endsection