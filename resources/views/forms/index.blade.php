@extends ('forms.layout')
@section ('content')
<div class="row">
    <div class="col-lg-12 p5">
        <div class="pull-left">
            <h2>Formulir Pendaftaran</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('forms.create') }}"> Tambah Formulir</a>
        </div>
    </div>
</div>

@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif

<table class="table table-bordered">
    <tr class="text-center">
        <th>Nama</th>
        <th>Jenis Kelamin</th>
        <th>Prodi & Tingkat</th>
        <th>Email</th>
        <th>No HP</th>
        <th>Lomba</th>
        <th>Image</th>
        <th width="280px">Action</th>
    </tr>
    @if ($forms->isEmpty())
        <td colspan="7" class="text-center">
            Tidak ada data formulir yang tersedia.
        </td>
    @else
    @foreach($forms as $form)
    <tr>
        <td>{{ $form->name }}</td>
        <td>{{ $form->gender }}</td>
        <td>{{ "$form->prodi - $form->tingkat" }}</td>
        <td>{{ $form->email }}</td>
        <td>{{ $form->phone }}</td>
        <td>{{ $form->lomba }}</td>
        <td>
            @if ($form->image)
                <img src="{{ asset('post-images/' . $form->image) }}" alt="{{ $form->image }}" style="width: 100px; height:auto;">
            @else
                NO Image
             @endif
            
        </td>
        <td>
            <form action="{{route('forms.destroy', $form->id) }}" method="POST">
                <a class="btn btn-info" href="{{route('forms.show', $form->id) }}">Show</a>
                <a class="btn btn-primary" href="{{ route('forms.edit', $form->id) }}">Edit</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
    @endif 
</table>

{{-- <table class="table table-bordered">
    <tr class="text-center">
        <th>Nama</th>
        <th>Jenis Kelamin</th>
        <th>Prodi & Tingkat</th>
        <th>Email</th>
        <th>No phone</th>
        <th>Jenis Lomba<th>
        <th width="280px">Action</th>
    </tr>
    @if ($forms->isEmpty())
    <tr>
        <td colspan="7" class="text-center">Tidak ada data formulir yang tersedia.</td>
    </tr>
    @else
    @foreach ($forms as $form)
    <tr>
        <td>{{ $form->name }}</td>
        <td>{{ $form->gender }}</td>
        <td>{{ "$form->prodi - $form->tingkat" }}</td>
        <td>{{ $form->email }}</td>
        <td>{{ $form->phone }}</td>
        <td>{{ $form->lomba }}</td>
        <td>
            <form action="{{ route('forms.destroy', $form->id) }}" method="POST" class="d-inline">
                <a class="btn btn-info" href="{{ route('forms.show', $form->id) }}">Show</a>
                <a class="btn btn-primary" href="{{ route('forms.edit', $form->id) }}">Edit</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
    @endif
</table> --}}

{{ $forms->links() }}
@endsection