@extends ('forms.layout')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Formulir Pendaftaran</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('forms.create') }}">Kembali</a>
        </div>    
    </div>
</div>

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Nama:</strong>
            {{ $form->name }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Prodi & Tingkat:</strong>
            {{ $form->prodi }} - {{ $form->tingkat }}
        </div>
    </div>    
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Jenis Kelamin:</strong>
            {{ $form->gender }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Email:</strong>
            {{ $form->email }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Phone:</strong>
            {{ $form->phone }}  
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Jenis Lomba:</strong>
            {{ $form->lomba }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>File Foto:</strong>
            <img src="{{ asset('storage/' . $form->file) }}" alt="Foto" class="img-thumbnail" style="max-width: 200px;">
        </div>
    </div>
@endsection
