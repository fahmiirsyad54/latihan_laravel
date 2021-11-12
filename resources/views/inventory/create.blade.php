@extends('layouts.main')

@section('container')
<div class="col-lg-8">
    <form method="post" action="/inventory">
        @csrf
        <div class="mb-3">
            <label for="judul" class="form-label">Judul</label>
            <input type="text" class="form-control" id="judul" name="judul" >
        </div>

        <div class="mb-3">
            <label for="link" class="form-label">Link</label>
            <input type="text" class="form-control" id="link" name="link" >
        </div>

        <div class="mb-3">
            <label for="deskripsi" class="form-label">Deskripsi</label>
            <input type="text" class="form-control" id="deskripsi" name="deskripsi">
        </div>
        
        <button type="submit" class="btn btn-primary">Tambah</button>
    </form>
</div>
    
@endsection