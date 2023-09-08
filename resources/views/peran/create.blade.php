@extends('layout.master')

	@section('judul')
    Tambah Peran
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
    <form method="post" action="/peran">
        @csrf
        <div class="form-group">
            <label>Film</label>
            <select class = "form-control" name="film">
                <option value="">Pilih Film</option>
                @forelse ($film as $key => $item)
                <option value="{{ $item['id'] }}">{{ $item['judul'] }}</option>
                @empty
                @endforelse
</select>
</div>
@error('film')
<div class="alert alert-danger">{{ $message }}</div>
@enderror

<div class="form-group">
            <label>Cast</label>
            <select class = "form-control" name="cast">
                <option value="">Pilih Cast</option>
                @forelse ($cast as $key => $item)
                <option value="{{ $item['id'] }}">{{ $item['nama'] }}</option>
                @empty
                @endforelse
</select>
</div>
@error('cast')
<div class="alert alert-danger">{{ $message }}</div>
@enderror

<div class="form-group">
            <label>Nama</label>
            <input type="string" name="nama" value="" class="form-control">
</div>
@error('nama')
<div class="alert alert-danger">{{ $message }}</div>
@enderror


<button type="submit" class="btn btn-primary">Simpan</button>
</form>
@endsection