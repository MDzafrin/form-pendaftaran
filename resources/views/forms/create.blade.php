@extends('forms.layout');

@section('content')

<h1>FORMULIR PENDAFTARAN</h1>


<form>
    <!--Fungsi Nama-->
    <div class="mb-3">
        <legend for="nama-lengkap" class="form-label">Nama Lengkap</legend>
        <input type="nama" class="form-control" id="nama-lengkap" aria-describeby="TolongNama">
    </div>
    <!--Validasi Nama
    <div class="form-text">Tolong Masukkan Nama Lengkap Anda</div>
    <div class="valid-tooltip">
        Looks good!
    </div>-->

    <!--Fungsi Jenis Kelamin
    <form action="/action_page.php">
    <fieldset>    
    <legend for="jenis-kelamin" class="form-label">Jenis Kelamin</legend>
    <div class="form-check">
        <label for="radioDefault1"><input id="laki-laki" type="radio" name="radio" class="inline" checked/>Laki-Laki</label>
    </div>

    <div class="form-check">
        <label for="radioDefault2"><input id="perempuan" type="radio" name="radio" class="inline" />Perempuan</label>
    </div>
    </fieldset>
    </form>-->

    <!--Fungsi Pemilihan Prodi Dan Tingkat
    <fieldset>
    <legend for="tingkat-dan-prodi" class="form-label">Pilih Tingkat Dan Prodi </legend>
    <select class="form-select form-select-lg mb-3" aria-label="Large select example">
        <option selected>Pilih Prodi</option>
        <option value="1">Manajemen Industri</option>
        <option value="2">Teknologi Rekayasa Mekatronika</option>
        <option value="3">Teknik Mesin Industri</option>
    </select>
    <label for="tingkat" class="form-label">Tingkat</label>
    <select class="form-select form-select-sm" aria-label="Small select example">
        <option selected>Pilih Tingkat</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
    </select>
    </fieldset>-->

    <!--Fungsi Email-->
    <fieldset>
        <div class="mb-3">
            <legend for="exampleFormControlInput1" class="form-label">Email address</legend>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="nama@example.com">
        </div>
    </fieldset>
    
    <!--Fungsi No HP-->
    <div>
        <legend for="no-hp" class="form-label">No HP</legend>
        <input type="text" class="form-control" id="no-hp" aria-describedby="TolongNoHP">
    </div>
    
    <!--Checkbox Pilihan Lomba
    <legend for="pilihan-lomba" class="form-label">Pilih Lomba</legend>
    <input type="radio" class="btn-check" name="options-outlined" id="success-outlined" autocomplete="off">
    <label class="btn btn-outline-success" for="success-outlined">Sawing</label>

    <input type="radio" class="btn-check" name="options-outlined" id="option0" autocomplete="off">
    <label class="btn btn-outline-success" for="option0">Welding</label>
    
    <input type="radio" class="btn-check" name="options-outlined" id="option1" autocomplete="off">
    <label class="btn btn-outline-success" for="option1">Kerajinan Recycle</label>-->

    

    <!--Upload Profile picture
    <fieldset>
        <legend for="upload-profile" class="form-label">Upload Foto KTM</legend>
    <div class="mb-3"> 
        <label for="formFile" class="form-label"></label>
        <input class="form-control" type="file" id="formFile">
    </div>
    </fieldset>-->

    <!--Submit Button-->
    <div class="col-12">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
    

       

</form>



@endsection