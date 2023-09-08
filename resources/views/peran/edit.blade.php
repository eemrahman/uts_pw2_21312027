@extends('layout.master')

	@section('judul')
    Edit Peran
    @endsection

    
@push('script')
<script src="https://cdn.datatables.net/v/bs4/dt-1.13.6/datatables.min.js"></script>
<script>
    $(function(){
        $('#example1').DataTable();
    });
</script>
@endpush

@push('style')
<link href="https://cdn.datatables.net/v/bs4/dt-1.13.6/datatables.min.css" rel="stylesheet">
@endpush

	@section('content')
    <form method="post" action="/peran/{{ $peran->id }}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label>Film</label>
            <select class = "form-control" name="film">
                <option value="">Pilih Film</option>
                @forelse ($film as $key => $item)
                <option value="{{ $item['id'] }}">{{ $peran->film }}</option>
                @empty
                @endforelse
</select>

@error('film')
<div class="alert alert-danger">{{ $message }}</div>
@enderror

<div class="form-group">
            <label>Cast</label>
            <select class = "form-control" name="cast">
                <option value="">Pilih Cast</option>
                @forelse ($cast as $key => $item)
                <option value="{{ $item['id'] }}">{{ $peran -> cast }}</option>
                @empty
                @endforelse
</select>
</div>
@error('cast')
<div class="alert alert-danger">{{ $message }}</div>
@enderror

<div class="form-group">
            <label>Nama</label>
            <input type="string" name="nama" value="{{ $peran->nama }}" class="form-control">
</div>

<button type="submit" class="btn btn-primary">Simpan</button>
</form>
@endsection