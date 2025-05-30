@extends('forms.layout')

@section('content')
<div class="container mt-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2><i class="bi bi-pencil-square"></i> Edit Formulir Pendaftaran</h2>
        <a href="{{ route('forms.index') }}" class="btn btn-success">
            <i class="bi bi-arrow-left"></i> Kembali
        </a>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> Ada beberapa masalah dengan input Anda.
            <ul class="mb-0 mt-2">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="card shadow-sm">
        <div class="card-body">
            <form action="{{ route('forms.update', $form->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="name" class="form-label">Nama Lengkap</label>
                    <input type="text" name="name" value="{{ $form->name }}" class="form-control" placeholder="Nama Lengkap" required>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" value="{{ $form->email }}" class="form-control" placeholder="Email" required>
                </div>

                <div class="mb-3">
                    <label for="phone" class="form-label">Nomor Telepon</label>
                    <input type="text" name="phone" value="{{ $form->phone }}" class="form-control" placeholder="Nomor Telepon" required>
                </div>

                <div class="mb-3">
                    <label for="radioDefault1"><input id="laki-laki" value="Pria" type="radio" name="gender" class="inline" checked/>Laki-Laki</label>
                    <label for="radioDefault2"><input id="perempuan" value="Wanita" type="radio" name="gender" class="inline" />Perempuan</label>
                </div>

                <div class="mb-3">
                    <label for="prodi" class="form-label">Prodi</label>
                    <select class="form-select" name="prodi" required>
                        <option value="" disabled selected>Pilih Prodi</option>
                        <option value="MANIS" {{ $form->prodi == 'MANIS' ? 'selected' : '' }}>Manajemen Industri</option>
                        <option value="TRM" {{ $form->prodi == 'TRM' ? 'selected' : '' }}>Teknologi Rekayasa Mekatronika</option>
                        <option value="TMI" {{ $form->prodi == 'TMI' ? 'selected' : '' }}>Teknik Mesin Industri</option>
                    </select>
                </div>

                <fieldset>
                    <label for="tingkat" class="form-label">Tingkat</label>
                    <select class="form-select form-select-sm" aria-label="Small select example" name="tingkat">
                        <option selected>Pilih Tingkat</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select>
                </fieldset>

                <div class="mb-3">
                    <label for="lomba" class="form-label">Jenis Lomba</label>
                    <select class="form-select" name="lomba" required>
                        <option value="" disabled selected>Pilih Jenis Lomba</option>
                        <option value="Sawing" {{ $form->lomba == 'Sawing' ? 'selected' : '' }}>Sawing</option>
                        <option value="Welding" {{ $form->lomba == 'Welding' ? 'selected' : '' }}>Welding</option>
                        <option value="Kerajina Recycle" {{ $form->lomba == 'Kerajina Recycle' ? 'selected' : '' }}>Kerajinan Recycle</option>
                    </select>
                </div>

                <div 
                
                <div class="text-end">
                    <button type="submit" class="btn btn-primary">
                        <i class="bi bi-save"></i> Simpan Perubahan
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
