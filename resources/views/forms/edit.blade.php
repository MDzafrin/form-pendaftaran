@extends ('forms.layout')
@section ('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Edit Formulir Pendaftaran</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('forms.index') }}"> Kembali</a>
        </div>
    </div>
</div>

@if ($errors->any())
<div class="alert alert-danger">
    <strong>Whoops!</strong> Ada beberapa masalah dengan input Anda.<br><br>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{ route('forms.update', $form->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama:</strong>
                <input type="text" name="name" value="{{ $form->name }}" class="form-control" placeholder="Nama Lengkap">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Email:</strong>
                <input type="email" name="email" value="{{ $form->email }}" class="form-control" placeholder="Email">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group  ">
                <strong>Phone:</strong>
                <input type="text" name="phone" value="{{ $form->phone }}" class="form-control" placeholder="Nomor Telepon">    
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Simpan Perubahan</button> 
        </div>
    </div>
</form>
@endsection