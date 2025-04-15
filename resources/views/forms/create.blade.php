@extends('forms.layout');

@section('content')

<h1>FORMULIR PENDAFTARAN</h1>

<!--Fungsi Nama-->
<form>
    <div class="mb-3">
        <legend for="nama-lengkap" class="form-label">Nama Lengkap</legend>
        <input type="nama" class="form-control" id="nama-lengkap" aria-describeby="TolongNama">
    </div>

    <!--Fungsi Jenis Kelamin-->
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
    </form>

    <!--Fungsi Pemilihan Prodi Dan Tingkat-->
    <fieldset>
    <legend for="tingkat-dan-prodi" class="form-label">Pilih Tingkat Dan Prodi </legend>
    <select class="form-select form-select-lg mb-3" aria-label="Large select example">
        <option selected>Pilih Prodi</option>
        <option value="1">Manajemen Industri</option>
        <option value="2">Teknologi Rekayasa Mekatronika</option>
        <option value="3">Teknik Mesin Industri</option>
    </select>

    <select class="form-select form-select-sm" aria-label="Small select example">
        <option selected>Pilih Tingkat</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
    </select>
    </fieldset>

    
    <fieldset>
        <div class="mb-3">
            <legend for="exampleFormControlInput1" class="form-label">Email address</legend>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="nama@example.com">
        </div>
    </fieldset>
    

</form>



@endsection